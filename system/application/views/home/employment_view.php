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



<div   class='container'     style='margin-top:30px'   >


			
		<span id='employment_main_div'  class=' fancy_zoom_modal_box_for_text_editor_link '  ></span>
		

	
</div>


<!--  
*
*  FORM
*
-->



<form id='applicants'></form>
<div  class='container ' >
	
	
		<iframe id="iframe_content_for_applicants_form2"     class="autoHeight"    style='
			display:none;
			border:0px solid gray;
			width:100%;
			height:4270px;
			margin: 0; 
			padding: 0; 
			' 
			frameborder="0" src="<?php echo base_url();    ?>index.php/home/applicants_form_in_iframe"  >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>
		
		
		<iframe id="iframe_content_for_applicants_form"     allowtransparency="true" src="http://www.jotform.com/form/10110604832" frameborder="0" style="width:100%; height:4452px; border:none;" >
		</iframe>
		
		
</div>
<?php     
			$this->load->view('footer/optionone_footer.php');
?>

</body >
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 