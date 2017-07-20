<!DOCTYPE html>
<html>
	<head>
	<title>Registration</title>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="login-page">	<!--log in credintionals-->
		<div class="form">
			<form class="login-form" method="post" action="register.php">
				<h3><center>User Registration</center></h3>


				<input type="text" id="First_name" name="First-name" value="First Name" onBlur="if(this.value == '') this.value = 'First Name'" onFocus="if(this.value == 'First Name') this.value = ''" required>

				<input type="text" id="Last_name" name="Last-name" value="Last Name" onBlur="if(this.value == '') this.value = 'Last Name'" onFocus="if(this.value == 'Last Name') this.value = ''" required>

				<input type="text" id="Username" name="Username" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>

				<input type="text" id="Email" name="Email" value="Email" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required>

				<input type="password" id="Password" value="Password" name="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required>

				<span class="fontawesome-lock"></span><input type="password" name="Confirm-password" id="Conform-password" value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required>

				<button name="btnsubmit" id="btnsubmit"/>Sign Up</button>
			</form>
		</div>
	</div>
</body>
</html>


