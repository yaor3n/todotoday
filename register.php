<?php
include 'db.php'; // db connection

// check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // empty or na
    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        // check if the username already exists
        $check_stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $check_stmt->bind_param("s", $username);
        $check_stmt->execute();
        $check_stmt->store_result();

        if ($check_stmt->num_rows > 0) {
            $error = "Username already taken. Please choose another.";
        } else {
            $stmt = $conn->prepare("INSERT INTO users (username, password, created_at) VALUES (?, ?, NOW())");
            $stmt->bind_param("ss", $username, $password);

            if ($stmt->execute()) {
                header("Location: login.php"); 
                exit();
            } else {
                $error = "Error: " . $stmt->error;
            }

            $stmt->close();
        }
        $check_stmt->close();
    }
    $conn->close();
}
?>

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

                    <?php if (isset($error)): ?>
                        <p class="signup-error"><?php echo $error; ?></p>
                    <?php endif; ?>

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
