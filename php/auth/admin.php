<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Protected Page</h1>
    <h1>Dashboard Page</h1>
    <a href="/logoutAction.php">Log out</a>
</body>

</html>