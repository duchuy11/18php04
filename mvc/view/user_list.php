<h1> User list </h1>
<ul class="list-group">
<?php 
$count = 1;
while ($row = $listUser->fetch_assoc()) {
	echo "
	<li class='list-group-item'>" 
	. "<kbd>" . $count++ . "</kbd>"
	. " - <img src='images/$row[image]' width='30px' height='30px'> <b>Id</b>: " 
	. $row["id"] 
	. " - <b>Username</b>: "
	. $row["username"] 
	." - <b>Password</b>: " 
	. $row["password"] 
	. "<a href='index.php?action=delete_user&id=$row[id]' id='btn_delete' class='btn btn-danger'>Delete</a>
	</li><br>";
}
?>
</ul>
