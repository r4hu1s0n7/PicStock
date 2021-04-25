<!DOCTYPE html>

<head>
	<?php include 'headtag.php'; ?>
	<script type="text/javascript">
		function set_page_name()
			{
				<?php 
					$_SESSION['page_name'] = "price-package";
				?>
			}
	</script>
</head>
<body onload="set_page_name();">
<div class="theme-layout">

	<?php include 'header.php'; ?>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12 column">
						<div class="title center">
							<h2>Top Categories</h2>
							<i>You can select from below. <b>All are in Monthly Package</b></i>
						</div>					

						<div class="best-packages">
							<div class="row">
								<div class="col-md-3">
									<div class="package">
										<i class="ti-stats-up"></i>
										<h4>Basic Plan</h4>
										<p>One Minute Plan!, Available Downloads : 10 </p>
										<strong>&#x20b9;180.54<?php 
// userid, amount, orderid,


										?><a href="checkout.php?planid=1" title="">Choose plan</a></strong>
									</div><!-- Package -->
								</div>
								<div class="col-md-3">
									<div class="package">
										<i class="ti-microsoft"></i>
										<h4>Standard Plan</h4>
										<p>Plan for Standard User, Available Downloads : 20</p>
										<strong>&#x20b9;366.64<a href="checkout.php?planid=2" title="">Choose plan</a></strong>
									</div><!-- Package -->
								</div>
								<div class="col-md-3">
									<div class="package">
										<i class="ti-comments-smiley"></i>
										<h4>Preium Plan</h4>
										<p>Try this for more downloads, Available Downloads : 40</p>
										<strong>&#x20b9;733.29<a href="checkout.php?planid=3" title="">Choose plan</a></strong>
									</div><!-- Package -->
								</div>
								<div class="col-md-3">
									<div class="package">
										<i class="ti-briefcase"></i>
										<h4>Ultra Preium Plan</h4>
										<p>Available Downloads : No Limit</p>
										<strong>&#x20b9;1466.57<a href="checkout.php?planid=4" title="">Choose plan</a></strong>
									</div><!-- Package -->
								</div>
							
							</div>
						</div><!-- Best Packages -->
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