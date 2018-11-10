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

		function editNews($id,$news_title,$news_description) {
			$mysql_edit_news = "UPDATE news SET news_title = '$news_title', news_description = '$news_description' WHERE id = '$id'";
			return mysqli_query($this->conn_news,$mysql_edit_news);
		}

		function likeNews($id,$uid) {
			$mysql_like_news = "INSERT INTO news_likes (news_id,user_id) VALUES ('$id','$uid')";
			return mysqli_query($this->conn_news,$mysql_like_news);
		}

		function commentNews($username,$comment,$news_id) {
			$mysql_comment_news = "INSERT INTO news_comment (username,comment,news_id) VALUES ('$username','$comment','$news_id')";
			return mysqli_query($this->conn_news,$mysql_comment_news);
		}
	}
?>