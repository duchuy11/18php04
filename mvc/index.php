

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	h1 {
		text-align: center;
	}
	body {
		padding: 10px;
	}
	.panel {
		border: 1.5px solid grey;
		padding: 10px;
		height:58px;
	} .panel_left {
		float:left;
	} .panel_right {
		float:right;
	}
	form {
		width: 500px;
		height: 500px;
		margin: auto;
	}
	ul {
		width: 700px;
		margin: auto;
	} li {
		height: 55px;
		line-height: 35px;
	}

	#btn_delete {
		text-align: right;
		float:right;
	}
</style>
<?php session_start(); ?>
<div class="panel">
	<div class="panel_left">
		<?php 
		if (!isset($_SESSION["login"])) {
			echo "<a href='index.php?action=register'><button class='btn btn-success'>Register</button></a> ";
			echo "<a href='index.php?action=login'><button class='btn btn-success'>Login</button></a>";
		}
		$change_password =  isset($_SESSION["login"]) ? " <a href='index.php?action=change_password'><button class='btn btn-success'>Change password</button></a>" : "";
		echo $change_password;
		$user_list = isset($_SESSION["login"]) ? " <a href='index.php?action=user_list'><button class='btn btn-warning'>User list</button></a>" : "";
		echo $user_list;
		$login_status = isset($_SESSION["login"]) ? " Logged (<b>" . $_SESSION["login"] . "</b>)" : " Guest";
		echo $login_status;
		if (isset($_SESSION["login"])) {
			$session = $_SESSION['login'];
			include "model/connectdb2.php";
			$database = new ConnectDB_avatar();
			$mysql_get_list = "SELECT * FROM user WHERE username = '$session'";
			$result = mysqli_query($database->connect_avatar(),$mysql_get_list);
			while ($row = $result->fetch_assoc()) {
				echo "  <img src='images/$row[image]' width='30px' height='30px'>";
			}
		}
		
		?>
	</div>
	<div class="panel_right">
		<?php
		$logout_status = isset($_SESSION["login"]) ? " <a href='index.php?action=logout'><button class='btn btn-danger'>Log out</button></a>" : "";
		echo $logout_status;
		?>
	</div>
</div>

<?php 
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->handleRequest();
?>
