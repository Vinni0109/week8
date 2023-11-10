<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: game.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // TODO: validate username and password

    $_SESSION['username'] = $username;
    header('Location: game.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>4dfcc954 Login</title>
</head>
<body>
    <a href="login.php">Please Log In</a>
    <h1>Login</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</body>
</html>
