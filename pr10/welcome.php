<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header('Location: login_form.html');
    exit;
}

if (isset($_SESSION['username'])) {
    echo 'Welcome, ' . $_SESSION['username'] . '!<br>';
}

if (isset($_COOKIE['username'])) {
    echo 'Welcome back, ' . $_COOKIE['username'] . '!<br>';
}
?>
