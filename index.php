<?php

use App\Auth;

require_once 'vendor/autoload.php';

$auth = new Auth(email: "tanzim@gmail.com", name: "Tanzim Ibthesam", password: hash("sha256", "password"));
$authtwo = new Auth(email: "john@gmail.com", name: "John Doe", password: hash("sha256", "password"));
print_r($auth->register());
print_r($authtwo->register());
