<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Table Manner - Website Kuliner</title>
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
    .photo-card {
      text-align: center;
    }
    .photo-caption {
      margin-top: 10px;
      font-size: 0.95rem;
      text-align: justify;
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="frontend#Home">Kuliner</a>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/#Gallery">Gallery</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- ISI HALAMAN -->
<div class="container py-5">
  <h2 class="text-center fw-bold mb-4">TABLE MANNER</h2>

  <!-- Deskripsi kegiatan -->
  <p class="description">
    Table Manner adalah kegiatan pembelajaran luar kelas yang bertujuan untuk memberikan pemahaman kepada siswa mengenai etika makan yang berlaku di dunia perhotelan dan industri kuliner internasional. 
    Dalam kegiatan ini, siswa berkunjung ke tempat profesional untuk mempelajari tata cara makan formal, jenis peralatan makan, urutan penyajian makanan, serta perilaku sopan santun saat berada di meja makan. 
    Kegiatan ini juga bertujuan untuk membentuk karakter profesional dan meningkatkan kepercayaan diri siswa jurusan kuliner dalam menghadapi dunia kerja.
  </p>

  <!-- Galeri foto dengan deskripsi lebih rinci -->
  <div class="row g-4 mt-4">
    <div class="col-md-4 photo-card">
      <img src="{{asset('assets/pages/tablemanner1.jpg')}}" class="img-fluid rounded shadow-sm" alt="Kunjungan ke hotel bintang lima">
      <div class="photo-caption">
        Para siswa jurusan kuliner tiba di hotel bintang lima di Yogyakarta untuk mengikuti kegiatan Table Manner. Kegiatan ini menjadi pengalaman belajar langsung di lingkungan profesional.
      </div>
    </div>

    <div class="col-md-4 photo-card">
      <img src="{{asset('assets/pages/tablemanner2.jpg')}}" class="img-fluid rounded shadow-sm" alt="Pemaparan materi etika makan">
      <div class="photo-caption">
        Instruktur hotel memberikan materi seputar etika makan internasional, mulai dari posisi duduk, cara berbicara di meja makan, hingga penggunaan serbet dan alat makan.
      </div>
    </div>

    <div class="col-md-4 photo-card">
      <img src= "{{asset('assets/pages/tablemanner3.jpg')}}" class="img-fluid rounded shadow-sm" alt="Simulasi makan formal">
      <div class="photo-caption">
        Siswa mengikuti simulasi makan resmi di meja panjang dengan penyajian hidangan berurutan, mencerminkan praktik yang biasa dilakukan di hotel atau jamuan internasional.
      </div>
    </div>

    <div class="col-md-4 photo-card">
      <img src="{{asset('assets/pages/tablemanner4.jpg')}}" class="img-fluid rounded shadow-sm" alt="Praktik menggunakan alat makan">
      <div class="photo-caption">
        Siswa dilatih untuk menggunakan alat makan dengan benar, seperti cara memegang garpu, sendok, dan pisau sesuai standar internasional dalam suasana formal.
      </div>
    </div>

    <div class="col-md-4 photo-card">
      <img src="{{asset('assets/pages/tablemanner5.jpg')}}" class="img-fluid rounded shadow-sm" alt="Praktik makan bersama">
      <div class="photo-caption">
        Siswa duduk bersama dalam formasi resmi dan mempraktikkan table manner dengan penuh antusias, membangun kepercayaan diri dan etika sosial yang baik.
      </div>
    </div>

    <div class="col-md-4 photo-card">
      <img src="{{asset('assets/pages/tablemanner6.jpg')}}" class="img-fluid rounded shadow-sm" alt="Foto bersama">
      <div class="photo-caption">
        Kegiatan diakhiri dengan sesi foto bersama di lobi hotel. Foto ini menjadi dokumentasi berharga dari pengalaman belajar yang tak terlupakan bagi para siswa.
      </div>
    </div>
  </div>
</div>

<!-- SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>