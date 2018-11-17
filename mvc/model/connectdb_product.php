<?php

	class ConnectDB_product {
		public $conn_product;
		function __construct() {
			$this->connect_product();
		}
		function connect_product(){
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "duchuy11_shop";
			$this->conn_product = mysqli_connect($server,$username,$password,$database);
			return $this->conn_product;
		}
	}

?>