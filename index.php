<?php
if(session_status() == PHP_SESSION_NONE)
{
	session_start();	
}
include "connection.php";

if (isset($_SESSION['userid'])) {
$user_id = $_SESSION['userid'];
$qry_get="SELECT * FROM user_subs_info WHERE user_id =".$user_id;

$result=mysqli_query($con,$qry_get);

$var=0;

while ($rs1 = mysqli_fetch_assoc($result)) {
	$var = $rs1['downloads'];
}
}


$qry = "SELECT * FROM seller_uploads;";
$rs = mysqli_query($con, $qry) OR die('Error');
	
?>
<!DOCTYPE html>

<head>
	<?php include 'headtag.php'; ?>
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
		<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

		<script src="src/jquery.tagsinput-revisited.js"></script>
		<link rel="stylesheet" href="src/jquery.tagsinput-revisited.css" />

		<script type="text/javascript">
			$(function() {
				$('#formtags1').tagsInput();

				
			});

			$(document).ready(function() {
			 <?php $_SESSION['page_name'] = "index"; ?>
			});
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
    		/*$('.button').click(function(){
        		var clickBtnValue = $(this).val();
		        var ajaxurl = 'ajax.php',
		        data =  {'action': clickBtnValue};
		        $.post(ajaxurl, data, function (response) {
		            <?php $sql?>
		            alert("action performed successfully");
		        });
		    });*/

		    // $('.download').on('click',function(){
		    	
		    // 	$.ajax({
		    // 		method:'POST',
		    // 		url:'download.php',
		    // 		data:{id:1},
		    // 		success:function(data){
		    			
		    // 			if(data==0){
		    // 				alert("Sorry !your download get over");
		    // 			}else{
		    // 				alert("Download Successfull.");

		    // 			}
		    // 			window.location.href=window.location.href;
		    // 		},
		    // 		error:function(data){
		    // 			alert("Something wents wrong");
		    // 		}
		    // 	})
		    // });
		});
	</script>		
