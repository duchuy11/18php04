<h1> CHANGE PASSWORD </h1>
<form name="change_password" method="post">
	Current username :
	<input name="username" type="text" class="form-control" value="<?php echo $_SESSION["login"]; ?>" disabled><br><br>
	New password : 
	<input name="password" class="form-control" type="text"><br><br>
	<input name="change_password_submit" class="btn btn-success"  type="submit" value="CHANGE PASSWORD">
	<h1><?php echo @$register_warn; ?></h1>
</form>
<?php 
$username_warn = "";
$password_warn = "";
$register_warn = "";
?>

