<?php 
    
$host = 'mysql:host=localhost;dbname=carservice';
$user = 'root';
$pass = '';

$pdo = new PDO($host,$user,$pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
?>

