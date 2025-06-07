<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pintera</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
      .text-brown {
        color: #8B6A36;
      }

      .nav-link-custom {
        font-weight: 600;
        color: #000;
        margin-right: 20px;
        text-decoration: none;
      }

      .nav-link-custom:hover {
        color: #8B6A36;
      }

      .search-container {
        position: relative;
        width: 350px;
      }

      .search-input {
        border-radius: 50px;
        padding-left: 2.5rem;
        padding-right: 2.5rem;
        width: 100%;
      }

      .search-icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        color: #888;
      }
    </style>
  </head>
  <body>
    
    <!-- Header -->
    <header class="px-4 py-3 border-bottom shadow-sm">
      <div class="d-flex justify-content-between align-items-center w-100">
        <!-- Left: Logo & Nav -->
        <div class="d-flex align-items-center">
          <h2 class="fw-bold text-brown m-0">Pintera</h2>
          <nav class="ms-5 d-flex">
            <a href="#" class="nav-link-custom">Beranda</a>
            <a href="#" class="nav-link-custom">Buku Saya</a>
            <a href="#" class="nav-link-custom">Jelajahi</a>
          </nav>
        </div>

        <!-- Center: Search bar -->
        <div class="search-container mx-4">
          <input type="text" class="form-control search-input" placeholder="Need help finding your book ?">
          <i class="bi bi-search search-icon"></i>
        </div>

        <!-- Right: Profile Icon -->
        <div>
          <img src="https://i.imgur.com/HlKkY4p.png" alt="User" class="rounded-circle" style="width: 32px; height: 32px;">
        </div>
      </div>
    </header>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
