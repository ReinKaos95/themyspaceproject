<?php
require_once 'UserController.php';
require_once 'AdminController.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

if ($role === 'user') {
    $userController = new UserController();
    $userController->login($email, $password);
} elseif ($role === 'admin') {
    $adminController = new AdminController();
    $adminController->login($email, $password);
} else {
    echo "Rol no válido.";
}