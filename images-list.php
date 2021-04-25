<!DOCTYPE html>
<?php
// include 'connection.php';
// if (isset($_SESSION['userid'])) {
// $user_id = $_SESSION['userid'];
// $qry_get="SELECT * FROM user_subs_info WHERE user_id =".$user_id;

// $result=mysqli_query($con,$qry_get);

// $var=0;

// while ($rs1 = mysqli_fetch_assoc($result)) {
// 	$var = $rs1['downloads'];
// }
// }


// $qry = "SELECT * FROM seller_uploads;";
// $rs = mysqli_query($con, $qry) OR die('Error');
	

?>
<head>
	<?php include 'headtag.php'; ?>

</head>
<body>
<div class="theme-layout">
	
	<?php include 'header.php'; ?>

	
	<section>
		<div class="block remove-gap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title center"><br><br>
							<h2>Search Results for '<?php if (isset($_POST['search_input'])) {
								echo $_POST['search_input'];
							} ?>'</h2>
						</div>

						<div class="images-list">

							<div class="row scroll" data-ui="jscroll-default">
								<?php
									include "connection.php";
									if (isset($_POST['submit'])) {
										$search_val= $_POST['search_input'];
										//echo $search_val;
										$search_v = htmlspecialchars($search_val);
									         
									        $raw_results = mysqli_query($con,"SELECT * FROM seller_uploads
									            WHERE image_tags LIKE '%".$search_v."%';");
								         
									        if(mysqli_num_rows($raw_results) > 0)
									        {
									             
									            while($results = mysqli_fetch_array($raw_results))
									            {
									            	$img_id = $results['id'];
									            	$img_path = $results['image_path'];

								?>
								<div class="col-md-3">
									<div class="image-download">
										<a class="download" href="single-page.php?image_id=<?php echo $img_id; ?>">
											<img src="<?php echo $img_path; ?>" alt="" />
										</a>
									</div>
								</div>
								<?php } }
								else {
									echo "<h4><strong>Searched Content not Found</strong></h4>";
								}} ?>
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
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/enscroll-0.5.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrolly.js" type="text/javascript"></script>
    <script src="js/rangeslider.min.js"></script>
    <script src="js/rangeslider-script.js"></script>
	<script src="js/jquery.jscroll.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			$('[data-ui="jscroll-default"]').jscroll({
				autoTrigger: false,
				 debug:true
			});
		});
	</script>
</body>
</html>