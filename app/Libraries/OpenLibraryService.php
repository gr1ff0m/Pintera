<?php

namespace App\Libraries;

class OpenLibraryService
{
    private $client;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'https://openlibrary.org/',
            'timeout' => 10
        ]);
    }

    public function searchBooks(string $query, int $page = 1, int $limit = 24): array
    {
        try {
            $response = $this->client->get('search.json', [
                'query' => [
                    'q' => $query,
                    'page' => $page,
                    'limit' => $limit
                ]
                ]);

            if ($response->getStatusCode() !== 200) {
                return ['books' => [], 'total_found' => 0];
            }

            $data = json_decode($response->getBody(), true);
            $formattedBooks = [];

            foreach ($data['docs'] ?? [] as $book) {
                $workId = str_replace('/works/', '', $book['key']);

                $formattedBooks[] = [
                    'id' => $workId,
                    'title' => $book['title'] ?? 'Unknown Title',
                    'authors' => isset($book['author_name']) ? implode(', ', $book['author_name']) : 'Unknown Author',
                    'cover_url' => isset($book['cover_i']) ? "https://covers.openlibrary.org/b/id/{$book['cover_i']}-M.jpg" : "https://placehold.co/600x400.png?text=No+Cover"
                ];
            }

            return [
                'books' => $formattedBooks,
                'total_found' => $data['numFound'] ?? 0
            ];

        } catch(\Exception $e) {
            return ['books' => [], 'total_found' => 0];
        }
    }

    public function getBookDetails($bookId)
    {
        try {
            $response = $this->client->get("works/{$bookId}.json");
            if ($response->getStatusCode() !== 200) return null;

            $data = json_decode($response->getBody(), true);
            
            $authorsDetails = $this->getAuthors($data['authors'] ?? []);

            return [
                'id'          => $bookId,
                'title'       => $data['title'] ?? 'Unknown Title',
                'description' => is_array($data['description'] ?? '') ? $data['description']['value'] : ($data['description'] ?? 'No description available.'),
                'authors'     => $authorsDetails,
                'cover'       => isset($data['covers'][0]) ? "https://covers.openlibrary.org/b/id/{$data['covers'][0]}-L.jpg" : "https://via.placeholder.com/300x450.png?text=No+Cover",
                'read_url'    => "https://openlibrary.org/works/{$bookId}",
            ];

        } catch (\Exception $e) {
            return null;
        }
    }

    private function getAuthors(array $authors): array
    {
        $names = [];
        // Batasi hanya untuk 3 penulis pertama untuk menghindari terlalu banyak request API
        foreach (array_slice($authors, 0, 3) as $author) {
            try {
                $authorKey = $author['author']['key']; // misal: /authors/OL123A
                $response = $this->client->get("{$authorKey}.json");

                if ($response->getStatusCode() === 200) {
                    $data = json_decode($response->getBody(), true);
                    $names[] = [
                        'name' => $data['name'] ?? 'Unknown',
                        'bio'  => is_array($data['bio'] ?? '') ? $data['bio']['value'] : ($data['bio'] ?? 'No bio'),
                    ];
                }
            } catch (\Exception $e) {
                // Jika satu penulis gagal diambil, lanjutkan ke penulis berikutnya
                continue;
            }
        }
        return $names;
    }

    private function getDownloadLink($bookId)
    {
        // Hanya sebagai contoh, download biasanya tergantung edition, bukan works.
        return "https://openlibrary.org/works/{$bookId}/ebooks"; // Bisa ditelusuri lebih lanjut
    }
    
}