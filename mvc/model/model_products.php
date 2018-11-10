<?php
	include "model/connectdb_product.php";
	class Product extends ConnectDB_product{
		function addProduct($product_name,$product_description,$product_price,$product_image) {
			$mysql_addproduct = "INSERT INTO products (product_name,product_description,product_price,product_image) VALUES ('$product_name','$product_description','$product_price','$product_image')";
			return mysqli_query($this->conn_product,$mysql_addproduct);
		}
		function getProductList() {
			$mysql_get_product_list = "SELECT * FROM products";
			$result = mysqli_query($this->conn_product,$mysql_get_product_list);
			return $result;
		}

		function addToCart($product_id) {
			$mysql_add_to_cart = "INSERT INTO cart (product_id) VALUES ('$product_id')";
			return mysqli_query($this->conn_product,$mysql_add_to_cart);
		}

		function getCartList() {
			$mysql_get_cart_list = "SELECT * FROM cart";
			return mysqli_query($this->conn_product,$mysql_get_cart_list);
		}

		function deleteCartItem($id) {
			$mysql_delete_cart_item = "DELETE FROM cart WHERE id=$id";
			return mysqli_query($this->conn_product,$mysql_delete_cart_item);
		}

		function editProduct($id,$product_name,$product_description,$product_price,$product_image) {
			$mysql_edit_product = "UPDATE products SET product_name = '$product_name',product_description = '$product_description',product_price = '$product_price',product_image = '$product_image' WHERE id = '$id'";
			return mysqli_query($this->conn_product,$mysql_edit_product);
		}

		function deleteProduct($id){
			$mysql_delete_product = "DELETE FROM products WHERE id='$id'";
			return mysqli_query($this->conn_product,$mysql_delete_product);
		}
	}
?>