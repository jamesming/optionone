<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery.autoheight.js"></script> 
<?php     	$this->load->view('header/header_css.php');  ?>
<?php     
//			$this->load->view('header/form_header.php');
?>
<body id='contactus'    >
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
<div class='container'   >
	<div id="myGallery">
		<img  class='active'  src='<?php echo base_url()    ?>images/Contact_Banner.jpg'>	
	</div>
</div>

<div class='container '  >
		
	<span id='contactus_ourteam' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  >This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
	
</div>

<div   class='container'     style='margin-top:30px'  >

	<div class='column span-12 '   style='text-align:center'   >
		<span id='contact_us_info' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  >
		</span>
	</div>
			

	
	<div class='column span-12 last'   >
	<iframe allowtransparency="true" src="http://www.jotform.com/form/10114419783" frameborder="0" style="width:100%; height:643px; border:none;" scrolling="no">
	</iframe>
	</div>
	
</div>

<div   class='container'     >
		<img src='<?php echo base_url()    ?>images/contactUsFormBig.jpg'>	
</div>



<?php     
			$this->load->view('edit/footer/optionone_footer.php');
?>

</body >
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 