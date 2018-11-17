<?php

	class ConnectDB {
		public $conn;
		function __construct() {
			$this->connect();
		}
		function connect(){
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "duchuy11_user";
			$this->conn = mysqli_connect($server,$username,$password,$database);
			return $this->conn;
		}
	}

?>