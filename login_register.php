<?php

session_start();
require_once 'config.php';

if (isset($_POST[''])) {
    $name = $_POST[''];
    $email = $_POST[''];
    $password = password_hash($_POST[''], PASSWORD_DEFAULT);
    $name = $_POST[''];

    $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] ='Email is already registered';
        $_SESSION['active_form'] ='registered';
    } else {
        $conn->query("INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role'");
    }
    header("Location: index.php");
    exit();
}