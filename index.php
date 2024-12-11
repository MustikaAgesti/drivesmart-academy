<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di DriveSmart Academy</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .header {
            background-color: #004d99;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .header p {
            font-size: 18px;
            margin-top: 10px;
        }

        .content {
            padding: 40px 20px;
            text-align: center;
            max-width: 1000px;
            margin: 0 auto;
        }

        .content img {
            width: 50%;
            max-width: 800px;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .intro-text {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            margin-top: 30px;
        }

        .highlight {
            font-weight: bold;
            color: #004d99;
        }

        .benefits {
            margin-top: 20px;
            text-align: left;
            display: inline-block;
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 10px;
            width: 80%;
        }

        .benefits h3 {
            margin-top: 0;
            color: #004d99;
        }

        .benefits ul {
            list-style-type: none;
            padding: 0;
        }

        .benefits ul li {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            margin-top: 30px;
            background-color: #004d99;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #003366;
        }

        .footer {
            background-color: #004d99;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            width: 100%;
            bottom: 0;
        }

        .content {
            padding-bottom: 100px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Selamat Datang di DriveSmart Academy</h1>
        <p>Kursus Mengemudi Privat dengan Instruktur Profesional</p>
    </div>

    <div class="content">
        <img src="https://kursusmengemudiprivate.co.id/wp-content/uploads/2023/08/Revisi-Profil-Kursus-Mengemudi-Private.png" alt="Kantor DriveSmart Academy">

        <div class="intro-text">
            <p><span class="highlight">DriveSmart Academy</span></p>
            <p>Kami adalah solusi terbaik untuk belajar mengemudi dengan aman dan nyaman.</p>
            <p>Di DriveSmart Academy, kami menawarkan kursus mengemudi privat yang dirancang khusus untuk kebutuhan Anda, dengan instruktur profesional dan metode pengajaran yang mudah dipahami.</p>
        </div>

        <div class="benefits">
            <h3>Mengapa Memilih DriveSmart Academy?</h3>
            <ul>
                <li><strong>Privat & Fleksibel:</strong> Waktu belajar yang bisa disesuaikan dengan jadwal Anda.</li>
                <li><strong>Instruktur Profesional:</strong> Berpengalaman dan bersertifikasi.</li>
                <li><strong>Harga Terjangkau:</strong> Hanya Rp500.000 per bulan.</li>
                <li><strong>Lokasi Strategis:</strong> Akses mudah ke kantor kami.</li>
            </ul>
        </div>

        <a href="pendaftaran.php" class="cta-button">Daftar Sekarang</a>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>&copy; 2024 DriveSmart Academy. All Rights Reserved.</p>
    </div>
</body>
</html>
