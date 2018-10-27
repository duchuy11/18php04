<?php 
include 'model/model.php';
include 'model/model_.php';
include 'model/model__.php';
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
						$image = $_FILES["image"]["name"];
						$target = "images/".basename($image);
						$userModel = new Model();
						$userModel->register($username,$password,$image);
						move_uploaded_file($_FILES["image"]["tmp_name"],$target);
						$register_warn = "Register successfully !!! (wait 1s)";
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
							$login_warn = "Login successfully !!! (wait 1s)";
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
					header("Location:index.php?action=login");
				}
				include "view/change_password.php";
				break;
			case "user_list":
				if (isset($_SESSION["login"])) {
					$userModel = new Model();
					$listUser = $userModel->getList();
					include "view/user_list.php";
				} else {
					header("Location:index.php?action=login");
				}
				break;
			case "delete_user":
				$id = $_GET["id"];
				if (isset($_SESSION["login"])) {
					$userModel = new Model();
					$deleteUser = $userModel->deleteUser($id);
					header("Location:index.php?action=user_list");
				} else {
					header("Location:index.php?action=login");
				}
				break;

			case "add_product":
				if (isset($_SESSION["login"])) {
					if (isset($_POST["add_product"])) {
						$product_name = $_POST["product_name"];
						$product_description = $_POST["product_description"];
						$product_price = $_POST["product_price"];
						$product_image = $_FILES["product_image"]["name"];
						$target = "images/products/".basename($product_image);
						move_uploaded_file($_FILES["product_image"]["tmp_name"],$target);
						$productModel = new Product();
						$addProduct = $productModel->addProduct($product_name,$product_description,$product_price,$product_image);
					}
				} else {
					header("Location:index.php?action=login");
				}
				include "view/add_product.php";
				break;

			case "product":
				$productModel = new Product();
				$listProduct = $productModel->getProductList();
				include "view/product_list.php";
				break;

			case "add_cart":
					$product_id = $_GET["id"];
					$productModel = new Product();
					$addCart = $productModel->addToCart($product_id);
					header("Location:index.php?action=product");
				include "view/cart.php";
				break;

			case "cart":
					$productModel = new Product();
					$listCart = $productModel->getCartList();
				include "view/cart.php";
				break;

			case "delete_cart_item":
					$id = $_GET["id"];
					$productModel = new Product();
					$deleteCartItem = $productModel->deleteCartItem($id);
					header("Location:index.php?action=cart");
				include "view/cart.php";
				break;

			case "edit_product":
				if (isset($_SESSION["login"])) {
					if (isset($_POST["edit_product"])) {
						$id = $_GET["id"];
						$product_name = $_POST["product_name"];
						$product_description = $_POST["product_description"];
						$product_price = $_POST["product_price"];
						$product_image = $_FILES["product_image"]["name"];
						$target = "images/products/".basename($product_image);
						move_uploaded_file($_FILES["product_image"]["tmp_name"],$target);
						$productModel = new Product();
						$editProduct = $productModel->editProduct($id,$product_name,$product_description,$product_price,$product_image);
						header("Location:index.php?action=product");
					}
				} else {
					header("Location:index.php?action=login");
				}
				include "view/edit_product.php";
				break;

			case "delete_product":
				if (isset($_SESSION["login"])) {
						$id = $_GET["id"];
						$productModel = new Product();
						$deleteProduct = $productModel->deleteProduct($id);
						header("Location:index.php?action=product");
				} else {
					header("Location:index.php?action=login");
				}
				include "view/product_list.php";
				break;

			case "add_news":
				if (isset($_SESSION["login"])) {
					if (isset($_POST["add_news"])) {
						date_default_timezone_set("Asia/Ho_Chi_Minh");
						$news_date = date("h:i A")." - ".date("d/m/Y");
						$news_title = $_POST["news_title"];
						$news_description = $_POST["news_description"];
						$news_author = $_SESSION["login"];
						$newsModel = new News();
						$addNews = $newsModel->addNews($news_title,$news_description,$news_date,$news_author);
					}
				} else {
					header("Location:index.php?action=login");
				}
				include "view/add_news.php";
				break;

			case "news_list":
				if (isset($_SESSION["login"])) {
					$newsModel = new News();
					$listNews = $newsModel->listNews();
				} else {
					header("Location:index.php?action=login");
				}
				include "view/news_list.php";
				break;

			case "delete_news":
				if (isset($_SESSION["login"])) {
					$id = $_GET["id"];
					$newsModel = new News();
					$deleteNews = $newsModel->deleteNews($id);
					header("Location:index.php?action=news_list");
				} else {
					header("Location:index.php?action=login");
				}
				break;

			default:
				include "view/show_news_list.php";
				break;
		}
	}
}

?>