<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - DriveSmart Academy</title>
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
        .logout-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }
        .logout-container h1 {
            color: #004d99;
            margin-bottom: 20px;
        }
        .logout-container a {
            background-color: #004d99;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            display: inline-block;
        }
        .logout-container a:hover {
            background-color: #003366;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h1>Anda telah berhasil Log Out</h1>
        <a href="login.php">Log In Lagi</a>
    </div>
</body>
</html>
