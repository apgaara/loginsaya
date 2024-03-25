<?php

include "/service/config.php";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="aka"></div>
    <div class="login-container">
        <h2>Daftar Pesbuk</h2>
        <form action="config.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Daftar">
        </form>
    </div>
</body>
</html>



