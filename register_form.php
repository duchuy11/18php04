<!DOCTYPE html>
<head>
	<title>Register FORM</title>
	<style>
		form {
			text-align: center;
			line-height: 50px;
		} span {
			color:red;
		}
	</style>
</head>
<body>

	<?php
		$name_err = "";
		$email_err = "";
		$pass_err = "";
		$repass_err = "";
		$gender_err = "";
		$city_err = "";
		$desc_err = "";
		$alert = "";
		$validation = true;


		if (isset($_POST["submit"])) {
			$name = @$_POST["name"];
			$email = @$_POST["email"];
			$pass = @$_POST["password"];
			$repass = @$_POST["repassword"];
			$gender = @$_POST["gender"];
			$city = $_POST["city"];
			$desc = @$_POST["desc"];
			if (empty($name)) {
				$name_err = " Vui lòng nhập tên";
				$validation = false;
			}

			if (empty($email)) {
				$email_err = " Vui lòng nhập Email";
				$validation = false;	
			} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email_err = " Email không hợp lệ";
				$validation = false;
			}

			if (empty($pass)) {
				$pass_err = " Bạn chưa nhập mật khẩu";
				$validation = false;
			}

			if (empty($repass)) {
				$repass_err = " Bạn chưa nhập lại mật khẩu";
				$validation = false;
			}

			if (empty($gender)) {
				$gender_err = " Bạn chưa chọn giới tính";
				$validation = false;
			}

			if ($city == "Unselected") {
				$city_err = " Bạn chưa chọn quê quán";
				$validation = false;
			}

			if (empty($desc)) {
				$desc_err = " Bạn chưa mô tả về bản thân";
				$validation = false;
			}

			if ($validation) {
				$alert = "<br>Đăng ký thành công !!! <br> --------------- <br> Tên : $name <br> Email : $email <br> Mật khẩu : $pass <br> Giới tính : $gender <br> Quê quán : $city <br> Mô tả : $desc ";
			} else {
				if ($pass != $repass) {
					$pass_err = $repass_err = " Hai mật khẩu không trùng nhau";
				}
				$alert = " Chưa hoàn thành đăng ký !!!";
			}
		}
	?>

	<form name="register_form" method="post" enctype="multipart/form-data">
		<h1>REGISTER</h1>
		Họ và tên : <input name="name" type="text"><span><?php echo $name_err; ?></span><br>
		Email : <input name="email" type="text"><span><?php echo $email_err; ?></span><br>
		Mật khẩu : <input name="password" type="password"><span><?php echo $pass_err; ?></span><br>
		Nhập lại mật khẩu : <input name="repassword" type="password"><span><?php echo $repass_err; ?></span><br>
		Giới tính : 
		Nam <input name="gender" type="radio" value="male">
		Nữ <input name="gender" type="radio" value="female">
		Khác <input name="gender" type="radio" value="other"><span><?php echo $gender_err; ?></span><br>
		Quê quán : <select name="city">
			<option value="Unselected">Select</option>
			<option>DN</option>
			<option>HN</option>
			<option>SG</option>
		</select><span><?php echo $city_err; ?></span><br>
		Miêu tả về bản thân : <textarea name="desc"></textarea><span><?php echo $desc_err; ?></span><br>
		Avatar : <input type="file" name="avatar" style="color:red;"><br>
		<input type="submit" name="submit" value="Register">

		<?php echo "<b>" . $alert . "</b>"; ?>
	</form>
</body>
</html>