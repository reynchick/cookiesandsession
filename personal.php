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
    <title>Personal Info</title>
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
            background: white;
            padding: 2.5rem 3rem;
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
            background-color: #28a745;
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 8px;
            text-decoration: none;
            font-size: 0.95rem;
            transition: background 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #218838;
        }

        .nav-links a:last-child {
            background-color: #dc3545;
        }

        .nav-links a:last-child:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="info-container">
        <h2>Personal Information</h2>
        <p><strong>First Name:</strong> <?= htmlspecialchars($_SESSION["firstname"]) ?></p>
        <p><strong>Last Name:</strong> <?= htmlspecialchars($_SESSION["lastname"]) ?></p>
        <p><strong>Course:</strong> <?= htmlspecialchars($_SESSION["course"]) ?></p>
        <p><strong>School:</strong> <?= htmlspecialchars($_SESSION["school"]) ?></p>

        <div class="nav-links">
            <a href="login.php">View Login Info</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
