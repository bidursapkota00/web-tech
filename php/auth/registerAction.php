<?php
require_once "dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$user', '$pass')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    echo "<p style='color: green;'>Registration Successful!</p>";
    include "header.php";
    mysqli_close($conn);
}
