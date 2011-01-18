<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	


<?php     	$this->load->view('header/header_css.php');  ?>
	<script type="text/javascript" language="Javascript">
		

	    
			$(document).ready(function() {
				$('.fancy_zoom_modal_box_for_moreabout_link')
											.fancyZoom().click(function(event) {
											
												$("#iframe_content_for_moreabout").attr('src','<?php echo base_url();    ?>index.php/home/moreabout/' + $('body').attr('id') + '/' + $(this).attr('field') );
																																																								// represents table name     									represents field name
									
											});			
											
								});	


			});
			
			
	</script>
</head>
<body id='aboutus'>
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

			
	<div class='column span-16 subhead_B_div'  >
		
		
		<p>
		<span id='aboutus_main_div'  class='  fancy_zoom_modal_box_for_text_editor_link '  ></span>
		</p>


		
	</div>
	
	
	
<?php     
			$this->load->view('side/right_side.php');
?>



	
</div>

<?php     
			$this->load->view('footer/optionone_footer.php');
?>




<!--  
/**
*
* Fancyzoom modal box
*
**/
-->

<div id="fancy_zoom_modal_box_for_moreabout"     >
		<iframe id="iframe_content_for_moreabout"   style="
			width:700px;
			height:440px;
			margin: 0; 
			padding: 0; 
			border: 0px solid black;
			" 
			frameborder="0" src=""  >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>
</div>
</body >

<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 