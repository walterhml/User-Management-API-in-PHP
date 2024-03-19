<?php

$host = '127.0.0.1';
$dbname = 'api_users';
$username = 'root';
$password = 'nova_senha';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
