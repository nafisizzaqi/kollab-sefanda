<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Website Kuliner</title>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example">
  <link rel="stylesheet" href="./assets/css/style.css">

  <head>
    <!--Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdeliver.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello World!</title>
  </head>
</body>
<!--NAVBAR-->
<nav class="navbar navbar-expand-lg py-2 sticky -top bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img class="logo" src="../assets/img/logokuliner.png" alt="logokuliner" style="width: 50px; height: auto;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#Home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#About">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Gallery">Galerry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#guru">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Contact">Contact</a>
        </li>


        <!-- HTML -->
        <script>
          AOS.init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    </div>

    <script>
      AOS.init();
    </script>
  </div>
  </div>
</nav>
<div class="hero vh-100 d-flex align-items-center" id="Home">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto text-center">
        <h1 class="display-4 text-white">Selamat datang di Website Kuliner</h1>
        <p class="text-white my-3">kuliner yaitu bidang studi yang fokus pada seni dan ilmu memasak,
          serta manajemen usaha kuliner. Ini juga cocok buat yang punya passion di dapur,
          suka eksplorasi rasa, dan tertarik dengan dunia makanan dari sisi kreatif maupun bisnis.</p>
        <a href="#Contact" class="btn btn-success">View Details</a>
      </div>
    </div>
  </div>
</div>
</body>

</html>

<!--ABOUT-->
<section id="About" class="py-5 bg-light">
  <div class="container py-5">
    <div class="text-center mb-4">
      <img id="about-image" src="" alt="Logo About" class="img-fluid mb-3" width="100" />
      <h2 class="fw-bold">Tentang <span id="about-title" class="fst-italic"></span></h2>
    </div>
    <div class="text-justify">
      <div id="about-description"></div>
      <hr>
      <!--garis-->
      <p class="text-success fw-semibold">
        Untuk mencetak lulusan yang unggul, profesional, dan berdaya saing tinggi, jurusan kuliner memiliki visi & misi
        berikut:
      </p>
          <div class="row">
            <div class="col-md-6">
              <h5><strong>Visi:</strong></h5>
              <p id="about-visi"></p>
            </div>
            <div class="col-md-6">
              <h5><strong>Misi:</strong></h5>
              <ul id="about-misi"></ul>
            </div>
          </div>
</section>


</div>
</div>
</div>
</div>

<!--GALERRY-->
{{-- <section id="Galerry" class="py-5">
  <div class="container py-5">
    <h2 class="fw-bold text-center mb-4">Galerry</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col-md-6">
        <a href="tablemanner" style="text-decoration: none;">
          <div class="card-custom">
            <img src="../assets/img/Tablemanner.jpg" alt="Tablemanner">
            <div class="section-title">TABLE MANNER.</div>
            <div class="section-desc">kegiatan kunjungan ke Dunia Usaha/Dunia Industri guna menambah ilmu kuliner dunia
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="tefa" style="text-decoration: none;">
          <div class="card-custom">
            <img src="../assets/img/Tefakuliner.jpg" alt="Tefa Kuliner">
            <div class="section-title">TEFA KULINER</div>
            <div class="section-desc">ruang praktik pembelajaran yang dikemas menarik oleh jurusan kuliner</div>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="karya" style="text-decoration: none;">
          <div class="card-custom">
            <img src="../assets/img/karyamakanan.jpg" alt="Karya Makanan">
            <div class="section-title">KARYA MAKANAN</div>
            <div class="section-desc">sajian masakan lokal dan internasional yang diciptakan oleh siswa kuliner</div>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="prestasi" style="text-decoration: none;">
          <div class="card-custom">
            <img src="../assets/img/Prestasikuliner.jpg" alt="Prestasi">
            <div class="section-title">PRESTASI</div>
            <div class="section-desc">kejuaraan dari lomba memasak yang ditorehkan siswa kuliner</div>
</section> --}}
<section id="Gallery" class="py-5">
  <div class="container py-5">
    <h2 class="fw-bold text-center mb-4">Gallery</h2>
    <div id="gallery-list" class="row row-cols-1 row-cols-md-2 g-4">
      
    </div>
  </div>
</section>



