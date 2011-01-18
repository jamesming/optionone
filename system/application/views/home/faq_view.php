<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	


<?php     	$this->load->view('header/header_css.php');  ?>
	<script type="text/javascript" language="Javascript">
		

			$(document).ready(function() { 

			});
			
			
	</script>
</head>
<body id='faq'>
<?php     
			$this->load->view('header/optionone_header.php');
?>


<!--  
/**
*
* Main Image Div
*
**/

-->

<div class='container'   style='height:300px'   >
	<div id="myGallery">
		<img  class='active'  src='<?php echo base_url()    ?>images/About_Us_Banner.jpg'>	
	</div>
</div>


<!--  
/**
*
* middle panel
*
**/

-->

<div   class='container'   style='padding-bottom:60px'  >

			
	<div class='column span-16' >
		
		
		<span id='faq_main_div'  class=' fancy_zoom_modal_box_for_text_editor_link '  ></span>
		
	</div>
	
	
	
<?php     
			$this->load->view('side/right_side.php');
?>



	
</div>

<?php     
			$this->load->view('footer/optionone_footer.php');
?>
</body >

<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 