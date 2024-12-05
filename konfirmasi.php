<?php
// Mulai sesi
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveSmart Academy - Konfirmasi Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #004d99;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            color: #004d99;
        }
        .container p {
            font-size: 18px;
            line-height: 1.6;
        }
        .action-links {
            text-align: center;
            margin: 20px 0;
        }
        .action-links a {
            color: #004d99;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }
        .action-links a:hover {
            text-decoration: underline;
        }
        .footer {
            background-color: #004d99;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>DriveSmart Academy</h1>
        <p>Kursus Mengemudi Profesional</p>
    </header>

    <div class="container">
        <h2>Terima kasih sudah melakukan pendaftaran di DriveSmart Academy!</h2>
        <p>Silakan hubungi WA : <strong>08123456789</strong> untuk melakukan konfirmasi.</p>
        <p>Jika Anda belum melakukan pembayaran, silakan transfer ke nomor rekening berikut:</p>
        <ul>
            <li>BRI: 111-000-222-555 a.n DriveSmart Academy</li>
        </ul>
        <p>Setelah konfirmasi, kami akan segera menghubungi Anda untuk jadwal kursus lebih lanjut.</p>
    </div>

    <!-- Tempatkan tombol Kembali ke Home dan Log Out di sini -->
    <div class="action-links">
        <a href="index.php">Kembali ke Home</a>
        <a href="logout.php">Log Out</a>
    </div>

    <div class="footer">
        <p>&copy; 2024 DriveSmart Academy. All Rights Reserved.</p>
    </div>
</body>
</html>
