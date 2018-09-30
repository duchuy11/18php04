<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "18php04_products";
$connect_db = mysqli_connect($server,$username,$password,$database) or die("Cannot connect to database !!!");
$delete = $_POST["delete"];
$sql = "DELETE from products WHERE id=$delete";
mysqli_query($connect_db,$sql);
header("location:index.php");

?>