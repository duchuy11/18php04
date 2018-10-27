<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<?php session_start();
function button_backend($action,$btn_name,$btn_style) {
	return isset($_SESSION["login"]) ? " <a href='index.php?action=$action'><button class='btn btn-$btn_style'>$btn_name</button></a>" : "";
}
function button_frontend($action,$btn_name,$btn_style) {
	return !isset($_SESSION["login"]) ? " <a href='index.php?action=$action'><button class='btn btn-$btn_style'>$btn_name</button></a>" : "";
}
?>
<div class="panel">
	<div class="panel_left">
		<a href='index.php'><button class='btn btn-danger'>Home</button></a>
		<a href='index.php?action=product'><button class='btn btn-success'>Product list</button></a>
		<?php
		echo button_backend("news_list","News List","success");
		echo button_backend("user_list","User List","success");
		echo button_frontend("register","Register","danger");
		echo button_frontend("login","Login","danger");
		echo button_backend("add_product","Add Product","warning");
		echo button_backend("add_news","Add News","warning");
		echo button_backend("change_password","Change Password","info");
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
		echo button_backend("logout","Log out","danger");
		?>
	</div>
</div>
<?php 
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->handleRequest();
?>
