<?php
require_once 'vendor/autoload.php';

use App\Post;
use App\Testing;


$post = new Post();
$testing = new Testing($post);

// Call the test method
$testing->test($post);
