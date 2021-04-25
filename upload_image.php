<?php 
require 'connection.php';
if (isset($_POST['submit'])) {

	$image_name = $_POST['image_name'];
	$image_tags = $_POST['image_tags'];

	$file = $_FILES['image'];
	
	$fileName = $_FILES['image']['name'];
	$fileType = $_FILES['image']['type']; 
	$fileTmpName = $_FILES['image']['tmp_name']; 
	$fileError = $_FILES['image']['error'];
	$fileSize = $_FILES['image']['size'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower((end($fileExt)));

	$allowed = array('jpg','jpeg','png');

	if (in_array($fileActualExt, $allowed)) {
		
		if($fileSize < 15000000) {

			// 15000000 = 15mb
			if ($fileSize < 15000000) {

				
				//$fileExt[0] will print the name of the file without extension...
				$fileNameNew = $fileExt[0].".".uniqid('',true).".".$fileActualExt;
				
				$target = "uploads/".$fileNameNew;
				//$target1 = "img/gallery/".$fileNameNew; this will be helpful when the time of fetching the image (SELECT query)

				if (move_uploaded_file($fileTmpName, $target))
				{
					
				$sql = "INSERT INTO seller_uploads (image_name, image_path, image_tags, isact) VALUES ('$image_name', '$target', '$image_tags', 1);";
  			
  			  	$result = mysqli_query($con, $sql) OR die('Error');
  				
  				echo "<script> alert('Image uploaded successfully'); </script>";
  				echo "<script> window.location = 'test_image_upload.php'; </script>";
  				}
  				else 
  				{
  					echo "<script> alert('Failed to upload image!!') </script>";
  				}
			} else {
				echo "<script> alert('Size Limit Exceeds!!') </script>";
			}
		} else {
			echo "<script> alert('There was an error to upload your image!!') </script>";
		}
		
	} else {
		echo "<script> alert('You cant upload this type of file!!') </script>";
	}
}

?>