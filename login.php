<?php
    session_start();

    $isActive = ($_SESSION['isActive'] ?? false);

        if ($isActive) {
            if ($_SESSION['role'] === 'guest') {
                header('location: notepad.php');
            }
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    

    <div class="outer-container">
        <div class="header">
        <h2>USER LOGIN</h2>
        <hr style="border-color: #66473f;">
    </div>
    <div class="container">
    <form id="loginForm" method="post" action="process.php">
        <p>Username:</p>
        <input type="text" name="username" required>

        <p>Password:</p>
        <input type="password" name="password" required>

        <br><br>
        <input type="submit" value="Login" class="login-btn">

        <?php
            echo "<br><br>";
            echo $_SESSION['msg'] ?? '';
            echo "<br>";
        ?>
    </form>
</div>

<div class="transition-overlay">
    <img src="asset/image/logo.webp" alt="Site Logo" class="transition-logo">
</div>

<script src="script.js"></script>

    </div>
    </div>
</body>
</html>