<?php
// Mulai sesi
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Ambil nama file dari database
    $query = "SELECT bukti_pembayaran FROM pendaftaran WHERE id = '$id'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();

    if ($row) {
        $fileName = $row['bukti_pembayaran'];

        // Hapus file dari server
        if (!empty($fileName) && file_exists('uploads/' . $fileName)) {
            unlink('uploads/' . $fileName);
        }

        // Kosongkan kolom bukti_pembayaran di database
        $query = "UPDATE pendaftaran SET bukti_pembayaran = NULL WHERE id = '$id'";
        if ($conn->query($query)) {
            echo "Bukti pembayaran berhasil dihapus!";
            header("Location: pendaftaran.php");
            exit();
        } else {
            echo "Terjadi kesalahan saat menghapus data di database.";
        }
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "Akses tidak valid.";
}
?>
