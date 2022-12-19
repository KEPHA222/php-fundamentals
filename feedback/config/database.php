<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'kepha');
define('DB_PASS', 'password');
define('DB_NAME', 'phpfundamentals');

//Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check Connection
if($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
}
