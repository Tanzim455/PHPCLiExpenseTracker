<?php
include 'output.php';
$name = "John Doe";
$email = "john@gmail.com";
$balance = 1500;
$password = "password";

$hashed_password = password_hash($password, PASSWORD_BCRYPT);
$values = [$name, $email, $hashed_password, $balance];
$keys = ['name', 'email', 'password', 'balance'];
$array_combine = array_combine($keys, $values);
array_push($users, $array_combine);
var_dump($users);
