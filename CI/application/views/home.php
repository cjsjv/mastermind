<html>

<head>
	<title>ICS Library System</title>
</head>

<body>

	<?php  if(!$this->session->userdata('logged_in'))	redirect('/site/'); ?>
	<br/>
	
	<?php echo "Welcome! " . $this->session->userdata('username'); ?>
	<?php echo anchor('site/logout', 'Log Out'); ?>
	
	
	
</body>
</html>