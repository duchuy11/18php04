<!DOCTYPE html>
<head>
	<title>PHP - MySQL</title>
	<style>
		form {
			width: 500px;
			height: 500px auto;
			background: grey;
			margin: auto;
			padding-top: 1px;
			padding-bottom: 25px;
		}

		#products {
			width: 450px;
			height: 75px;
			background:white;
			border: 1px black solid;
			margin: auto;
			margin-top: 20px;
			line-height: 75px;
			text-indent: 10px;
		}

		#add_products_button {
			float:right;
			margin-top: 20px;
			margin-right: 20px;
		}

		h1 {
			text-align: center;
		}
	</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Products</h1>
	<form method="post" name="add_products" action="process.php">
		<div id="products">Product 1 , Price : 2500000 , Desc 1 <button id="add_products_button" class="btn btn-danger" name="product1">Add</button></div>
		<div id="products">Product 2 , Price : 1500000 , Desc 2 <button id="add_products_button" class="btn btn-danger" name="product2">Add</button></div>
		<div id="products">Product 3 , Price : 2500000 , Desc 3 <button id="add_products_button" class="btn btn-danger" name="product3">Add</button></div>
		<div id="products">Product 4 , Price : 1500000 , Desc 4 <button id="add_products_button" class="btn btn-danger" name="product4">Add</button></div>
		<div id="products">Product 5 , Price : 6500000 , Desc 5 <button id="add_products_button" class="btn btn-danger" name="product5">Add</button></div>
	</form>
	<br>
	<h1>Added products</h1><form ="post" name="delete_all_products" action="delete_all_products.php" style="text-align: center;padding-top: 25px;"><button class="btn btn-danger">Delete all products</button></form>
	<form method="post" name="add_products" action="process_delete_edit.php">
		<?php
		 	include "show_products.php";
		?>
	</form>
</body>
</html>