<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Akun</title>
  <link rel="stylesheet" href="/public/css/signup.css">
  <link rel="stylesheet" href="/public/javascript/signup.js">
  <?= $this->extend('layouts/guest_template') ?>
</head>
<body>
  <div class="container">
    <div class="form-section">
      <h1>Mulai sekarang</h1>

      <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
      <?php endif; ?>

      <form action="/register" method="post">
        <?= csrf_field() ?>

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" id="nama" name="username" placeholder="Masukkan nama anda" required>
        </div>

        <div class="form-group">
          <label for="email">Alamat Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan email anda" required>
        </div>

        <div class="form-group">
          <label for="password">Kata Sandi</label>
          <input type="password" id="password" name="password" placeholder="Kata sandi" required>
        </div>

        <div class="checkbox-container">
          <input type="checkbox" id="agreement" name="agreement" required>
          <label for="agreement">Saya setuju dengan syarat & ketentuan</label>
        </div>

        <button type="submit" class="submit-button">Daftar</button>
      </form>

      <div class="login-link">
        Sudah punya akun? <a href="/login">Masuk</a>
      </div>
    </div>
    </div>
  </div>
</body>
</html>
