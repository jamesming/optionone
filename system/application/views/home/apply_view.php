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
<body >
	<div   class='container'    style='
	padding-top:5px;
	padding-bottom:5px;
	'  >
	
	<img  id='corporate_logo' class='cursor_pointer' style='
	border:0px solid red;
	float:left;
	'  
	src='<?php echo base_url(); ?>images/logo.jpg'>
	
	

</div>
<hr>
	<div  class='container ' >
		
		
			<iframe id="iframe_content_for_applicants_form2"     class="autoHeight"    style='
				display:none;
				border:0px solid gray;
				width:100%;
				height:4870px;
				margin: 0; 
				padding: 0; 
				' 
				frameborder="0" src="<?php echo base_url();    ?>index.php/home/applicants_form_in_iframe"  >
				
			    <p>Your browser does not support iframes.</p>
			    
			</iframe>
			
			
			<iframe id="iframe_content_for_applicants_form"     allowtransparency="true" src="http://www.jotform.com/form/10110604832" frameborder="0" style="width:100%; height:4452px; border:none;" >
			</iframe>
			
			
	</div>
</body >

<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 