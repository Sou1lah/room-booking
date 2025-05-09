<?php
#$base_url = "http://localhost/room-booking-website/login/";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <form action="form.php" method="post" class="login-form">
        <h2>Login</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="styled-input" required>
        <div class="show-password">
            <input type="checkbox" id="show-password" onclick="togglePassword()">
            <label for="show-password">Show Password</label>
        </div>
        <input type="submit" value="Login">
    </form>
</main>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
        } else {
            passwordField.type = 'password';
        }
    }
</script>
</body>
</html>
