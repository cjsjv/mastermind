<html>

<head>
	<title>Login</title>
</head>

<body>

	<br/>
	<a href='<?php echo base_url('/index.php/site/signup_init');?>'>Sign Up</a><br/>
	
	<?php if(isset($error)) echo "invalid username/password combination"; ?>
	<br/>
	<form name='user_signup' method='post' action='<?php echo base_url('/index.php/site/login_confirm')?>'>
	
		Username<input type='text' name='uname' required/><br/>
		Password<input type='password' name='pword' required/><br/>
		
		<input type='submit' value='Log In'>
		
	</form>
	
</body>
</html>