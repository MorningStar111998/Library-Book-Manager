<?php

$dbhost = "localhost:3307";
$db = "book_library";
$user = "root";
$password = "";
$charset = "utf8";
$querry = "SELECT * FROM books WHERE is_enabled = :is_enabled";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $mysqlClient = new PDO ($dsn, $user, $password);
} catch (Exception $e){
    die('Erreur : '. $e->getMessage());
}
