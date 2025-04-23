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
            background: linear-gradient(45deg, #0a0a2e, #1a1a3a);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .info-container {
            background: rgba(16, 16, 44, 0.9);
            padding: 2rem 3rem;
            border-radius: 16px;
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.2),
                        0 0 40px rgba(0, 255, 255, 0.1);
            width: 100%;
            max-width: 500px;
            border: 1px solid rgba(255, 0, 255, 0.1);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .info-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent,
                rgba(255, 0, 255, 0.1),
                transparent
            );
            animation: shine 4s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-50%) translateY(-50%) rotate(0deg); }
            100% { transform: translateX(-50%) translateY(-50%) rotate(360deg); }
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
            font-size: 1.1rem;
            margin: 0.8rem 0;
            color: #fff;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
            border-bottom: 1px solid rgba(0, 255, 255, 0.1);
            padding-bottom: 0.8rem;
        }

        strong {
            color: #0ff;
            text-shadow: 0 0 5px rgba(0, 255, 255, 0.5);
        }

        .nav-links {
            margin-top: 2rem;
            display: flex;
            justify-content: space-between;
            gap: 1rem;
        }

        .nav-links a {
            color: white;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
            flex: 1;
            text-align: center;
        }

        .nav-links .personal-link {
            background: linear-gradient(90deg, #ff00ff, #00ffff);
        }

        .nav-links .logout-link {
            background: linear-gradient(45deg, #ff8099, #ff4081);
        }

        .nav-links a:hover {
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        .nav-links .personal-link:hover {
            background: linear-gradient(90deg, #00f, #0ff);
        }

        .nav-links .logout-link:hover {
            background: linear-gradient(45deg, #ff4081, #ff2d70);
        }

        .nav-links a:active {
            transform: translateY(1px);
        }

    </style>
</head>
<body>
    <div class="info-container">
        <h2>Login Credentials</h2>
        <p><strong>Username:</strong> <?= htmlspecialchars($_SESSION["username"]) ?></p>
        <p><strong>Password:</strong> <?= htmlspecialchars($_SESSION["password"]) ?> 

        <div class="nav-links">
            <a href="personal.php" class="personal-link">Back to Personal Info</a>
            <a href="logout.php" class="logout-link">Logout</a>
        </div>
    </div>
</body>
</html>
