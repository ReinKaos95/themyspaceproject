<?php 
$id=$_GET['t'];
include_once 'db.php';
$query = "DELETE FROM bands WHERE id ='$id'";
pg_query($conn, $query);
header("location: ../index.php");
 ?>