<?php

require_once 'controllers/UserController.php';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$userController = new UserController($pdo);

// Roteamento das requisições
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController->getAllUsers();
}
