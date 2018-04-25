<?php 
include 'Template_Header.html';
?>


<html>
<head>
<title> Registration </title>
<body align="center">
<pre>
<form action="Handle_reg.php" method="POST">
Enter Your User Name<input type="name" name="Uname"> </input>

Birth Year<select name="year" name="YOB">
<option name="yyyy" value=""> YYYY </option>
<?php 
for($i=1990; $i<=2017; $i++)
{
	echo "<option=\"$i\" value=\"$i\" $i </option>";
}
?>
</body>
</html>

<?php 
include 'Template_Footer.html';
?>