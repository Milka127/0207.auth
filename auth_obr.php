<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "moizfdni_0207", "12345", "moizfdni_0207");

if ($musqli === false) {
    print("error");
} else {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

    if ($result->num_rows !== 0) {
        print("ok");
    } else {
        print("exist");
    }
}
