<?php

	class ConnectDB_like_news {
		public $conn_like_news;
		function __construct() {
			$this->connect_like_news();
		}
		function connect_like_news(){
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "duchuy11_user";
			$this->conn_like_news = mysqli_connect($server,$username,$password,$database);
			return $this->conn_like_news;
		}
	}

?>