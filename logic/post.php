<?php 
include_once 'db.php';

$band = $_POST['band'];
$description = $_POST['description'];
$review = $_POST['review'];


$query = "INSERT INTO bands values (default, '$band', '$description', '$review')";
pg_query($conn, $query);

header("location:../index.php");

 ?>