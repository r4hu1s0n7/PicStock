<?php
	
	for ($i=1; $i <=100 ; $i++) { 

		if ($i % 7==0 AND $i % 5==0 AND $i % 3==0) {
		 	echo "Fizz Buzz R"."<br>";
		}
		elseif ($i % 7==0 AND $i % 5==0) {
		 	echo "Fizz Buzz"."<br>";
		} 
		elseif ($i % 7==0 AND $i % 3==0) {
		 	echo "Fizz R"."<br>";
		}
		elseif ($i % 5==0 AND $i % 3==0) {
		 	echo "Buzz R"."<br>";
		}
		elseif ($i % 7==0) {
			echo "Fizz"."<br>";
		}
		elseif($i % 5==0)
		{
			echo "Buzz"."<br>";
		}
		elseif($i % 3==0)
		{
			echo "R"."<br>";
		}
		else
		{
			echo $i."<br>";
		}
	}
?>