<!DOCTYPE html>
<html>
	<head>
	<title>Login</title>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="login-page">	<!--log in credintionals-->
		<div class="form">
			<form class="login-form" method="post" action="login.php">
				<h3><img src="images/n.png" width="25" height="25">&nbsp;&nbsp;&nbsp;&nbsp;Messenger</h3>
				<input type="text" id="username" name="username" value="User Name" onBlur="if(this.value == '') this.value = 'User Name'" onFocus="if(this.value == 'User Name') this.value = ''" required>
				<input type="password"  id="Password" name="Password" value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required>
				<!-- <input type="text" placeholder="username" name="inputuser">
				<input type="password" placeholder="username" name="inputuser"> -->
				<button name="btnsubmit" id="btnsubmit"/>login</button>
			</form>
			<p>Not a member? <a href="registerform.php">Sign up now</a><span class="fontawesome-arrow-right"></span></p>
		</div>
	</div>
</body>
</html>


