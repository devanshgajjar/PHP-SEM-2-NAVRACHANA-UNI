<html

<head>
</head>

<body>
	<?php

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{

			$bill = ($_POST['distance']*$_POST['price'])/$_POST['average'];
			echo"Your bill is <br> $bill";
		}
?>
</body>
</html>