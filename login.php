<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoToday - Log In</title>
    <link rel="stylesheet" href="stuff/style.css">
    <link rel="icon" href="stuff/logo.png" type="image/x-icon">
</head>
<body>
<section class="login-section">
<h1>Log In</h1>
    <div class="login-container">
        <form action="login.php" method="POST">
            <!--since login/signup diff page can use same id n stuf, easier for backend-->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label class="show-password-label">
                <input type="checkbox" id="show-password">Show Password
            </label>

            <button type="submit" class="login-btn" onclick="window.location.href='dashboard.php';">Log In</button>
        </form>

        <section class="register-section">
            <label class="register-label">Don't have an account? <a href="register.php">Register here</a></label>
    </div>
</section>

<script src="stuff/script.js"></script>
</body>
</html>