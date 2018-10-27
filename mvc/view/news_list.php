<title>News list</title>
<h1> News list </h1>
<div class="container">
	<br><br>            
  <table class="table">
    <thead>
      <tr>
      	<th>News date</th>
        <th>News title</th>
        <th>News description</th>
        <th>News author</th>
        <th>Action</th>
      </tr>
    </thead>
<?php 
while ($row = $listNews->fetch_assoc()) { ?>
    <tbody>
      <tr>
      	<td><?php echo $row["news_date"]; ?></td>
        <td style="width: 200px;"><?php echo $row["news_title"]; ?></td>
        <td><?php echo $row["news_description"]; ?></td>
        <td><?php echo $row["news_author"]; ?></td>
        <td><a href="index.php?action=delete_news&id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
      </tr>
    </tbody>
<?php 
}
?>
  </table>
</div>
