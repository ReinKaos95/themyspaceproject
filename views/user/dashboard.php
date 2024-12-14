<?php 

session_start();

if (isset($_SESSION['user'])) {
  header('Location: ../index.php');
}

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Usuario</title>
</head>
<body>
    <h1>Bienvenido, Usuario</h1>
    <a href="../index.php?action=logout&role=user">Cerrar Sesión</a>
</body>
</html>