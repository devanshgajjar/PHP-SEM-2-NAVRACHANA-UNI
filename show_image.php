<?php
require 'db_config.php';

 for ($i= 1; $i<=4; $i++) 
 {
	 $i_query = "select image from image_table where id =$i";
	 $run_query = mysqli_query0($run_query);
	 while($rows = mysqli_fetch_assoc($run_query))
	 {
		 $image = $rows['image'];
		 $s = $rows['image'];
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			
			echo ' <img src="'.$s'" alt="HTML5 Icon" style="width:128px; height:128px">';
			echo "<br>";
			print $image;
	 }
	 }
	 
	 if($run_query == true)\
	 {
		 echo "<br> <br> Successfully Printed!!!<br>";
	 }
	 else
	 {
		 echo"<br> Sorry, image Cannot be displayed";
		 
	 }
	 mysqli_close($dbc);
?>