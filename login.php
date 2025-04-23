<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Info</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .info-container {
            background: #ffffff;
            padding: 2rem 3rem;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        p {
            font-size: 1rem;
            margin: 0.5rem 0;
            color: #555;
        }

        strong {
            color: #000;
        }

        .nav-links {
            margin-top: 2rem;
            display: flex;
            justify-content: space-between;
        }

        .nav-links a {
            background-color: #007bff;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s ease;
            font-size: 0.95rem;
        }

        .nav-links a:hover {
            background-color: #0056b3;
        }

        .warning {
            color: red;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="info-container">
        <h2>Login Credentials</h2>
        <p><strong>Username:</strong> <?= htmlspecialchars($_SESSION["username"]) ?></p>
        <p><strong>Password:</strong> <?= htmlspecialchars($_SESSION["password"]) ?> 
        <span class="warning">(for demo only!)</span></p>

        <div class="nav-links">
            <a href="personal.php">Back to Personal Info</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
