<?php
session_start();

$servername = "localhost";
$dbname = "user_authentication";
$username = "root"; // Change as per your MySQL configuration
$password = ""; // Change as per your MySQL configuration

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();

    if (password_verify($pass, $hashed_password)) {
        $_SESSION['user_id'] = $id;
        echo "Login successful!";
        // Redirect to a protected page
        header("Location: admin.php");
        exit();
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
    $conn->close();
}
