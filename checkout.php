<?php

include 'connection.php';

if(session_status() == PHP_SESSION_NONE)
{
	session_start();	
}

if(!isset($_SESSION['isLogin']))
{
	header("location:login/login.php");	
}

$plan_id = $_GET['planid'];
$_SESSION['plan_id'] = $plan_id;
setcookie("plan_id", $plan_id, time() + (86400), "/");
$userid = $_COOKIE['userid'];


$qry = "SELECT subscripted FROM signup WHERE id = $userid;";
$sql = mysqli_query($con, $qry);

while($row = mysqli_fetch_assoc($sql))
{
 	$subs = $row['subscripted'];
}

if($subs == 0)
{
	if ($plan_id == 1) {
		$qry = "SELECT * FROM plan_info WHERE id = $plan_id;";
		$sql = mysqli_query($con, $qry);
		while ($rs = mysqli_fetch_assoc($sql)) {
			$plan_name = $rs['plan_name'];
			$plan_price = $rs['plan_price'];
			$plan_downloads = $rs['plan_downloads']." Images / Month";
		}
	}

	elseif ($plan_id == 2) {
		$qry = "SELECT * FROM plan_info WHERE id = $plan_id;";
		$sql = mysqli_query($con, $qry);
		while ($rs = mysqli_fetch_assoc($sql)) {
			$plan_name = $rs['plan_name'];
			$plan_price = $rs['plan_price'];
			$plan_downloads = $rs['plan_downloads']." Images / Month";
		}
	}

	elseif ($plan_id == 3) {
		$qry = "SELECT * FROM plan_info WHERE id = $plan_id;";
		$sql = mysqli_query($con, $qry);
		while ($rs = mysqli_fetch_assoc($sql)) {
			$plan_name = $rs['plan_name'];
			$plan_price = $rs['plan_price'];
			$plan_downloads = $rs['plan_downloads']." Images / Month";
		}
	}

	elseif ($plan_id == 4) {
		$qry = "SELECT * FROM plan_info WHERE id = $plan_id;";
		$sql = mysqli_query($con, $qry);
		while ($rs = mysqli_fetch_assoc($sql)) {
			$plan_name = $rs['plan_name'];
			$plan_price = $rs['plan_price'];
			$plan_downloads = "No Limits";
		}
	}
?>
<!DOCTYPE html>
<head>
	<?php include 'headtag.php'; ?>
	<style type="text/css">
		.block-checkout
		{
			padding: 40px 0px 40px 0px;
		}
		.btn
		{
			background-color: #04b4e9;
			color: white;
			float: right;
			width: 200px;
			height: 50px;
		}
		.btn:hover
		{
			color: #052d6b;
			font-weight: bold;
		}
	</style>
</head>
<body>
<div class="theme-layout">
	
	<?php include 'header.php'; ?>

	<section>
		<div class="block-checkout">
			<div class="container">
				<div class="row">
					<div class="col-md-12 column">
						<div class="checkout-block">
							<div class="icon-title dark">
								<span><i class="ti-dropbox"></i></span>
								<h2>Checkout</h2>
								<i>Billing Information</i>
							</div>
								
							<a class="edit" href="price-package.php" title="">Edit</a>
							<ul>
								<li>1 Month</li>
								<li><?php echo $plan_downloads; ?></li>
								<li>&#x20b9; <?php echo $plan_price; ?></li>
							</ul>
							<span class="total">Total:</span>
							<strong class="total-price"> &#x20b9;<?php echo $plan_price; ?></strong>
							<p>You can't add more credits to your order</p>

							<form method="POST" action="PaytmKit/pgRedirect.php">

								<input type="hidden" id="CUSTOMER_ID" name="CUST_ID" value="<?php echo $userid; ?>">

								<input type="hidden" id="ORDER_ID" name="ORDER_ID" value="<?php echo  "ORDS" . rand(10000,99999999)?>">

								<input type="hidden" id="CHANNEL_ID" name="CHANNEL_ID" value="WEB">

								<input type="hidden" id="PLAN_ID" name="PLAN_ID" value="<?php echo $_GET['id']; ?>" >

								<input type="hidden" id="TXN_AMOUNT" name="TXN_AMOUNT" value="<?php echo $plan_price; ?>">

								<button type="submit" name="submit" class="btn">Pay through PayTM</button>

							</form>
						
						</div>
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
	<script src="js/select2.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".select").select2();
	});
	</script>

</body>
</html>
<?php
}
else
{
	echo "<script> alert('You already have a purchased plan'); </script>";
	echo "<script> window.location = 'index.php'; </script>";
}
?>