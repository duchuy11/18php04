<?php 
include 'model/model.php';
class Controller {
	function handleRequest() {
		$action = isset($_GET['action'])?$_GET['action']:'';
		$validation = true;
		switch ($action) {
			case 'register':
				if (isset($_POST["register_submit"])) {
					$username = $_POST["username"];
					$password = $_POST["password"];
					if ($username == "") {
						$username_warn = " Username ???";
						$validation = false;
					}
					if ($password == "") {
						$password_warn = " Password ???";
						$validation = false;
					}
					if ($validation) {
						$target = "images/".basename($_FILES["image"]["name"]);
						$image = $_FILES["image"]["name"];
						$userModel = new Model();
						$userModel->register($username,$password,$image);
						move_uploaded_file($_FILES["image"]["tmp_name"],$target);
						$register_warn = "Register successfully !!!";
						header("refresh:1;url=index.php");
					} else {
						$register_warn = "Complete register form !!!";
					}
				}
				include 'view/register.php';
				break;

			case 'login':
				if (isset($_SESSION["login"])) {
					echo "You already logged in.";
				} else {
					if (isset($_POST["login_submit"])) {
						$username = $_POST["username"];
						$password = $_POST["password"];
						$userModel = new Model();
						$login = $userModel->login($username,$password);
						if ($login) {
							$_SESSION["login"] = $username;
							$login_warn = "Login successfully !!!";
							header("refresh:1.5;url=index.php");
						} else {
							$login_warn = "Incorrect username or password !!!";
							header("Location:index.php");
						}
					}
					include 'view/login.php';
				}
				break;
			case 'logout':
				unset($_SESSION["login"]);
				header("Location:index.php");
				break;
			case 'change_password':
				if (isset($_SESSION["login"])) {
					if (isset($_POST["change_password_submit"])) {
						$username = $_SESSION["login"];
						$password = $_POST["password"];
						$userModel = new Model();
						$userModel->change_password($username,$password);
						header("refresh:1.5;url=index.php");
					}
				} else {
					header("Location:index.php?action='login'");
				}
				include "view/change_password.php";
				break;
			case "user_list":
				if (isset($_SESSION["login"])) {
					$userModel = new Model();
					$listUser = $userModel->getList();
					include "view/user_list.php";
				} else {
					header("Location:index.php?action='login'");
				}
				break;
			case "delete_user":
				$id = $_GET["id"];
				if (isset($_SESSION["login"])) {
					$userModel = new Model();
					$deleteUser = $userModel->deleteUser($id);
					header("Location:index.php?action=user_list");
				} else {
					header("Location:index.php?action='login'");
				}
				break;
			default:
				echo "<br><h1>WELCOME !!!</h1>";
				break;
		}
	}
}

?>