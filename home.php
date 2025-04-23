<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["lastname"] = $_POST["lastname"];
    $_SESSION["course"] = $_POST["course"];
    $_SESSION["school"] = $_POST["school"];
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"]; // Just for practice; don't store passwords in plain text.
    header("Location: personal.php");
    exit();
}
?>

<form method="POST">
    <input type="text" name="firstname" placeholder="First Name" required><br>
    <input type="text" name="lastname" placeholder="Last Name" required><br>
    <input type="text" name="course" placeholder="Course" required><br>
    <input type="text" name="school" placeholder="School" required><br>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>
