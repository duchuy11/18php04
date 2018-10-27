<title>NEWS</title>
<h1>NEWS</h1>
<div class="container">
	<?php
		include "model/connectdb_show_news.php";
		$news_database = new ConnectDB_show_news();
		$mysql_show_list = "SELECT * FROM news ORDER BY news_date DESC";
		$result = mysqli_query($news_database->connect_show_news(),$mysql_show_list);
		while ($row = $result->fetch_assoc()) { ?>
	
		<div class="news"> 
			<h4 style="text-align: center;"><?php echo $row["news_title"] ?></h1>
			<h5 style="text-align: center;">> <?php echo $row["news_date"] ?> <</h2>
			<p style="text-indent: 50px;text-align: justify;"><?php echo $row["news_description"] ?></p>
			<b style="float: right;"><?php echo $row["news_author"] ?></b>
		</div>
	<?php
		} 
	?>
</div>