<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IN453 Login</title>
</head>
<body>
    <div class="login-box">
        <h2>IN453 Login</h2>
        <form method="post" action="authenticate.php">
            <label>Server</label>
            <input type="text" name="server" value="localhost" required>

            <label>Database</label>
            <input type="text" name="database" value="IN453" required>

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <input type="submit" value="Login">
        </form>
</body>
</html>