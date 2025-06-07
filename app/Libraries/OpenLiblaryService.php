<?php

namespace App\Libraries;

class OpenLibraryService
{
    public function getBookDetails($bookId)
    {
        $url = "https://openlibrary.org/works/{$bookId}.json";

        $response = file_get_contents($url);
        if (!$response) return null;

        $data = json_decode($response, true);

        return [
            'id' => $bookId,
            'title' => $data['title'] ?? 'Unknown',
            'description' => is_array($data['description']) ? $data['description']['value'] : ($data['description'] ?? 'No description'),
            'authors' => $this->getAuthors($data['authors'] ?? []),
            'cover' => isset($data['covers'][0]) ? "https://covers.openlibrary.org/b/id/{$data['covers'][0]}-L.jpg" : null,
            'read_url' => "https://openlibrary.org/works/{$bookId}",
            'download_url' => $this->getDownloadLink($bookId)
        ];
    }

    private function getAuthors($authors)
    {
        $names = [];
        foreach ($authors as $author) {
            $authorKey = $author['author']['key'];
            $url = "https://openlibrary.org{$authorKey}.json";
            $data = json_decode(file_get_contents($url), true);
            $names[] = [
                'name' => $data['name'] ?? 'Unknown',
                'bio' => is_array($data['bio'] ?? '') ? $data['bio']['value'] : ($data['bio'] ?? 'No bio'),
            ];
        }
        return $names;
    }

    private function getDownloadLink($bookId)
    {
        // Hanya sebagai contoh, download biasanya tergantung edition, bukan works.
        return "https://openlibrary.org/works/{$bookId}/ebooks"; // Bisa ditelusuri lebih lanjut
    }
}

