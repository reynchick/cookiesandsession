<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}
?>

<p>Username: <?= $_SESSION["username"] ?></p>
<p>Password: <?= $_SESSION["password"] ?></p> <!-- Just for demo -->

<a href="personal.php">Go to Personal Info</a><br>
<a href="logout.php">Logout</a>
