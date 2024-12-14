<?php
require_once 'logic/db.php';
require_once 'Controller/UserController.php';
require_once 'Controller/AdminController.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$role = $_POST['role'] ?? null;
$action = $_GET['action'] ?? null;

if ($action === 'logout') {
    if ($_GET['role'] === 'user') {
        $userController = new UserController($pdo);
        $userController->logout();
    } elseif ($_GET['role'] === 'admin') {
        $adminController = new AdminController($pdo);
        $adminController->logout();
    }
} elseif ($email && $password && $role) {
    if ($role === 'user') {
        $userController = new UserController($pdo);
        $userController->login($email, $password);
    } elseif ($role === 'admin') {
        $adminController = new AdminController($pdo);
        $adminController->login($email, $password);
    } else {
        header('Location: Views/error.php?msg=Rol inválido');
    }
} else {
    header('Location: Views/index.php');
}
?>