

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

	textarea {
		width: 500px;
		height: 200px;
		resize: none;
		border-radius: 5px;
		border-color :#ccc;
	}

	.news {
		width: 700px;
		height: auto;
		border: 1px #ccc solid;
		margin: auto;
		padding: 20px 20px 30px 20px;
		border-radius: 15px;
		margin-bottom: 20px;
	} 
</style>
<?php session_start();

function button($action,$btn_name) {
	return isset($_SESSION["login"]) ? " <a href='index.php?action=$action'><button class='btn btn-warning'>$btn_name</button></a>" : "";
}

?>
<div class="panel">
	<div class="panel_left">
		<a href='index.php'><button class='btn btn-success'>Home</button></a>
		<a href='index.php?action=product'><button class='btn btn-warning'>Product list</button></a>
		<?php

		echo button("news_list","News List");

		$news_list =  isset($_SESSION["login"]) ? " <a href='index.php?action=news_list'><button class='btn btn-warning'>News list</button></a>" : "";
		echo $news_list;

		$user_list = isset($_SESSION["login"]) ? " <a href='index.php?action=user_list'><button class='btn btn-warning'>User list</button></a>" : "";
		echo $user_list;

		if (!isset($_SESSION["login"])) {
			echo "<a href='index.php?action=register'><button class='btn btn-success'>Register</button></a> ";
			echo "<a href='index.php?action=login'><button class='btn btn-success'>Login</button></a>";
		}
		$add_product =  isset($_SESSION["login"]) ? " <a href='index.php?action=add_product'><button class='btn btn-info'>Add product</button></a>" : "";
		echo $add_product;

		$add_news =  isset($_SESSION["login"]) ? " <a href='index.php?action=add_news'><button class='btn btn-info'>Add news</button></a>" : "";
		echo $add_news;

		$change_password =  isset($_SESSION["login"]) ? " <a href='index.php?action=change_password'><button class='btn btn-success'>Change password</button></a>" : "";
		echo $change_password;
		
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
		<a href='index.php?action=cart'><button class='btn btn-danger'>Cart</button></a>
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
