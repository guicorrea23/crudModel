<?php
$dbName = 'test';
$host = 'localhost';
$user = 'root';
$password = '';

$pdo = new PDO("mysql:dbname=".$dbName.";host=".$host, $user, $password);
