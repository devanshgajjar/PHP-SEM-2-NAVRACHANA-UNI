<?php
if($_SERVER['REQUEST_METHOD']=="GET")
{
	$uname=$_GET['uname'];
	$age=$_GET['Years'];
	$age2=2018-$age;

	
}
function greeting($x)
	{
		global $uname;
		echo"Greetings $uname";
		
	}
function age_cal($y)
{
		
		echo"Age is $y";
}	
	
greeting($uname);
age_cal($age2);
?>