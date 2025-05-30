<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "kolaborasi_TB";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama   = $_POST['nama'];
$kontak = $_POST['kontak'];
$pesan  = $_POST['pesan'];

$sql = "INSERT INTO kontak (nama, kontak, pesan) VALUES ('$nama', '$kontak', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Pesan berhasil dikirim!');
        window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Terjadi kesalahan: " . addslashes($conn->error) . "');
        window.location.href = 'index.php';
    </script>";
}

$conn->close();
?>
