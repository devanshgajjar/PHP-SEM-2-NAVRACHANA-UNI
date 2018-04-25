<?php

	function static_demo()
	
	{
		static $var1 = 50;
		echo "<br> <br> The value of variable is $var1";
		
			$var1=79;
			}
			
			static_demo();
			static_demo();
			
			
			echo" <br> <br> Recursive Function <br> <br>";
			
			function test()
			{
				static $count = 0;
				$count++;
				echo $count;
				if($count < 10)
				{
					test();
					}
					echo"<br>";
					}
			test();
		
		?>