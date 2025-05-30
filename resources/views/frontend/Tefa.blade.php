<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>TEFA Kuliner</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .section-title {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
    }
    .description {
      max-width: 800px;
      margin: 20px auto 40px;
      text-align: justify;
      font-size: 1.1rem;
    }
    .photo-card {
      text-align: center;
    }
    .photo-card img {
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .caption {
      margin-top: 10px;
      font-size: 0.95rem;
      font-style: italic;
      color: #555;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h2 class="section-title">TEFA KULINER</h2>

    <p class="description">
      Teaching Factory (TEFA) Kuliner adalah program pembelajaran berbasis produksi nyata yang dilaksanakan oleh siswa jurusan kuliner. 
      Dalam kegiatan ini, siswa dilatih untuk membuat berbagai jenis produk makanan dan minuman yang layak jual, sekaligus belajar mengenai 
      manajemen usaha, pemasaran, pengemasan, dan pelayanan pelanggan secara langsung. Program ini bertujuan untuk membekali siswa dengan 
      keterampilan wirausaha dan kesiapan menghadapi dunia kerja di industri kuliner.
    </p>

    <div class="row g-4">
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Tefakuliner1.jpg')}}" class="img-fluid" alt="Tefa 1">
        <div class="caption">Proses pembuatan roti oleh siswa dalam kegiatan TEFA.</div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Tefakuliner2.jpg')}}" class="img-fluid" alt="Tefa 2">
        <div class="caption">Pengemasan produk pastry untuk dipasarkan.</div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Tefakuliner3.jpg')}}" class="img-fluid" alt="Tefa 3">
        <div class="caption">Siswa menyajikan minuman racikan hasil praktik kuliner.</div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Tefakuliner4.jpg')}}" class="img-fluid" alt="Tefa 4">
        <div class="caption">Pelatihan plating dan presentasi makanan secara profesional.</div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Tefakuliner5.jpg')}}" class="img-fluid" alt="Tefa 5">
        <div class="caption">Simulasi pelayanan pelanggan di mini resto sekolah.</div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Tefakuliner6.jpg')}}" class="img-fluid" alt="Tefa 6">
        <div class="caption">Siswa mempromosikan hasil karya kuliner kepada pengunjung sekolah.</div>
      </div>
    </div>
  </div>
</body>
</html>
