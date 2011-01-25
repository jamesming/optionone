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
			$this->load->view('header/optionone_header.php');
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
		<img  class='active'  src='<?php echo base_url()    ?>images/Contact_Banner.jpg'>	
	</div>
</div>

<div class='container '  >
		
	<span id='contactus_ourteam'  class=' fancy_zoom_modal_box_for_text_editor_link '  ></span>
	
</div>

<div   class='container'     style='margin-top:30px'  >

	<div class='column span-12 '   style='text-align:center'   >
				<span id='contact_us_info' class='fancy_zoom_modal_box_for_text_editor_link  '  >
		</span>
	</div>
	
	<div class='column span-12 last'   >
		<iframe allowtransparency="true" src="http://www.jotform.com/form/10114419783" frameborder="0" style="width:100%; height:643px; border:none;" scrolling="no">
		</iframe>
	</div>
	
</div>


<?php     
			$this->load->view('footer/optionone_footer.php');
?>

</body >
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 