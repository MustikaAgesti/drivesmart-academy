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
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .file-upload {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        .file-upload input[type="file"] {
            flex: 1;
        }
        button {
            background-color: #004d99;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
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
        <form method="POST" action="konfirmasi.php" enctype="multipart/form-data">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>

            <label for="telepon">Nomor Telepon</label>
            <input type="text" id="telepon" name="telepon" required>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="jam_kursus">Jam Kursus</label>
            <input type="text" id="jam_kursus" name="jam_kursus" required>

            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select id="metode_pembayaran" name="metode_pembayaran" onchange="toggleBuktiPembayaran()" required>
                <option value="transfer">Transfer</option>
                <option value="cash">Cash</option>
            </select>

            <div id="upload-section" style="display: flex; flex-direction: column;">
                <label for="bukti_pembayaran">Upload Bukti Pembayaran</label>
                <div class="file-upload">
                    <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*">
                    <button type="button" onclick="hapusFile()">Hapus</button>
                </div>
            </div>

            <button type="submit" name="submit">Daftar</button>
        </form>

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

    <script>
        function toggleBuktiPembayaran() {
            const metode = document.getElementById('metode_pembayaran').value;
            const uploadSection = document.getElementById('upload-section');
            const buktiPembayaran = document.getElementById('bukti_pembayaran');

            if (metode === 'cash') {
                uploadSection.style.display = 'none';
                buktiPembayaran.removeAttribute('required');
            } else {
                uploadSection.style.display = 'flex';
                buktiPembayaran.setAttribute('required', 'required');
            }
        }

        function hapusFile() {
            if (confirm('Apakah Anda yakin ingin menghapus file ini?')) {
                document.getElementById('bukti_pembayaran').value = '';
                alert('File telah dihapus.');
            }
        }
    </script>
</body>
</html>
