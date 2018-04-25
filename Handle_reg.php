<!DOCTYPE HTML 5>
<HTML>
<head> <title> Handle Registration </title>
<style type="text/css" media="screen">
.error {color:red;}
</style>

<style type="text/css" media="screen">
.success {color:green;}
</style>
</head>

<body align="center">
<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
	$okay=TRUE;
	if(empty($_POST['email']))
	{
	print'<p class="error"> Please enter e-mail</p>';
	$okay=FALSE;
	entered
	}
	if(empty($_POST['pass']))
	{
	print'<p class="error"> Please enter password</p>';
	$okay=FALSE;
	}
	if(empty($_POST['cpass']))
	{
	print'<p class="error"> Please enter confirm password</p>';
	$okay=FALSE;
	}
	if ($_POST['pass'] !=$_POST['cpass'])
	{
	echo "<br> <br> The password does not match";
	$okay=FALSE;
	}
	if(!isset ($_POST ['terms']))
	{
		print<p class="Error"> 'You must accept terms';
		$okay = FALSE;
	}
	if($okay)
	{
		print<p class="Success"> Congrats <br> You have been successfully registered </p>
		
	}
	}
	?>
	</body>
	</html>