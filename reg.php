<?php
header('Content-Type: text/html; charset=utf-8');

$email = $_POST['email'];
$pass = $_POST['pass'];

echo "Имя: $name<br> Фамилия: $lastname<br> Email: $email<br> Пароль: $pass";
