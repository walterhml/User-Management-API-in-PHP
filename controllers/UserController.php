<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function getAllUsers() {
        $users = $this->userModel->getAllUsers();
        echo json_encode($users);
    }

}

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$userController = new UserController($pdo);

// Roteamento das requisições
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController->getAllUsers();
}
