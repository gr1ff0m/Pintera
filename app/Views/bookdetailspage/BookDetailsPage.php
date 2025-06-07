<!DOCTYPE html>
<html>
<head>
    <title><?= esc($book['title']) ?></title>
</head>
<body>
    <h1><?= esc($book['title']) ?></h1>
    <?php if ($book['cover']): ?>
        <img src="<?= esc($book['cover']) ?>" alt="Cover" width="200">
    <?php endif; ?>

    <p><strong>Deskripsi:</strong><br><?= esc($book['description']) ?></p>

    <?php foreach ($book['authors'] as $author): ?>
        <p><strong>Penulis:</strong> <?= esc($author['name']) ?></p>
        <p><strong>Deskripsi Penulis:</strong> <?= esc($author['bio']) ?></p>
    <?php endforeach; ?>

    <a href="<?= esc($book['read_url']) ?>" target="_blank">
        <button>Baca Buku</button>
    </a>

    <a href="<?= esc($book['download_url']) ?>" target="_blank">
        <button>Download Buku</button>
    </a>
</body>
</html>
