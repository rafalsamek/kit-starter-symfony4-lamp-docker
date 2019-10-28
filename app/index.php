<?php

$host = 'mysql';

$user = 'kit-starter';
$pass = 'kit-starter';
$db = 'kit-starter';

$conn = new mysqli($host, $user, $pass, $db, '3306');

if($conn->connect_error){
    echo 'connection failed: ' . $conn->connect_error;
    exit;
}
echo 'Successfully connected to MySQL';



