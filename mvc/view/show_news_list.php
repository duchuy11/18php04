<title>NEWS</title>
<h1>NEWS</h1>
<div class="container">
	<?php
	include "model/connectdb_show_news.php";
	include "model/connectdb_like.php";
	include "model/connectdb_comment.php";
	$news_like = new ConnectDB_like_news();
	$session = @$_SESSION["login"];
	$mysql_like_news = "SELECT * FROM user WHERE username = '$session'";
	$result_like_news = mysqli_query($news_like->connect_like_news(),$mysql_like_news);
	$news_comment = new ConnectDB_comment_news();
	$news_database = new ConnectDB_show_news();
	$mysql_show_list = "SELECT * FROM news ORDER BY news_date DESC";
	$result = mysqli_query($news_database->connect_show_news(),$mysql_show_list);
	while ($row_like_news = $result_like_news->fetch_assoc()) {
		$uid = $row_like_news["id"];
	}
	while ($row = $result->fetch_assoc()) { ?>
		<div class="news"> 
			<h4 style="text-align: center;"><?php echo $row["news_title"] ?></h1>
				<h5 style="text-align: center;">> <?php echo $row["news_date"] ?> <</h2>
					<p style="text-indent: 50px;text-align: justify;"><?php echo $row["news_description"] ?></p>
					<b style="float: right;"><?php echo $row["news_author"] ?></b>
					<a href="index.php?action=like&id=<?php echo $row["id"]; ?>&uid=<?php echo $uid; ?>" class="btn btn-danger" style="margin-top: <?php if (isset($_SESSION["login"])) { ?>20px<?php } ?>;">Like</a>
					<form method="post" action="index.php?action=comment&news_id=<?php echo $row['id']; ?>" style="height: 25px;width: 650px; margin-top: 25px;">
						<?php if (isset($_SESSION["login"])) { ?>
							<input type="text" class="form-control" name="comment"> 
						<?php } ?>
					</form>
					<div id="comment" style="margin-top: <?php if (isset($_SESSION["login"])) { ?>40px<?php } ?>;">
						<?php 
						$mysql_comment_news = "SELECT * FROM news_comment WHERE news_id = '$row[id]' ORDER BY id DESC";
						$result_comment_news = mysqli_query($news_comment->connect_comment_news(),$mysql_comment_news);
						while ($row_comment_news = $result_comment_news->fetch_assoc()) { ?>		

							<p><kbd><?php echo $row_comment_news["username"];?></kbd> : <?php echo $row_comment_news["comment"] ?></p>
							<?php
						} 
						?>
					</div>
				</div>
				<?php
			}
			?>
		</div>