<?php

session_start();
require_once 'connect.php';

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($connect, "UPDATE `users` SET `username` = '$username', `email` = '$email', `password` = '$password' WHERE `users`.`id` = '$id'");

header("Location: index.php");

?>