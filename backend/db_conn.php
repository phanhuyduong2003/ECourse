<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "ecourse";
$post = "3306";

$conn = mysqli_connect($server_name, $user_name, $password, $db_name, $post);
mysqli_set_charset($conn, 'utf8');

if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}
