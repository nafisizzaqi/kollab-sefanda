<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Prestasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .section-title {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-top: 40px;
    }
    .desc-text {
      max-width: 800px;
      margin: 20px auto;
      text-align: justify;
      font-size: 1.1rem;
    }
    .prestasi-list {
      max-width: 800px;
      margin: 0 auto 40px;
      font-size: 1rem;
    }
    .juara-img {
      max-width: 400px;
      display: block;
      margin: 30px auto 10px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    .img-caption {
      text-align: center;
      color: #28a745;
      font-weight: 600;
      font-size: 1rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="section-title">PRESTASI</div>

    <p class="desc-text">
      Siswa jurusan kuliner telah aktif mengikuti berbagai kompetisi dan lomba memasak di tingkat lokal maupun nasional. 
      Tujuannya adalah untuk mengasah keterampilan memasak, meningkatkan kepercayaan diri, serta mengembangkan kreativitas dalam dunia kuliner. 
      Berikut adalah beberapa prestasi membanggakan yang telah diraih oleh siswa kami:
    </p>

    <ol class="prestasi-list">
      <li>Juara 2 Lomba Memasak <i>Creativity Culinary</i> "The Next Level of Cassava" di Fakultas Ekonomi dan Bisnis Universitas Kristen Satya Wacana.</li>
      <li>Juara 1 Lomba Memasak <i>Creativity Culinary</i> "The Next Level of Cassava" di Fakultas Ekonomi dan Bisnis Universitas Kristen Satya Wacana.</li>
      <li>Juara Terkreatif dalam ajang <i>Mapan Geting Gayeng</i> di Universitas Ngudi Waluyo.</li>
      <li>Juara 1 dalam kategori <i>Hidden Gems</i> pada event UDINUS Fest 2023.</li>
      <li>Juara 2 Lomba Kudapan Milenial yang diselenggarakan oleh Dinas Perikanan dan Kelautan Provinsi Jawa Tengah.</li>
      <li>Perwakilan sekolah dalam Lomba Kompetensi Siswa (LKS) Tingkat Jawa Tengah untuk cabang <i>Patisserie and Confectionery</i>.</li>
    </ol>

    <div class="text-center">
      <img src="{{asset('assets/pages/Prestasikuliner.jpg')}}" alt="Juara 2 Cooking" class="img-fluid rounded juara-img">
      <div class="img-caption">Salah satu momen kemenangan: Juara 2 lomba memasak dalam rangka Dies Natalis Universitas Kristen Satya Wacana.</div>
    </div>
  </div>
</body>
</html>
