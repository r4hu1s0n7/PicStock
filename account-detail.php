<?php
if(session_status() == PHP_SESSION_NONE)
{
	session_start();	
}

	
	include 'connection.php';
	$userid = $_COOKIE['userid'];

	$qry = "SELECT * FROM signup WHERE id = $userid;";

	$sql = mysqli_query($con, $qry);

	while($row = mysqli_fetch_assoc($sql)) {
	 	$username = $row['username'];
	 	$email = $row['email'];
	 }
/////////////////------------------Profile Details--------------------------//////////////////////	
	if (isset($_POST['pass_btn']))
	{
		$password = (!empty($_POST['CurrentPassword'])) ? hash('sha256', $_POST['CurrentPassword']) : '';
				
		$qry = "SELECT * FROM signup WHERE id = $userid AND pass = '$password';";
		
		$sql = mysqli_query($con, $qry);

		if (mysqli_num_rows($sql) == 1) {
			if (!($_POST['CurrentPassword'] == $_POST['NewPassword']))
			{
				if ($_POST['NewPassword'] == $_POST['ConfirmPassword'])
				{
					$new_pass = (!empty($_POST['NewPassword'])) ? hash('sha256', $_POST['NewPassword']) : '';
					$query = "UPDATE signup SET pass = '$new_pass' WHERE id = $userid;";
					
					$sql1 = mysqli_query($con, $query);

					if ($sql1) {
						echo "<script> alert('Successfully Changed'); </script>";
					}
					else
					{
						echo "<script> alert('Something Went Wrong'); </script>";
					}
				}
				else
				{
					echo "<script> alert('Password Does not match'); </script>";
				}
			}
			else
			{
				echo "<script> alert('Current and New Password can't be same); </script>";
			}
		}
		else
		{
			echo "<script> alert('Password Wrong'); </script>";
		}
	}

	if (isset($_POST['email_btn'])) {
		$password = (!empty($_POST['CurrentPasswordEmail'])) ? hash('sha256', $_POST['CurrentPasswordEmail']) : '';
				
		$qry = "SELECT * FROM signup WHERE id = $userid AND pass = '$password';";
		
		$sql = mysqli_query($con, $qry);

		if (mysqli_num_rows($sql) == 1)
		{
			$new_email = $_POST['new_email'];
			$query = "UPDATE signup SET email = '$new_email' WHERE id = $userid;";
					
					$sql1 = mysqli_query($con, $query);

					if ($sql1) {
						echo "<script> alert('Successfully Changed'); </script>";
					}
					else
					{
						echo "<script> alert('Something Went Wrong'); </script>";
					}
		}
	}

	////////------------------End------------------//////////////////\

	//////////////////-------------Plan Details----------------------//////////////////
	if (isset($_SESSION['plan_id'])) {
	$subs_qry = "SELECT * FROM user_subs_info WHERE user_id = $userid;";
	$subs_exe = mysqli_query($con, $subs_qry) OR die('Error');

	while($subs_rs = mysqli_fetch_assoc($subs_exe))
	{
		$planid = $subs_rs['plan_id'];
		$expiry_date = $subs_rs['subs_end_date'];
		$sub_date = $subs_rs['subs_start_date'];
		$available_dwnld = $subs_rs['downloads'];
	}

	$plan_qry = "SELECT * FROM plan_info WHERE id = $planid;";
	$plan_exe = mysqli_query($con, $plan_qry);
	while ($plan_rs = mysqli_fetch_assoc($plan_exe)) {
		$plan_name = $plan_rs['plan_name'];
		$plan_price = $plan_rs['plan_price'];
		$plan_downloads = $plan_rs['plan_downloads'];
	}
}
	//////////////////-------------End----------------------//////////////////
?>
<!DOCTYPE html>
<head>
	<?php include 'headtag.php'; ?>
</head>
<body>
<div class="theme-layout">

	<?php include 'header.php'; ?>
	
	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 column">
						<div class="title center">
							<h2>Your Account </h2>
							<i>You can select from the key</i>
						</div>
						<?php 
							if (isset($_SESSION['plan_id'])) {
								include 'account-tabs.php';
							}
							else
							{
								include 'account-tabs-profile.php';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>


</div>

	<?php include 'footer.php'; ?>


	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/enscroll-0.5.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrolly.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>

</body>
</html>