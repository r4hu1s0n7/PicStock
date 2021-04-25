<?php
$current_date = date("Y-m-d");
		$expiry_date = date("Y-m-d", strtotime("+30 days"));
		$date1_ts = strtotime($current_date);
	    $date2_ts = strtotime($exp);
	    $diff = $date2_ts - $date1_ts;
	    $difference =  round($diff / 86400);

if ($difference > 30) 
		{
			
		}
		else
		{	
		echo "<script> alert('You already have a purchased plan'); </script>";
		}	
?>