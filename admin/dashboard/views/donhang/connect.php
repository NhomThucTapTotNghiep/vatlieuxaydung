<?php
$host     = 'localhost:3306'; 
$db       = 'vatlieuxaydung';
$user     = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
     echo $e->getMessage();
}
?>