<?php

$host = "localhost";
$user = "root";
$password = "";
$gonzales = "gonzales";
$dsn = "mysql:host={$host};dbname={$gonzales}";

$pdo = new PDO($dsn, $user, $password);
$pdo->exec("SET time_zone = '+08.00';");

?>