<!-- GURU -->
{{-- <section id="guru" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-success">Guru</h2>
    <div class="row text-center justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card border-0">
          <img src="../assets/img/Karina.jpg" alt="Karina Kusumastuti" class="rounded-circle mx-auto d-block"
            style="width: 150px; height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 class="text-success fw-bold">Karina Kusumastuti, S.Pd</h5>
            <p class="mb-1">Ketua Jurusan Kuliner</p>
            <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card border-0">
          <img src="../assets/img/Widiharyani.jpg" alt="Widi Haryani" class="rounded-circle mx-auto d-block"
            style="width: 150px; height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 class="text-success fw-bold">Widi Haryani, S.Pd</h5>
            <p class="mb-1">Kepala Unit Produksi & Ka. Divisi Marketing</p>
            <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card border-0">
          <img src="../assets/img/Fitriyunita.jpg" alt="Fitri Yunita" class="rounded-circle mx-auto d-block"
            style="width: 150px; height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 class="text-success fw-bold">Fitri Yunita, S.Pd</h5>
            <p class="mb-1">Bendahara & Ka. Divisi Sosial</p>
            <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card border-0">
          <img src="../assets/img/Marita.jpg" alt="Marita Anggiet" class="rounded-circle mx-auto d-block"
            style="width: 150px; height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 class="text-success fw-bold">Marita Anggiet Artay, S.Pd</h5>
            <p class="mb-1">Sekertaris & Ka. Divisi R&D</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card border-0">
          <img src="../assets/img/Fitriyunita.jpg" alt="Heni" class="rounded-circle mx-auto d-block"
            style="width: 150px; height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 class="text-success fw-bold">Heni Wahyutisari, SE, MM.</h5>
            <p class="mb-1">Ka. Laboratorium & Ka.Divisi Sosmed</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card border-0">
          <img src="../assets/img/Dwi.jpg" alt="Dwi" class="rounded-circle mx-auto d-block"
            style="width: 150px; height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 class="text-success fw-bold">Dwi Atminingsih, S.Pd</h5>
            <p class="mb-1">Humas & Ka. Divisi Kesiswaan</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<section id="guru" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-success">Guru</h2>
    <div id="guru-list" class="row text-center justify-content-center">
      <!-- Data guru akan muncul di sini -->
    </div>
  </div>
</section>


</div>
</a>
</div>
</div>
</div>

<!--CONTACT-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<section id="Contact" class="py-5 bg-light">
  <section class="contact-section py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <h3 class="mb-4 fw-bold">CONTACT US</h3>
          <p><i class="fab fa-whatsapp"></i></i> +62 832456789101</p>
          <a href="https://www.instagram.com/culinary_smkn1tengaran?igsh=dnkwY3AyM3hxNjlt" target="_blank"
            style="text-decoration: none; color: inherit;">
            <p><i class="fab fa-instagram"></i> @culinary_smktengaran</p>
          </a>

          <p><i class="fas fa-map-marker-alt"></i> Jl. Darun Na’im, Karang duren, Kec. Tengaran, Kabupaten Semarang,
            Jawa Tengah</p>
        </div>

        <div class="col-md-6">
          <h3 class="mb-4 fw-bold">GET IN TOUCH</h3>
          <form action="submit_form.php" method="POST">
            <div class="mb-3">
              <input type="text" name="nama" class="form-control rounded-pill" placeholder="Nama Anda" required>
            </div>
            <div class="mb-3">
              <input type="text" name="kontak" class="form-control rounded-pill" placeholder="Nomor HP" required>
            </div>
            <div class="mb-3">
              <textarea name="pesan" class="form-control rounded-4" rows="5" placeholder="Pesan Anda"
                required></textarea>
            </div>
            <button type="submit" class="btn btn-dark px-4 rounded-pill">Kirim</button>
          </form>
        </div>

      </div>
    </div>
    <hr style="margin: 20px 0; border: 1px solid #000000;">
    <p style="text-align: center;">
      <a href="pages/teams.html">
        <img src="../assets/img/logokuliner.png" alt="Team" style="height: 40px; vertical-align: middle;"
          title="Lihat Tim Kami">
      </a>
      Copyright © 2025 by @sefanda | All Right Reserved <a href="/teams">Teams</a>
    </p>

    <script src="../assets/js/about.js"></script>
    <script src="../assets/js/gallery.js"></script>
    <script src="../assets/js/guru.js"></script>
    </body>

    </html>