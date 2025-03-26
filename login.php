<?php
include 'db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        // Check if username exists
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Fetch stored password
            $stmt->bind_result($id, $stored_password);
            $stmt->fetch();

            // Compare entered password with stored password (since no hashing is used)
            if ($password === $stored_password) {
                session_start();
                $_SESSION["user_id"] = $id;
                $_SESSION["username"] = $username;
                header("Location: dashboard.php"); // Redirect to dash
                exit();
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }

        $stmt->close();
    }
    $conn->close();
}
?>


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
    <div class="login-container">
        <h1><u>Log In</u></h1>

        <form action="login.php" method="POST">
            <!--since login/signup diff page can use same id n stuf, easier for backend-->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            
            <?php if (!empty($error)): ?>
                <p class="login-error"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>

            <label class="show-password-label">
                <input type="checkbox" id="show-password">Show Password
            </label>

            <button type="submit" class="login-btn";">Log In</button>
        </form>

        <section class="register-section">
            <label class="register-label">Don't have an account? <a href="register.php">Register here</a></label>
        </section>
    </div>

    <script src="stuff/login.js"></script>
</body>
</html>
