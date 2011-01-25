<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery.autoheight.js"></script> 
<?php     	$this->load->view('header/header_css.php');  ?>
<?php     
//			$this->load->view('header/form_header.php');
?>
<body id='employment'>
<?php     
			$this->load->view('edit/header/optionone_header.php');
?>



<!--  
/**
*
* Main Image Div
*
**/

-->

<div class='container'    >
	<div id="myGallery">
		<img  class='active'  src='<?php echo base_url()    ?>images/Employment_Banner.jpg'>	
	</div>
</div>



<div   class='container'       >


			
		<span id='employment_main_div' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  >XX</span>
		

	
</div>


<!--  
*
*  FORM
*
-->




<?php     
			$this->load->view('edit/footer/optionone_footer.php');
?>

</body >
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 