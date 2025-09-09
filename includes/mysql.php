<?php

$host = "localhost:3307";
$db = "book_library";
$user = "root";
$password = "";
$charset = "utf8";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $mysqlClient = new PDO ($dsn, $user, $password, $options);
} catch (Exception $e){
    die('Database connection failed: '. $e->getMessage());
}
