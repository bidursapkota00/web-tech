<?php
require_once "dbConnection.php";

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    // $sql = "SELECT `id`, `password` FROM `users` WHERE `username` = '$username'";
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }
    if (mysqli_num_rows($result) == 0) {
        die("Error: No record found with id $id.");
    }

    $user = mysqli_fetch_assoc($result);
    var_dump($user);
    $hash = $user['password'];

    $res = password_verify($pass, $hash);
    var_dump($res);
    if (password_verify($pass, $hash)) {
        // $_SESSION['user_id'] = $id;
        echo "Login successful!";
        // header("Location: admin.php");
        exit();
    } else {
        echo "Invalid username or password";
        echo $pass;
        echo $hash;
    }
}
