<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $query = "SELECT bukti_pembayaran FROM pendaftaran WHERE id = '$id'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();

    if ($row) {
        $fileName = $row['bukti_pembayaran'];

        if (!empty($fileName) && file_exists('uploads/' . $fileName)) {
            unlink('uploads/' . $fileName);
        }

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
