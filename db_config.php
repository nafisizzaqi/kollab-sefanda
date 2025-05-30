<?php
$host = "localhost";
$user = "root";
$pass = ""; // ganti jika ada password
$db   = "kolaborasi_TB";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
