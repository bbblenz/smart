<?php include("connect.php"); 
include("backend.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | Attendance</title>
</head>
<body>
    <div class="login-container">
        <h2>Welcome!</h2>
        <form action="backend.php" method="POST">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="register" value="register">Log In</button>
            <p>Don't have an account? <a href="#">Sign up</a></p>
        </form>
    </div>
</body>
</html>

