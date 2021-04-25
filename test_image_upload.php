<?php
session_start();
?>
<!DOCTYPE html>

<head>
	<?php include 'headtag.php'; ?>
		<style type="text/css">
			hr.style14 { 
			  border: 0; 
			  height: 1px; 
			  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
			  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
			  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
			  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
			}

			.btn1 {
			  width: 130px;
			  height: 40px;
			  background: linear-gradient(to bottom, #4eb5e5 0%,#389ed5 100%); /* W3C */
			  border: none;
			  border-radius: 5px;
			  position: relative;
			  border-bottom: 4px solid #2b8bc6;
			  color: #fbfbfb;
			  font-weight: 600;
			  font-family: 'Open Sans', sans-serif;
			  text-shadow: 1px 1px 1px rgba(0,0,0,.4);
			  font-size: 15px;
			  text-align: left;
			  text-indent: 5px;
			  box-shadow: 0px 3px 0px 0px rgba(0,0,0,.2);
			  cursor: pointer;

			/* Just for presentation */  
			  display: block;
			  margin: 0 auto;
			  margin-bottom: 20px;
			}
			.btn1:active {
			  box-shadow: 0px 2px 0px 0px rgba(0,0,0,.2);
			  top: 1px;
			}

			.btn1:after {
			  content: "";
			  width: 0;
			  height: 0;
			  display: block;
			  border-top: 20px solid #187dbc;
			  border-bottom: 20px solid #187dbc;
			  border-left: 16px solid transparent;
			  border-right: 20px solid #187dbc;
			  position: absolute;
			  opacity: 0.6; 
			  right: 0;
			  top: 0;
			  border-radius: 0 5px 5px 0;  
			}

		</style>
		<script src="src/jquery.tagsinput-revisited.js"></script>
		<link rel="stylesheet" href="src/jquery.tagsinput-revisited.css" />

		<script type="text/javascript">
			$(function() {
				$('#formtags1').tagsInput();

				
			});
		</script>
</head>
<body>
<div class="theme-layout">
	
	<?php include 'header.php'; ?>

	<div style="margin-left: 30px; margin-top: 30px; margin-right: 30px;" class="form-group">

	<h2 style="margin-top: 100px;">Seller Image Upload Form</h2>

	<hr class="style14">
	
	<form action="upload_image.php" method="post" enctype="multipart/form-data">
      <input id="input-b2" name="image" type="file" class="form-control" data-show-preview="true" style="height: 54px; padding-top: 15px;"> <br>

      <input type="text" name="image_name" placeholder="Name" class="form-control" style="height: 54px;"> <br>
      <input type="text" name="image_tags" placeholder="Tags" size="50" class="form-control" style="height: 54px;"  > <br>
      <input type="submit" name="submit" style="width: 1291px; padding-left: 12px;padding-right: 12px;height: 46px;border-left-width: 2px;border-right-width: 2px; text-align: center;" class="btn1">
    </form>	
</div>

	<?php include 'footer.php'; ?>


	

	<div class="wishlist-btn"><a href="wishlist.php" title=""><i class="fa fa-heart"></i></a></div>
	

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