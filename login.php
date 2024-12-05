<?php
session_start();
include('db.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk cek username
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Ambil data user

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header('Location: index.php');
        } else {
            echo "<p style='color: red; text-align: center;'>Password salah!</p>";
        }
    } else {
        echo "<p style='color: red; text-align: center;'>Username tidak ditemukan!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DriveSmart Academy</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h1 {
            color: #004d99;
            margin-bottom: 20px;
        }

        .login-container input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .login-container button {
            width: 100%;
            background-color: #004d99;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #003366;
        }

        .signup-link {
            margin-top: 20px;
            font-size: 14px;
            color: #004d99;
        }

        .signup-link a {
            text-decoration: none;
            color: #004d99;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Log In</h1>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Log In</button>
        </form>
        <div class="signup-link">
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </div>
</body>
</html>