</head>
<body>
<div class="theme-layout">
	
	<?php  include 'header.php';?>

	<section>
		<div class="block no-padding">
			<div class="row">
				<div class="col-md-12 column">
					<div class="main-section">
						<div class="image-slider">
							<div class="tp-banner">
								<ul>	
									<li data-transition="slidedown  cube-vertical"  data-masterspeed="500">
										<img src="images/resource/slide-image1.jpg"  alt="" data-duration="120" data-ease="Power0.easeInOut">
									</li><!-- SLIDE  -->
									<li data-transition="slideleft cube-horizontal"  data-masterspeed="500">
										<img src="images/resource/slide-image2.jpg"  alt="" data-duration="120" data-ease="Power0.easeInOut ">
									</li><!-- SLIDE  -->
								</ul>
							</div>
						</div><!-- Image Slider -->
						<div class="welcome-overlay">
							<div class="welcome-inner">
								<div class="logo"><a href="#" title=""><img src="images/123.png" alt="" /></a></div><!-- Logo -->
								<div class="main-tabber">
									<ul class="custom-tabs">
										<li class="active"><a href="#" data-name="all-search" title="">all Search</a></li>
										<li><a href="#"  data-name="category" title=""><i class="fa fa-diamond"></i> Images by Category</a></li>
									</ul><!-- Main Tabber Buttons -->
									<div class="custom-content">
										<div data-id="all-search" class="tab-detail active">
											<div class="main-search fadeInUp">
												<form method="POST" action="images-list.php">
													<input type="text" id="formtags1" placeholder="Search Here Your Keywords" name="search_input">
													<button type="submit" name="submit"><i class="fa fa-search"></i></button>
												</form>
											</div><!-- Main Search -->
										</div>
										<div data-id="category" class="tab-detail">
											<div class="images-category">
												<ul class="col-md-3">
													<li><a href="images-list.php" title="">Abstract</a></li>
													<li><a href="images-list.php" title="">Animals / Wildlife</a></li>
													<li><a href="images-list.php" title="">The Arts</a></li>
													<li><a href="images-list.php" title="">Backgrounds / Textures</a></li>
													<li><a href="images-list.php" title="">Beauty / Fashion</a></li>
												</ul>
												<ul class="col-md-3">
													<li><a href="images-list.php" title="">Buildings / Landmarks</a></li>
													<li><a href="images-list.php" title="">Backgrounds / Textures</a></li>
													<li><a href="images-list.php" title="">Beauty / Fashion</a></li>
													<li><a href="images-list.php" title="">Animals / Wildlife</a></li>
													<li><a href="images-list.php" title="">The Arts</a></li>
												</ul>
												<ul class="col-md-3">
													<li><a href="images-list.php" title="">The Arts</a></li>
													<li><a href="images-list.php" title="">Backgrounds / Textures</a></li>
													<li><a href="images-list.php" title="">Beauty / Fashion</a></li>
													<li><a href="images-list.php" title="">Animals / Wildlife</a></li>
													<li><a href="images-list.php" title="">The Arts</a></li>
												</ul>
												<ul class="col-md-3">
													<li><a href="images-list.php" title="">The Arts</a></li>
													<li><a href="images-list.php" title="">Backgrounds / Textures</a></li>
													<li><a href="images-list.php" title="">Beauty / Fashion</a></li>
													<li><a href="images-list.php" title="">Animals / Wildlife</a></li>
													<li><a href="images-list.php" title="">The Arts</a></li>
												</ul>
											</div><!-- Images Category -->
										</div>
									</div>
								</div><!-- Main Tabber -->
							</div>
						</div><!-- Welcome Overlay -->
						<div class="site-info-bar">
							<div class="info-box">
								<i class="fa fa-upload"></i>
								<span>Total Images</span>
								<strong>750,789,586</strong>
							</div><!-- Info Box -->
							<div class="info-box">
								<i class="fa fa-user"></i>
								<span>Our Users</span>
								<strong>40,933</strong>
							</div><!-- Info Box -->
							<div class="info-box">
								<i class="fa fa-phone"></i>
								<span>Call Us</span>
								<strong>203-934-944</strong>
							</div><!-- Info Box -->
						</div><!-- Site Info Bar -->
					</div><!-- Main Section -->
				</div>
			</div>
		</div>
	</section>


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


	<section>
		<div class="block remove-gap">
			<div class="row ">
				<div class="col-md-12 column">
					<div class="title center">
						<h2>Top Categories</h2>
						<i>You can select from the key</i>
					</div>

					<div class="options">
						<div class="option-combo">
							<ul id="filter" class="option-set" data-option-key="filter">
								<li><a href="#showall" data-option-value="*" class="selected">Show all</a></li>
								<li><a href="#category1" data-option-value=".category1">Photos</a></li>
								<li><a href="#category2" data-option-value=".category2">Vectors</a></li>
								<li><a href="#category2" data-option-value=".category3">Editorial</a></li>
								<li><a href="#category3" data-option-value=".category4">Illustrations</a></li>
								<li><a href="#category4" data-option-value=".category5">Footage</a></li>
 							</ul>
						</div>
					</div><!-- FILTER BUTTONS -->

					<div class="row narrow">
						<div class="masonary">
							<?php 
									while ($row = mysqli_fetch_assoc($rs)) {
										$image_path = $row['image_path'];
										$img_id = $row['id'];
										$image_name = $row['image_name'];
								?>
							<div class="col-md-3 category1">
								
								<div class="image-box">
									<a class="download" href="single-page.php?image_id=<?php echo $img_id; ?>">
										<img src="<?php echo $image_path; ?>" alt="" />
									</a>
								</div>

							</div>
<?php } ?>
						</div>
							
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
</div>


	<?php include 'footer.php'; ?>


	

	<!-- <div class="wishlist-btn"><a href="wishlist.php" title=""><i class="fa fa-heart"></i></a></div> -->
	

	<script src="js/jquery.min.js" type="text/javascript"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="js/revolution/jquery.themepunch.tools.min.js"></script>   
	<script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>

	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/enscroll-0.5.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrolly.js" type="text/javascript"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/isotope-initialize.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function(){
			jQuery('.tp-banner').show().revolution({
				delay:15000,
				startwidth:1170,
				startheight:540,
				autoHeight:"off",
				navigationType:"none",
				hideThumbs:10,
				fullWidth:"on",
				fullScreen:"on",
				fullScreenOffsetContainer:""
			});	

	});
	</script>

</body>

</html>