<?php 

require_once '../Controller/AdminController.php';
require_once '../Controller/UserController.php';

if ($_POST['role'] === 'user') {
    $controller = new UserController($pdo);
} else {
    $controller = new AdminController($pdo);
}

if ($action === 'logout') {
    $controller->logout();
} else {
    $controller->login($email, $password);
}

 ?>