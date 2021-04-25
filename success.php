<?php
ob_start();
session_start();

include 'connection.php';

$plan_id = $_COOKIE['plan_id'];
$user_id = $_COOKIE['userid'];

$_SESSION['plan_id'] = $_COOKIE['plan_id'];
$_SESSION['userid'] = $_COOKIE['userid'];
$_SESSION['isLogin'] = $_COOKIE['isLogin'];

$qry = "SELECT * FROM plan_info WHERE id = $plan_id; ";
$sql = mysqli_query($con, $qry) OR die("Error") ;

while ($rs = mysqli_fetch_assoc($sql)) {
	$plan_name = $rs['plan_name'];
	$plan_price = $rs['plan_price'];
	$dwnld = $rs['plan_downloads'];
}

////////////////////////////////////////////////////////////////////////////////

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("PaytmKit/lib/config_paytm.php");
require_once("PaytmKit/lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
			// echo $paramName.' : '.$paramValue."</br>";
			$orderid = $_POST['ORDERID'];
			$amount = $_POST['TXNAMOUNT'];
		}
	}

if($isValidChecksum == "TRUE")
{
	$success_msg = "Checksum matched and following are the transaction details:";
	if ($_POST["STATUS"] == "TXN_SUCCESS")
	{
		$success_txn = "Transaction status is success";

		// Insertion of data

		$current_date = date('Y-m-d');
		$expiry_date = date("Y-m-d", strtotime("+30 days"));
  		$insert_qry = "INSERT INTO user_subs_info (user_id, plan_id, order_id, subs_start_date, subs_end_date, downloads) VALUES ($user_id, $plan_id, '$orderid', '$current_date', '$expiry_date', $dwnld )";
		
		$insert_exe = mysqli_query($con, $insert_qry);
		if ($insert_exe) {
			$subs_qry = "UPDATE signup SET subscripted = 1 WHERE id = $user_id;";
			//echo $subs_qry;
			$subs_exe = mysqli_query($con, $subs_qry) OR die('Hello Error') ;
		}
		else
		{
			die('Error');
		}
		
		// End

		// Retrieval date of subscription and expiry

		$select_qry = "SELECT subs_start_date ,subs_end_date FROM user_subs_info WHERE user_id = $user_id";
		$select_exe = mysqli_query($con, $select_qry);

		while ($rs = mysqli_fetch_assoc($select_exe))
		{
			$subs_date = $rs['subs_start_date'];
			$exp = $rs['subs_end_date'];
		}
		
		
		/////////////////////////////////////////////////////////////////////
	}
	else
	{
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}
}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
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
			box-shadow: 0px 0px 5px 0px rgba(179,179,179,1);
		}
		li
		{
			font-size: 17px;
			margin: 0 0 10px 0;
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
								<h2 style="color: #00a700;">Your Order is successfully taken and delivered!</h2>
								<i>Here are some information related to your purchased item</i>
							</div>
							<ul>
								<li>ORDER ID : <?php
									if (isset($_POST) && count($_POST)>0 ) echo $orderid;
								?>		
								</li>
								<li>ORDERED PLAN NAME : <?php
									if (isset($_POST) && count($_POST)>0 ) echo $plan_name;
								?>
								</li>
								<li>DATE OF PURCHASE OF PLAN : <?php
									if (isset($_POST) && count($_POST)>0 ) echo $subs_date;
								?>
								</li>
								<li>DATE OF EXPIRY OF PLAN : <?php
									if (isset($_POST) && count($_POST)>0 ) echo $exp;
								?>
								</li>
								<li>PAID AMOUNT : <?php
									if (isset($_POST) && count($_POST)>0 ) echo $amount;
								?>	
								</li>
								<li>AVAILABLE DOWNLOADS : <?php
									if (isset($_POST) && count($_POST)>0 ) echo $dwnld;
								?>	
								</li>
							</ul>
						
						<a href="account-detail.php"><button class="btn" style="float: right;">Redirect to Account Details</button></a>
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
