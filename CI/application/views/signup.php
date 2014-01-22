<html>

<head>
	<title>Signup</title>
</head>
<body>

	SIGNUP PAGE<br/>
	<a href='<?php echo base_url();?>'>Home</a><br/>

	<form name='user_signup' method='post' action='<?php echo base_url('/index.php/site/signup_insert')?>'>
	
		Name<input type='text' name='name' required/><br/>
		Username<input type='text' name='uname' required/><br/>
		Password<input type='password' name='pword' required/><br/>
		Email<input type='email' name='email' required/><br/>
		Mobile Number<input type='text' name='cnum' required/><br/>
		College<select name="college" required>
		<option selected>CAS</option>
		<option>CEM</option>
		<option>CEAT</option>
		<option>CVM</option>
		</select></br>
		User Number<input type='text' name='usr_num' required/><br/>
		
		<input type='submit' value='register'>
		
	</form>
	
</body>
</html>