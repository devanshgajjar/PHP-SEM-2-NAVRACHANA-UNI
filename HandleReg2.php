<html>
<head>
<title> Registration </title>
<body align="center">
<pre>
<form action="Handle_reg.php" method="POST">

Enter Email ID<input type="name" name="Email"> </input>
Enter Password<input type="Password" name="Password"> </input>
Confirm Password<input type="Password" name="Password"> </input>
Birth Year<select name="year" name="YOB">
<option name="yyyy" value=""> YYYY </option>

<?php 
for($i=1990; $i<=2017; $i++)
{
	echo "<option=\"$i\" value=\"$i\" $i </option>;
}
?>

</select>
Favourite Color :<select name="fav_color">
<option name="fc" value=" ">
favourite color: </option>

<?php
$fav_col=array ('1'=> 'red', '2' => 'green', '3' => 'blue', '4' => 'yellow', '5' => 'white', '6'=> 'orange');
foreach
{
	echo <option=\"$x\" value=\"$x_val\"> $x_val </option>;"
}
</select>
?>


Condition: <input type="Checkbox" name="terms" value="yes"/>
I agree to terms<input type="Submit" value="Submit"/>
</form>
</pre>
</body>
</html>