
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

    <h1 class="mb-4">Daftar Buku</h1>

    <div class="row">
        <?php
        // Contoh data dummy buku (id-nya OpenLibrary Works ID)
        $books = [
            [
                'id' => 'OL45883W',
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'cover' => 'https://covers.openlibrary.org/b/id/10215751-M.jpg'
            ],
            [
                'id' => 'OL27448W',
                'title' => 'The Adventures of Tom Sawyer',
                'author' => 'Mark Twain',
                'cover' => 'https://covers.openlibrary.org/b/id/10516890-M.jpg'
            ],
            [
                'id' => 'OL82563W',
                'title' => 'Moby-Dick',
                'author' => 'Herman Melville',
                'cover' => 'https://covers.openlibrary.org/b/id/7222246-M.jpg'
            ]
        ];
        ?>

        <?php foreach ($books as $book): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= esc($book['cover']) ?>" class="card-img-top" alt="<?= esc($book['title']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($book['title']) ?></h5>
                        <p class="card-text">Penulis: <?= esc($book['author']) ?></p>
                        <a href="<?= site_url('book/' . $book['id']) ?>" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
