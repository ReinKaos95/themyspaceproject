<?php 

	//Conexion de base de datos sin uso de POO

	$host="localhost";
	$dbname="myspace";
	$port="3306";
	$user="root";
	$password="";

	try {
	$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	die("Error de conexion: " . $e->getMessage());
	}

 ?>