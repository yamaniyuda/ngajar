<?php

$serverName = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'TOKO';

$conn = new mysqli($serverName, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}