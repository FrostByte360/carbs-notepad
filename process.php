<?php
    session_start();
    $un = $_POST['username'];
    $pw = $_POST['password'];
    $msg = "";

    if ($un == 'sinfulcarbs' && $pw == 'furry123')    {
        $_SESSION['user'] = 'SinfulCarbs';
        $_SESSION['role'] = 'guest';
        $_SESSION['isActive'] = true;
        header('location: notepad.php');
    }
    else {
        $_SESSION['msg'] = "Invalid Username/Password";
        $_SESSION['isActive'] = false;
        $_SESSION['role'] = null;
        header('location: login.php');
    }
?>