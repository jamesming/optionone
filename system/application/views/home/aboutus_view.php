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

<div class='container'  >
	<div id="myGallery">
		<img  class='active'  src='<?php echo base_url()    ?>images/About_Banner.jpg'>	
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
	
	
	
		<div id=''  class='last span-8  '      style='padding-top:30px; vertical-align:top'      >
			
			<div   style='height:9px;background:url(<?php echo base_url()    ?>images/bluebox_top.jpg) no-repeat'  >
			</div>
			<div  id='aboutus_pdf_div' class='fancy_zoom_modal_box_for_text_editor_link ' style='padding:5px 5px 5px 15px;background:url(<?php echo base_url()    ?>images/bluebox_center.jpg) repeat-y '>
				
			</div>
			<div   style='height:21px;background:url(<?php echo base_url()    ?>images/bluebox_bottom.jpg) no-repeat'  >
			</div>
		</div>



	
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