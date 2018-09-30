<?php
		$server = "localhost";
		$username = "root";
		$password = "";
		$database = "18php04_products";
		$connect_db = mysqli_connect($server,$username,$password,$database) or die("Cannot connect to database !!!");
		$sql = "SELECT * FROM products ORDER BY id";
		$db_show = mysqli_query($connect_db,$sql);
		if ($db_show) {
			while ($row=mysqli_fetch_row($db_show)) {
       			printf ("<div id='products'>%s , Price : %s , Desc : %s <button id='add_products_button' class='btn btn-danger' name='delete' value='%s'>Delete</button></div>",$row[1],$row[2],$row[3],$row[0],$row[0]);
    		}	
		mysqli_free_result($db_show);
		}
?>