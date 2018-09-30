<?php

	include "add_products.php";
	if (isset($_POST["product1"])) {
		add($id,"product1",2500000,"desc1");
		header("location:index.php");
	}

	if (isset($_POST["product2"])) {
		add($id,"product2",1500000,"desc2");
		header("location:index.php");
	}

	if (isset($_POST["product3"])) {
		add($id,"product3",2500000,"desc3");
		header("location:index.php");
	}

	if (isset($_POST["product4"])) {
		add($id,"product4",1500000,"desc4");
		header("location:index.php");
	}

	if (isset($_POST["product5"])) {
		add($id,"product5",6500000,"desc5");
		header("location:index.php");
	}

?>