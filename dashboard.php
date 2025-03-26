<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stuff/style.css">
    <link rel="icon" href="stuff/logo.png" type="image/x-icon">
</head>
<body>
    <header class="dashboard-banner">
        <a href="" class="logo">🚀 TodoToday</a>
        <label class="welcome-user-label">hihiiihihihiifkawfh</label>

        <label id="welcome-user-label" class="welcome-user-label">hihiiihihihiifkawfh</label>
    </header>
    
    <section class="main-menu-section">
        <div class="align-mm-btns">
            <button class="mm-btn">Notes 📝</button>
            <button class="mm-btn">Todolists 📋</button>
            <button class="mm-btn">Reminders 🔔</button>
            <button class="mm-btn">Focus Mode 🚫</button>
            <button class="mm-btn">Bookmark Manager 🔖</button>
            <button class="mm-btn">Weather 🌦️</button>
        <button class="mm-btn" onclick="window.location.href='selectTimer.php';"">Stopwatch & Pomodoro ⏳</button>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const username = localStorage.getItem("loggedInUser");
            if (username) {
                document.getElementById("welcome-user-label").textContent = "Good Day, " + username;
            }
        });
    </script>
</body>
</html>
