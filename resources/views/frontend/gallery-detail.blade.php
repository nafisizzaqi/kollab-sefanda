<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Galeri - Website Kuliner</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-nav {
      margin: 0 auto;
    }

    .description {
      font-size: 1.1rem;
      margin-top: 20px;
      text-align: justify;
    }

    .photo-section {
      text-align: center;
    }

    .photo-caption {
      margin-top: 15px;
      font-size: 0.95rem;
      text-align: justify;
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">Kuliner</a>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/#Gallery">Gallery</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ISI DETAIL GALERI -->
  <div class="container py-5">

    <!-- Judul Galeri -->
    <h2 id="gallery-title" class="text-center fw-bold mb-4 text-uppercase text-primary"></h2>

    <!-- Gambar -->
    <div class="photo-section mb-4 d-flex justify-content-center">
      <img id="gallery-image" src="" alt="" class="img-fluid rounded shadow-sm"
        style="max-width: 200px; display: none;">
    </div>

    <!-- Deskripsi -->
    <div class="card shadow mx-auto" style="max-width: 700px;">
      <div class="card-body">
        <p id="gallery-description" class="description mb-3"></p>
        <p id="gallery-description2" class="photo-caption text-muted mb-0"></p>
      </div>
    </div>

  </div>


  <!-- Jika tidak ditemukan -->
  <div id="gallery-not-found" class="alert alert-warning text-center mt-5" style="display: none;">
    <h4 class="fw-semibold">Detail galeri tidak ditemukan.</h4>
    <p>Silakan kembali ke halaman sebelumnya atau pilih galeri lain.</p>
  </div>
  </div>

  <!-- JS -->
  <script src="{{ asset('assets/js/gallery-detail.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>