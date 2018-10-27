<?php

	class ConnectDB_show_news {
		public $conn_show_news;
		function __construct() {
			$this->connect_show_news();
		}
		function connect_show_news(){
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "duchuy11_php";
			$this->conn_show_news = mysqli_connect($server,$username,$password,$database);
			return $this->conn_show_news;
		}
	}

?>