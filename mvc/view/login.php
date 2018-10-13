<h1> LOGIN </h1>
<form name="login" method="post">
	Username :
	<input name="username" class="form-control" type="text"><br><br>
	Password : 
	<input name="password" class="form-control" type="text"><br><br>
	<input name="login_submit" class="btn btn-success" type="submit" value="LOGIN">
	<h1><?php echo @$login_warn; ?></h1>
</form>

<?php 
$login_warn = "";
?>