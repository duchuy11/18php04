<?php

	class ConnectDB_avatar_comment{
		public $conn_avatar_comment;
		function __construct() {
			$this->connect_avatar_comment();
		}
		function connect_avatar_comment(){
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "duchuy11_user";
			$this->conn_avatar_comment = mysqli_connect($server,$username,$password,$database);
			return $this->conn_avatar_comment;
		}
	}

?>