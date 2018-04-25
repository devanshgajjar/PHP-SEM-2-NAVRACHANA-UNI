<?php 
include 'Template_Header.html';
?>


<html>
<head>
<title> Registration </title>
<body align="center">
<pre>
<form action="Handle_reg.php" method="POST">
Enter Your First Name<input type="name" name="Fname"> </input>
Enter Your Last Name<input type="name" name="Lname"> </input>
Birth Year<select name="year" name="YOB">
<option name="yyyy" value=""> YYYY </option>
<?php 
for($i=1990; $i<=2017; $i++)
{
	echo "<option=\"$i\" value=\"$i\" $i </option>";
}
?>

Address<input type="name" name="address"> </input>
State<select name="state"> 
<option name=""> Select State </option>
<?php
$array1=array("1" => "Gujarat", "2"=> "Rajasthan", "3" => "Maharashtra");
foreach($array1 as $num => $state)
{
	echo <option name=\"$num"\ $state </option>;
}
?>
</select>

City<input type="name" name="city"> </input>
Pincode<input type="name" name="pincode"> </input>
Qualification<input type="name" name="city"> </input>
Required Job Type <input type="name" name="req"> </input>
Location<input type="name" name="loc"> </input>

</form>
</pre>
</body>
</html>

<?php 
include 'Template_Footer.html';
?>