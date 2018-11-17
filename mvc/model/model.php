<?php
	include "model/connectdb.php";
	class Model extends ConnectDB{
		function register($username,$password,$image) {
			$mysql_adduser = "INSERT INTO user (username,password,image) VALUES ('$username','$password','$image')";
			return mysqli_query($this->conn,$mysql_adduser);
		}

		function login($username,$password) {
			$mysql_login = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($this->conn,$mysql_login);
			return $result->num_rows;
		}

		function change_password($username,$password) {
			$mysql_change_password = "UPDATE user SET password = '$password' WHERE username = '$username'";
			return mysqli_query($this->conn,$mysql_change_password);
		}

		function getList() {
			$mysql_get_list = "SELECT * FROM user";
			$result = mysqli_query($this->conn,$mysql_get_list);
			return $result;
		}

		function deleteUser($id) {
			$mysql_delete_user = "DELETE FROM user WHERE id = $id";
			$result = mysqli_query($this->conn,$mysql_delete_user);
			return $result;
		}

		function getAvatar() {
			$mysql_get_list = "SELECT * FROM user";
			$result = mysqli_query($this->conn,$mysql_get_list);
			return $result;
		}
	}
?>