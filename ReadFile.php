<html>
<head>
<title>
</title>
</head>
<body align="Center">

<h2> Method 1 </h2>
<?php
		echo readfile ("readit.txt");
		echo "<br> <br> This statement is part of Reader file read_file.php <br>";
?>

<h2> Method 2 </h2>
<?php  	
			$myfile = $open("readit.txt", "r") OR DIE ("Unable to get file");
			echo fread ($myfile, filesize("readit.txt") ). <br> ;
			echo fgets ($myfile);
?>

		
		<h2> Method 3 </h2>
<?php  	
			$myfile = $fopen("readit.txt", "r") OR DIE ("Unable to get file");
			while(!feof ($myfile))
			{
				echo fgets($myfile);
			}
			
		fclose($myfile);
?>
		
<p> This the part of HTML code of read_file.php</p>		
</body>
</html>