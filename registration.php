<?php

session_start();
require_once 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$check_username = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username'");
if (mysqli_num_rows($check_username) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "This username is already exists",
        "fields" => ['username']
    ];

    echo json_encode($response);
    die();
}

$check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
if (mysqli_num_rows($check_email) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "This email is already exists",
        "fields" => ['email']
    ];

    echo json_encode($response);
    die();
}

$error_fields = [];

if ($username === '') {
    $error_fields[] = 'username';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
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


mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')");
$response = [
    "status" => true,
    "message" => "Регистрация прошла успешно!",
];
echo json_encode($response);

header("Location: index.php");

?>
