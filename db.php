<?php
$host = 'localhost'; // alamat server
$user = 'root'; // username database
$password = ''; // password database (default kosong di XAMPP)
$dbname = 'kursus_mengemudi'; // nama database yang telah dibuat

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
