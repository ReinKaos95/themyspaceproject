<?php
include_once 'db.php'; 
$id=$_POST['id'];
$band = $_POST['band'];
$description = $_POST['description'];
$review = $_POST['review'];

$query = "UPDATE bands SET band='$band', description='$description', review='$review' WHERE id ='$id'";
pg_query($conn, $query);
header("location: ../index.php");
 ?>