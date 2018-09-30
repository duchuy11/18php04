<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "18php04_products";
$connect_db = mysqli_connect($server,$username,$password,$database) or die("Cannot connect to database !!!");
$sql = "DELETE FROM products";
mysqli_query($connect_db,$sql);
header("location:index.php");

?>