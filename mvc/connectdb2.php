<?php

	class ConnectDB_avatar {
		public $conn_avatar;
		function __construct() {
			$this->connect_avatar();
		}
		function connect_avatar(){
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "duchuy11_user";
			$this->conn_avatar = mysqli_connect($server,$username,$password,$database);
			return $this->conn_avatar;
		}
	}

?>