<?php 



	$host="localhost";
	$dbname="msproject";
	$port="5432";
	$user="postgres";
	$password="123456";

	try {
	$conn = pg_connect("host=$host port= $port dbname=$dbname user=$user password=$password");
	return $conn;
	} catch (Exception $e) {
	echo $e->getMessage();
	}


 ?>