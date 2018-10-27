<title>REGISTER</title>
<h1> REGISTER </h1>
<form name="register" method="post" enctype="multipart/form-data">
	Username :
	<input name="username" class="form-control" type="text"><?php echo @$username_warn; ?><br><br>
	Password : 
	<input name="password" class="form-control" type="text"><?php echo @$password_warn; ?><br><br>
	<input name="size" value="1000000" type="hidden">
	<input name="image" type="file"><br><br>
	<input name="register_submit" class="btn btn-success" type="submit" value="REGISTER">
	<h1><?php echo @$register_warn; ?></h1>
</form>
<?php 
$username_warn = "";
$password_warn = "";
$register_warn = "";
?>

