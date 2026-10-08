<?php

$host = getenv("MYSQLHOST");
$port = getenv("MYSQLPORT");
$db = getenv("MYSQLDATABASE");
$user = getenv("MYSQLUSER");
$pass = getenv("MYSQLPASSWORD");
 
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

try{
    $pdo = new PDO(
        $dsn,
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {

    die("Datenbankfehler: " . $e->getMessage());

}
