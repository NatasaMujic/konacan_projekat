<?php

$host = 'localhost';
$db_name = 'vb';
$username = 'vb';
$password = 'xcnnXuz0NqjuL8I';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connection was successful!";
} catch(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}