<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}
?>

<p>First Name: <?= $_SESSION["firstname"] ?></p>
<p>Last Name: <?= $_SESSION["lastname"] ?></p>
<p>Course: <?= $_SESSION["course"] ?></p>
<p>School: <?= $_SESSION["school"] ?></p>

<a href="login.php">Go to Login Info</a><br>
<a href="logout.php">Logout</a>
