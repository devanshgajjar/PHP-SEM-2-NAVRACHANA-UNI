<html>
<head>
<title>
Prediction
</title>
</head>
<body align=center>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$fav_color=($_POST['fav_color']);

		switch($fav_color)
		{
		case"red": echo"<br> You are firey and energetic like red<br>";
		break;
		
		case"blue": echo"<br> You are calm like blue";
		break;
		
		case"green": echo "<br> You are vibrant like green";
		break;
		
		default: echo"<br> Choose a color from the three: Blue Green Red";
		break;
		}
}
?>