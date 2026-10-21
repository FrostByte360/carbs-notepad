<?php
session_start();
$isActive = ($_SESSION['isActive'] ?? false);

$role = $_SESSION['role'];
if ($isActive && $role != 'guest') {
    header('location: login.php');
}

if (isset($_SESSION['user']))   {
    $username = $_SESSION['user'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinful's Notepad</title>
    <link rel="stylesheet" href="styleNotepad.css">
</head>

<body>
    <audio id="bg-audio" autoplay loop muted ontriggered="this.muted=false" ondurationchange="this.muted=false">
        <source src="asset/audio/bts.mp3" type="audio/mpeg">
    </audio>

    <div class="wrapper">
        <aside class="sidebar">
            <h2>Menu</h2>
            <p>Hello World</p>

            <form action="logout.php">
                <input type="submit" value="Logout">
            </form>
        </aside>

        <main class="main-content">
            <h1>Hello, World</h1>
            <p>OwO</p>
        </main>
    </div>

    <script src="dashboard.js"></script>

</body>

</html>