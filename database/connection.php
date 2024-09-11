<?php

$hostname = 'localhost';
$database = 'To-Do-List-PHP';
$username = 'postgres';
$password = 'bergaminibd';

try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database",
    $username,
        $password);
} catch (PDOException $e) {
    echo "Erro: ". $e->getMessage();
}