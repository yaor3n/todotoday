<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoToday - Sign Up</title>
    <link rel="stylesheet" href="stuff/style.css">
    <link rel="icon" href="stuff/logo.png" type="image/x-icon">
</head>
<body>
    <main> <!--apparently its better to have a main tag-->
        <section class="signup-section">
            <h1>Sign Up</h1>
            <div class="signup-container">
                <form action="register.php" method="POST">
                    <label for="username">New Username:</label>
                    <input for="text" id="username" name="username" required>
                    <label for="passowrd">New Password:</label>
                    <input type="password" id="password" name="password" required>

                    <label class="show-password-label">
                        <input type="checkbox" id="show-password">Show Password
                    </label>

                    <button type="submit" class="signup-btn">Sign Up</button>
                </form>
            </div>

        </section>
    </main>

    <script src="stuff/script.js"></script>
</body>
</html>