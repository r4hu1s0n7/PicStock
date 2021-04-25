<?php 
include 'connection.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
	$user_id=$_POST['id'];
	$qry_get="SELECT * FROM user_subs_info WHERE user_id =".$user_id;
	$result=mysqli_query($con,$qry_get);
	while ($rs = mysqli_fetch_assoc($result)) {
		$var = $rs['downloads'];
	}
	$new=$var-1;
	if($var>0){
	$qry = "UPDATE user_subs_info SET downloads = $new  WHERE user_id =".$user_id;
	mysqli_query($con, $qry);
	echo 1;
}else{
	echo 0;
}
}
?>