<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	<?php  
			$this->load->view('header/header_css.php');
	//	$this->load->view('header/header_facebook.php'); 
	?>
	<script type="text/javascript" language="Javascript">
	
			$(document).ready(function() { 
	
					setInterval(function() {
					
					 $('#insideDiv').load('<?php echo  base_url();   ?>index.php/home/index_inside');
	
				  }, 1000);
				
			});
			 
	</script>

</head>

<body>


	
	
	<div class='container'  id='insideDiv'   style='height:800px;border:0px solid gray'  >
	</div>


</body>
</html>