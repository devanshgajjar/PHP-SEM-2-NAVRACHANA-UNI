<html>

<head>
</head>

<body>
	<?php

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$pi = 3.14;
			$area = $pi*$_POST['$radius1']*$_POST['$radius1'];
			echo"The Radius of circle is $area";
		}
?>
</body>
</html>