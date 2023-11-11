<?php
include_once "../db_conn.php";
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_fetch_array(mysqli_query($conn, $sql));
if ($result) {
    $_SESSION['signin'] = 1;
    $_SESSION['user_id'] = $result['id'];
    header('Location: ../../index');
} else {
    $_SESSION['error_signin'] = 'Email/password is incorrect';
    header('Location: ../../signin');
}
