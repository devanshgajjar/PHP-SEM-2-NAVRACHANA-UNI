<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "examination";
	$dbc = mysqli_connect("localhost", "root", "", "examination");
	
if (!$dbc) 
{
	DIE ("CONNECTION FAILED:". mysqli_connect_error());
}
	
	else
		{
 
		echo "<br>Connection succesfull";
	}

?>
 