<?php
$dbserver = 'localhost';
$dbusername = 'root';
$dbpassword = 'password';
$dbname = 'TOKO';

$conn = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) die('Konneksi tidak');