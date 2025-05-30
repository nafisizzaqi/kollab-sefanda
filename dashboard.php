<?php include 'db_config.php'; 
// Proses hapus pesan jika tombol diklik
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hapus_id'])) {
  $id = intval($_POST['hapus_id']);
  $conn->query("DELETE FROM kontak WHERE id = $id");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Pesan Masuk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  body {
    background-color: #f8f9fa;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  h2 {
    color: #343a40;
    font-weight: bold;
  }

  table {
    background-color: white;
    border-radius: 0.5rem;
    overflow: hidden;
  }

  .table th, .table td {
    vertical-align: middle;
    text-align: center;
  }

  .btn-success.btn-sm {
    border-radius: 20px;
    padding: 4px 12px;
    font-size: 0.875rem;
  }

  .btn-success.btn-sm:hover {
    background-color: #218838;
    border-color: #1e7e34;
  }

  .container {
    background: #ffffff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  form {
    margin: 0;
  }

  .text-center {
    font-style: italic;
    color: #6c757d;
  }
</style>

</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">📬 Pesan Masuk</h2>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kontak</th>
          <th>Pesan</th>
          <th>Waktu</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $sql = "SELECT * FROM kontak ORDER BY waktu DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0):
          while($row = $result->fetch_assoc()):
        ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['kontak']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['pesan'])) ?></td>
            <td><?= $row['waktu'] ?></td>
            <td>
              <form method="POST" onsubmit="return confirm('Tandai pesanan ini sebagai selesai?')">
                <input type="hidden" name="hapus_id" value="<?= $row['id'] ?>">
                <button type="submit" class="btn btn-success btn-sm">Selesai ✅</button>
              </form>
            </td>
          </tr>
        <?php
          endwhile;
        else:
        ?>
          <tr>
            <td colspan="5" class="text-center">Belum ada pesan masuk.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
