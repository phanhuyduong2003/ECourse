<?php
include_once "../db_conn.php";
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$confirm_password = md5($_POST['confirm-password']);

$sql_signup = "SELECT * FROM users WHERE email = '$email'";
$result_signup = mysqli_query($conn, $sql_signup);
// var_dump($result_signup);

$_SESSION['error_signup'] = array();
if (mysqli_num_rows($result_signup) > 0) {
    array_push($_SESSION['error_signup'], 'Email is already exists');
}

if ($password !== $confirm_password) {
    // $_SESSION['error_signup'][] = 'Password confirmation does not match';
    array_push($_SESSION['error_signup'], 'Password confirmation does not match');
}

if (!empty($_SESSION['error_signup'])) {
    header('Location: ../../signup');
    // unset($_SESSION['error_signup']);
    exit();
} else {
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: ../../signin');
        unset($_SESSION['error_signup']);
    } else {
        die(mysqli_error($conn));
    }
}
