<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - DriveSmart Academy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .container h1 {
            color: #004d99;
        }
        .container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .container p {
            font-size: 16px;
            color: #333333;
            line-height: 1.6;
        }
        .cta-button {
            display: inline-block;
            background-color: #004d99;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
        }
        .cta-button:hover {
            background-color: #003366;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di DriveSmart Academy</h1>
        <img src="https://kursusmengemudiprivate.co.id/wp-content/uploads/2023/08/Revisi-Profil-Kursus-Mengemudi-Private.png" alt="Kantor DriveSmart Academy">
        <p>
            Kami adalah solusi terbaik untuk belajar mengemudi dengan aman dan percaya diri.<br>
            Di DriveSmart Academy, kami menawarkan kursus mengemudi privat yang dirancang khusus untuk kebutuhan Anda, 
            dengan instruktur profesional dan metode pengajaran yang mudah dipahami.
        </p>
        <p>
            <strong>Mengapa Memilih DriveSmart Academy?</strong><br>
            Privat & Fleksibel: Waktu belajar yang bisa disesuaikan dengan jadwal Anda.<br>
            Instruktur Profesional: Berpengalaman dan bersertifikasi.<br>
            Harga Terjangkau: Hanya Rp500.000 per bulan.<br>
            Lokasi Strategis: Akses mudah ke kantor kami.
        </p>
        <p>
            Bergabunglah bersama kami untuk memulai perjalanan mengemudi Anda dengan percaya diri.<br>
            Daftar sekarang dan raih keahlian mengemudi Anda di DriveSmart Academy!
        </p>
        <a class="cta-button" href="form_pendaftaran.php">Daftar Sekarang</a>
    </div>
</body>
</html>
