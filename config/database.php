<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'Jin');
define('DB_PASS', '123');
define('DB_NAME', 'php-feedback');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}

echo 'CONNECTED';
