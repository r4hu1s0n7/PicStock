<!DOCTYPE html>
<?php 
include 'connection.php';

////$qry = "UPDATE user_subs_info SET downloads = 19  WHERE id = 1;";

?>
<html>
<head>
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

		    $('#download').on('click',function(){
		    	
		    	$.ajax({
		    		method:'POST',
		    		url:'download.php',
		    		data:{id:1},
		    		success:function(data){
		    			
		    			if(data==0){
		    				alert("Sorry !your download get over");
		    			}else{
		    				alert("Download Successfull.");

		    			}
		    			window.location.href=window.location.href;
		    		},
		    		error:function(data){
		    			alert("Something wents wrong");
		    		}
		    	})
		    });
		});
	</script>
</head>
<body>
	<form action="" method="POST">
		
		
	</form>
</body>
</html>