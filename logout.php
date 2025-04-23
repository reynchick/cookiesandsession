<?php
session_start();

// Clear cookies
setcookie("last_username", "", time() - 3600, "/");
setcookie("last_school", "", time() - 3600, "/");

// Clear session
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged Out</title>
    <meta http-equiv="refresh" content="3;url=home.php">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Orbitron', 'Segoe UI', sans-serif;
            background: linear-gradient(45deg, #0a0a2e, #1a1a3a);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .logout-container {
            background: rgba(16, 16, 32, 0.8);
            padding: 2.5rem 3.5rem;
            border-radius: 8px;
            border: 1px solid #00ffff;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.2),
                        inset 0 0 20px rgba(0, 255, 255, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            backdrop-filter: blur(10px);
        }

        h2 {
            color: #00ffff;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
        }

        .loader {
            margin: 1.5rem auto 0;
            border: 3px solid rgba(0, 255, 255, 0.1);
            border-top: 3px solid #00ffff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .redirect-note {
            font-size: 0.9rem;
            color: #4d88ff;
            margin-top: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 0.6; }
            50% { opacity: 1; }
            100% { opacity: 0.6; }
        }

        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap');
    </style>
</head>
<body>
    <div class="logout-container">
        <h2>System Logout</h2>
        <div class="loader"></div>
        <div class="redirect-note">Initiating Redirect Sequence...</div>
    </div>
</body>
</html>
