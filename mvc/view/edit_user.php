<title>EDIT USER</title>
<h1> EDIT USER </h1>
<form name="edit_user" method="post" enctype="multipart/form-data">
	Username :
	<input name="username" class="form-control" type="text"><?php echo @$username_warn; ?><br><br>
	Password : 
	<input name="password" class="form-control" type="text"><?php echo @$password_warn; ?><br><br>
	<input name="size" value="1000000" type="hidden">
	<input name="image" type="file"><br><br>
	<input name="edit_user" class="btn btn-success" type="submit" value="EDIT THIS USER">
	<h1><?php echo @$register_warn; ?></h1>
</form>
<?php 
$username_warn = "";
$password_warn = "";
$register_warn = "";
?>

