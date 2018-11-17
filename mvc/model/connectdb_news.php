<?php

	class ConnectDB_news {
		public $conn_news;
		function __construct() {
			$this->connect_news();
		}
		function connect_news(){
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "duchuy11_php";
			$this->conn_news = mysqli_connect($server,$username,$password,$database);
			return $this->conn_news;
		}
	}

?>