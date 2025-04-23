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
            background: linear-gradient(45deg, #0a0a2e, #1a1a3a);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .info-container {
            background: rgba(16, 16, 32, 0.9);
            padding: 2.5rem 3rem;
            border-radius: 16px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.2),
                        0 0 40px rgba(0, 255, 255, 0.1);
            width: 100%;
            max-width: 500px;
            border: 1px solid rgba(0, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #0ff;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
        }

        p {
            font-size: 1rem;
            margin: 0.8rem 0;
            color: #b4b4ff;
            border-bottom: 1px solid rgba(0, 255, 255, 0.1);
            padding-bottom: 0.8rem;
        }

        strong {
            color: #0ff;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        .nav-links {
            margin-top: 2rem;
            display: flex;
            justify-content: space-between;
            gap: 1rem;
        }

        .nav-links a {
            background: linear-gradient(90deg, #ff00ff, #00ffff);
            color: #000;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: bold;
            flex: 1;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
        }

        .nav-links a:hover {
            background: linear-gradient(90deg, #00f, #0ff);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        .nav-links a:last-child {
            background: linear-gradient(45deg,	#ff8099, #ff4081);
        }

        .nav-links a:last-child:hover {
            box-shadow: 0 0 25px rgba(255, 0, 85, 0.5);
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
