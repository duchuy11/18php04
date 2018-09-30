<?php
	function add($id,$name,$price,$description) {
		$server = "localhost";
		$username = "root";
		$password = "";
		$database = "18php04_products";
		$rand_id = rand(100000,900000);
		$connect_db = mysqli_connect($server,$username,$password,$database) or die("Cannot connect to database !!!");
		$sql = "INSERT INTO products (id,name,price,description) VALUES ('$rand_id','$name','$price','$description')";
		mysqli_query($connect_db,$sql);
	}
?>