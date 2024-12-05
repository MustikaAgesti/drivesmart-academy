<?php
// Koneksi ke database
include('db.php');

if (isset($_POST['submit'])) {
    // Ambil data dari form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Hash password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah username sudah ada
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<p style='color: red; text-align: center;'>Username sudah terdaftar!</p>";
    } else {
        // Masukkan data ke tabel users
        $insert_query = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
        if ($conn->query($insert_query) === TRUE) {
            echo "<p style='color: green; text-align: center;'>Pendaftaran berhasil! Silakan <a href='login.php'>login</a>.</p>";
        } else {
            echo "<p style='color: red; text-align: center;'>Terjadi kesalahan: " . $conn->error . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - DriveSmart Academy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }
        .signup-container h1 {
            color: #004d99;
            margin-bottom: 20px;
        }
        .signup-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .signup-container button {
            width: 100%;
            background-color: #004d99;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .signup-container button:hover {
            background-color: #003366;
        }
        .login-link {
            margin-top: 20px;
            font-size: 14px;
            display: block;
            color: #004d99;
            text-decoration: none;
        }
        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit" name="submit">Daftar</button>
        </form>
        <a class="login-link" href="login.php">Sudah punya akun? Login di sini</a>
    </div>
</body>
</html>
