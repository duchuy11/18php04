<?php
	include "connectdb.php";
	class Avatar extends ConnectDB{
		function getAvatar() {
			$mysql_get_list = "SELECT * FROM user";
			$result = mysqli_query($this->conn,$mysql_get_list);
			return $result;
		}
	}
?>