<?php
session_start();

$valid_username = 'Agrwal Collage';
$valid_password = '123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;

        setcookie('username', $username, time() + 3600, '/');

        header('Location: welcome.php');
        exit;
    } else {
        echo 'Invalid username or password.';
    }
}
?>
