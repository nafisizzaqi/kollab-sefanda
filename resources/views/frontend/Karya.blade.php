<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>KARYA MAKANAN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
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
  <div class="container py-5">
    <h2 class="text-center fw-bold mb-4">KARYA MAKANAN</h2>

    <p class="text-center mb-4">
      Berikut adalah dokumentasi berbagai hasil karya makanan buatan siswa jurusan kuliner. Setiap hidangan dibuat dengan kreativitas dan teknik yang telah dipelajari selama proses pembelajaran.
    </p>

    <div class="row g-4">
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Karyamakanan1.jpg')}}" class="img-fluid rounded shadow-sm" alt="Karya Makanan 1">
        <div class="photo-caption">
          Hidangan pembuka berupa salad sayuran segar dengan saus vinaigrette buatan sendiri. Menonjolkan kombinasi warna dan keseimbangan rasa.
        </div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Karyamakanan2.jpg')}}" class="img-fluid rounded shadow-sm" alt="Karya Makanan 2">
        <div class="photo-caption">
          Menu utama berupa ayam panggang dengan bumbu khas rempah Indonesia, disajikan dengan kentang dan sayuran rebus.
        </div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Karyamakanan3.jpg')}}" class="img-fluid rounded shadow-sm" alt="Karya Makanan 3">
        <div class="photo-caption">
          Hidangan penutup berupa puding cokelat dengan saus karamel dan taburan kacang almond, menunjukkan teknik plating yang elegan.
        </div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Karyamakanan4.jpg')}}" class="img-fluid rounded shadow-sm" alt="Karya Makanan 4">
        <div class="photo-caption">
          Kreasi nasi goreng modern yang dipadukan dengan telur mata sapi dan kerupuk udang, dihias dengan potongan timun dan tomat.
        </div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Karyamakanan5.jpg')}}" class="img-fluid rounded shadow-sm" alt="Karya Makanan 5">
        <div class="photo-caption">
          Dessert berbahan dasar buah naga dan yoghurt, dikemas secara estetik sebagai menu sehat dengan tampilan modern.
        </div>
      </div>
      <div class="col-md-4 photo-card">
        <img src="{{asset('assets/pages/Karyamakanan6.jpg')}}" class="img-fluid rounded shadow-sm" alt="Karya Makanan 6">
        <div class="photo-caption">
          Kreasi menu khas Indonesia seperti rendang mini dalam bentuk finger food, cocok untuk hidangan catering atau jamuan resmi.
        </div>
      </div>
    </div>
  </div>
</body>
</html>
