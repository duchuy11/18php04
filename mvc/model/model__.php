<?php
	include "model/connectdb_news.php";
	class News extends ConnectDB_news{
		function addNews($news_title,$news_description,$news_date,$news_author) {
			$mysql_add_news = "INSERT INTO news (news_title,news_description,news_date,news_author) VALUES ('$news_title','$news_description','$news_date','$news_author')";
			return mysqli_query($this->conn_news,$mysql_add_news);
		}

		function listNews() {
			$mysql_list_news = "SELECT * FROM news ORDER BY news_date DESC";
			return mysqli_query($this->conn_news,$mysql_list_news);
		}

		function deleteNews($id) {
			$mysql_delete_news = "DELETE FROM news WHERE id = '$id'";
			return mysqli_querY($this->conn_news,$mysql_delete_news);
		}
	}
?>