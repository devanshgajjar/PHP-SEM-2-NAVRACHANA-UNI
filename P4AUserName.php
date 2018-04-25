<html>
<body>
<?php

	if($_SERVER['REQUEST_METHOD']  == "GET")
		{
		$uname = $_GET['user_name'];
		echo"Hello, $uname!";
		}
?>
</body>
</html>