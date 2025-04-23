<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Set cookies that will last for 30 days
    setcookie("last_username", $_POST["username"], time() + (86400 * 30), "/");
    setcookie("last_school", $_POST["school"], time() + (86400 * 30), "/");
    
    // Session variables remain the same
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["lastname"] = $_POST["lastname"];
    $_SESSION["course"] = $_POST["course"];
    $_SESSION["school"] = $_POST["school"];
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    header("Location: personal.php");
    exit();
}

// Pre-fill form if cookies exist
$last_username = isset($_COOKIE["last_username"]) ? $_COOKIE["last_username"] : "";
$last_school = isset($_COOKIE["last_school"]) ? $_COOKIE["last_school"] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
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

        .form-container {
            background: rgba(16, 16, 44, 0.9);
            padding: 2rem 3rem;
            border-radius: 16px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.2),
                        0 0 40px rgba(0, 255, 255, 0.1);
            width: 100%;
            max-width: 400px;
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

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        input[type="text"],
        input[type="password"] {
            padding: 0.75rem 1rem;
            border: 2px solid rgba(0, 255, 255, 0.3);
            border-radius: 8px;
            font-size: 1rem;
            background: rgba(0, 0, 0, 0.2);
            color: #fff;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #0ff;
            outline: none;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
            background: rgba(0, 0, 0, 0.4);
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        button[type="submit"] {
            background: linear-gradient(90deg, #ff00ff, #00ffff);
            color: white;
            border: none;
            padding: 0.75rem;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background: linear-gradient(90deg, #00f, #0ff);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form method="POST">
            <input type="text" name="firstname" placeholder="enter first name" required>
            <input type="text" name="lastname" placeholder="enter last name" required>
            <input type="text" name="course" placeholder="enter course" required>
            <input type="text" name="school" placeholder="enter school" value="<?= htmlspecialchars($last_school) ?>" required>
            <input type="text" name="username" placeholder="enter username" value="<?= htmlspecialchars($last_username) ?>" required>
            <input type="password" name="password" placeholder="enter password" required>
            <button type="submit">Register</button>
    </form>
    </div>
</body>
</html>
