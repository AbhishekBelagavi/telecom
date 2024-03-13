<?php
session_start();

if (!isset($_SESSION['full_name'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['full_name']; ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
