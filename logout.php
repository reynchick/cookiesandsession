<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged Out</title>
    <meta http-equiv="refresh" content="3;url=home.php"> <!-- Auto redirect after 3 seconds -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logout-container {
            background: white;
            padding: 2rem 3rem;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            color: #333;
            margin-bottom: 1rem;
        }

        p {
            color: #555;
            font-size: 1rem;
        }

        .loader {
            margin: 1rem auto 0;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #007bff;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .redirect-note {
            font-size: 0.9rem;
            color: #888;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h2>You've been logged out</h2>
        <p>Thank you for using the system.</p>
        <div class="loader"></div>
        <div class="redirect-note">Redirecting to homepage in 3 seconds...</div>
    </div>
</body>
</html>
