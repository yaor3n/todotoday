<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoToday - login</title>
    <link rel="stylesheet" href="stuff/style.css">
    <link rel="icon" href="stuff/logo.png" type="image/x-icon">
</head>
<body>
<section class="login-section">
    <div class="login-container">
        <h1>Log In</h1>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="login-btn">Log In</button>
        </form>

        <section class="register-section">
            <label class="register-label">Don't have an account? <a href="register.php">Register here</a></label>
    </div>
</section>
</body>
</html>