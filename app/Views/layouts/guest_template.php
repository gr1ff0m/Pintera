<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pintera - Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
      body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #fff;
      }

      .btn-brown {
        background-color: #9C6B2F;
        color: white;
      }

      .btn-brown:hover {
        background-color: #835a24;
        color: white;
      }

      .text-brown {
        color: #9C6B2F;
      }

      footer {
        background: linear-gradient(to top left, #FDEDD4, #FAE3C1);
      }

      footer a img {
        width: 40px;
        height: 40px;
      }

      input[type="search"] {
        width: 200%;
        max-width: 1200px;
      }

      .search-container {
        display: flex;
        justify-content: center;
        width: 100%;
        }

      .rounded-pill {
        border-radius: 50rem !important;
      }

      .social-circle {
        background-color: white;
        border-radius: 12%;
        width: 60px;
        height: 60px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        transition: transform 0.2s;
        }

        .social-circle:hover {
        transform: scale(1.1);
        }
    </style>
  </head>

  <body>

    <!-- Header -->
    <header class="container-fluid bg-white border-bottom sticky-top py-3">
  <div class="row align-items-center">
    <div class="col-2 text-start ps-4">
      <h5 class="fw-bold text-brown mb-0">Pintera</h5>
    </div>
    <div class="col-8 text-center">
      <form class="d-flex justify-content-center" role="search">
        <input class="form-control rounded-pill px-4 w-75" type="search"
               placeholder="Butuh bantuan untuk mencari buku yang anda cari?"
               aria-label="Search">
      </form>
    </div>
    <div class="col-2 text-end pe-4">
      <button class="btn btn-brown rounded-pill">Masuk</button>
      <button class="btn btn-brown rounded-pill">Daftar</button>
    </div>
  </div>
</header>

    <!-- Konten -->
    <main class="container py-5">
      <!-- Ini tempat Anda me-render konten buku -->
      <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="text-center pt-5 pb-4">
      <h5 class="fw-bold text-brown mb-2">Pintera</h5>
      <h4 class="fw-bold mb-4">CONTACT US</h4>
      <div class="d-flex justify-content-center gap-4 mb-3">
  <a href="#" class="social-circle">
    <img src="https://img.icons8.com/ios-filled/24/000000/facebook-new.png" alt="Facebook" />
  </a>
  <a href="#" class="social-circle">
    <img src="https://img.icons8.com/ios-filled/24/000000/instagram-new.png" alt="Instagram" />
  </a>
  <a href="#" class="social-circle">
    <img src="https://img.icons8.com/ios-filled/24/000000/twitter.png" alt="Twitter" />
  </a>
  <a href="#" class="social-circle">
    <img src="https://img.icons8.com/ios-filled/24/000000/linkedin.png" alt="LinkedIn" />
  </a>
</div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>
