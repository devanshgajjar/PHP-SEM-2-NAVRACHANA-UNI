<html>
<head>
<title>
</title>
<center>

	<form action="FunctionGreetingB.php" method="GET">
	
	Enter your Name <input type="text" name="uname"> </input> <br>
	Enter Date of birth 
<select name="Months">
<option value="">Month</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
<select name="Days">
<option value="">Day</option>
<?php 
   for($i=1;$i<=31;$i++)
{
echo"<option value=\"$i\">$i</option><br>";
}
?>
</select>
<select name="Years">
<option value="">Year</option>
<?php
   for($i=1910;$i<=2018;$i++)
{
echo"<option value=\"$i\">$i</option><br>";
}
?>
</select>
<br><br>
<input type="submit" name="Submit">
	</center>
	</form>
	</pre>
	</body>
	</html>