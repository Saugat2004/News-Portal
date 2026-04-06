<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDC News</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="nav-container">
                <h1 class="logo">📰 News Nest</h1>
                <ul class="nav-links">
                    <li><a href="home.php">Home</a></li>

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><span class="welcome">👋 <?php echo $_SESSION['user_name']; ?></span></li>
                        <li><a href="logout.php" class="logout-btn">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php" class="nav-btn">Login</a></li>
                        <li><a href="register.php" class="nav-btn">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Stay Informed</h2>
            <p>Your trusted source for latest news, stories and updates.</p>

            <a href="<?php echo isset($_SESSION['user_id']) ? 'index.php' : 'login.php'; ?>" class="btn">
                Explore News
            </a>
        </div>
    </section>

    <section class="about">
        <h2>About Newsnest</h2>
        <p>
            This news portal is designed to keep you informed with the latest happenings across various topics.
            From breaking news to insightful stories, our goal is to deliver accurate and timely information
            in a simple and accessible way.
        </p>
    </section>

    <footer class="footer">
        <p>&copy; 2026 News Portal. All rights reserved.</p>

    </footer>

</body>

</html>