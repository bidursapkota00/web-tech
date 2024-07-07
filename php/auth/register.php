<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <?php include 'header.php' ?>
    <br><br>
    <form action="registerAction.php" method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>