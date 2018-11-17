<?php

	class ConnectDB_comment_news {
		public $conn_comment_news;
		function __construct() {
			$this->connect_comment_news();
		}
		function connect_comment_news(){
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "duchuy11_php";
			$this->conn_comment_news = mysqli_connect($server,$username,$password,$database);
			return $this->conn_comment_news;
		}
	}

?>