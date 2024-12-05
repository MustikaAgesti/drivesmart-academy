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
    <title>DriveSmart Academy - Pendaftaran Kursus Mengemudi</title>
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
        h2 {
            color: #004d99;
        }
        label {
            font-size: 16px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            background-color: #004d99;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #003366;
        }
        .info-section {
            background-color: #e6f2ff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
        }
        .info-section p {
            font-size: 16px;
        }
        .footer {
            background-color: #004d99;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
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
        <h2>Formulir Pendaftaran Kursus Mengemudi</h2>
        <form method="POST" action="konfirmasi.php">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>

            <label for="telepon">Nomor Telepon</label>
            <input type="text" id="telepon" name="telepon" required>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="jam_kursus">Jam Kursus</label>
            <input type="text" id="jam_kursus" name="jam_kursus" required>

            <button type="submit" name="submit">Daftar</button>
        </form>

        <!-- Informasi Harga dan Lokasi -->
        <div class="info-section">
            <p><strong>Harga per bulan: Rp 500.000</strong></p>
            <p><strong>Nomor Rekening untuk Pembayaran:</strong><br>
                111-000-222-555 (BRI) a.n DriveSmart Academy</p>
            <p>Untuk info lebih lanjut, silakan datang ke kantor kami di:</p>
            <p><strong>Jalur dua Universitas Lampung, Jalan Prof. Dr. Ir. Sumantri Brojonegoro No.1, Kota Bandar Lampung, Lampung 35141</strong></p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 DriveSmart Academy. All Rights Reserved.</p>
    </div>
</body>
</html>
