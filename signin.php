<?php

session_start();
global $connect;
require_once 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$error_fields = [];

if ($email === '') {
    $error_fields[] = 'email';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Please, fill the fiels",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "username" => $user['username'],
        "email" => $user['email'],
        "password" => $user['password'],
    ];

    $response = [
        "status" => true
    ];

    echo json_encode($response);

} else {

    $response = [
        "status" => false,
        "message" => 'Incorrect email or password'
    ];

    echo json_encode($response);
}

?>