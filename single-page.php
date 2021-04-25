<?php 
include 'connection.php';
if (!isset($_SESSION['userid']))
{
	echo "<script> alert('Login First!'); </script>";
	echo "<script> window.location = 'login/login.php'; </script>";
} ?>
<!DOCTYPE html>
<?php
$img_id = $_GET['image_id'];
$qry = "SELECT * FROM seller_uploads WHERE id = $img_id AND isact = 1";
$sql = mysqli_query($con, $qry);
while ($rs = mysqli_fetch_assoc($sql)) {
	$image_id = $rs['id'];
	$image_name = $rs['image_name'];
	$image_path = $rs['image_path'];
}
?>

<?php

$user_id = $_SESSION['userid'];

$qry_get = "SELECT * FROM user_subs_info WHERE user_id =".$user_id;

$result = mysqli_query($con,$qry_get);

$var=0;

while ($rs1 = mysqli_fetch_assoc($result)) {
	$var = $rs1['downloads'];
}

?>
<head>
	<?php include 'headtag.php'; ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

			    $('.download').on('click',function(){
			    	
			    	$.ajax({
			    		method:'POST',
			    		url:'download.php',
			    		data:{id:<?php echo $user_id; ?>},
			    		success:function(data){
			    			
			    			if(data==0){
			    				alert("Sorry! your downloads are finished!");
			    				$("#ajaxStart").attr("disabled", false);
			    			}else{
			    				alert("Download Successfull.");

			    			}
			    			window.location.href=window.location.href;
			    		},
			    		error:function(data){
			    			alert("Something went wrong!");
			    		}
			    	})
			    });
			});
		</script>		
</head>
<body>
<div class="theme-layout">

	<?php include 'header.php'; ?>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12 column">
						<div class="detail-page">
							<div class="single-img"><img src="<?php echo $image_path; ?>" alt="" /></div>
							<div class="single-img-detail">
								<h2>Stock Photo:</h2>

								<div class="single-page-tabs">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#information">Information</a></li>
									</ul>
									<div class="tab-content">
										<div id="information" class="tab-pane fade active in">
											<span class="img-id">image id: <i><?php echo $image_id; ?></i></span>
											<p>Search for images anywhere using our award-winning iPad®, iPhone®, and Android® apps. Functional enough to use alone, beautiful enough to show off to clients.</p>
										</div>
									</div>
								</div>

								<?php if($var>0) {?>
								<a class="download theme-btn" href="<?php echo $image_path; ?>" download>Download Link</a>
								<?php } else { echo "<div> Please Renew or Purchase any plan first </div>"; }?>
								<!-- <a class="theme-btn call-reg login-popup" href="" title="">Download this Image</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
	<?php include 'footer.php'; ?>


	<script src="js/jquery.min.js" type="text/javascript"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="js/revolution/jquery.themepunch.tools.min.js"></script>   
	<script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>


	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/enscroll-0.5.2.min.js" type="text/javascript"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/jquery.scrolly.js" type="text/javascript"></script>
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