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
<body id='aboutus'>
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
		<span id='aboutus_main_div' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  ></span>
		</p>
		<hr>
		
		<style>
		.fancy_zoom_modal_box_for_moreabout_link{
		background:lightyellow;
		font-weight:bold;
		font-size:15px;	
		padding:10px;
		color:blue;
		}	
		</style>
		
		
		<div field='aboutus_person1' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_moreabout_link cursor_pointer '>
			first person of interest
		</div>
		
		<p>
		<span id='aboutus_person1' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  ></span>
		</p>
		
		
		<div field='aboutus_person2' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_moreabout_link cursor_pointer '>
			second person of interest
		</div>		
		
		<p>
		<span id='aboutus_person2' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  ></span>
		</p>
		
		<div field='aboutus_person3' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_moreabout_link cursor_pointer '>
			third person of interest
		</div>		
		
		<p>
		<span id='aboutus_person3' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  ></span>
		</p>
		
		<div field='aboutus_person4' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_moreabout_link cursor_pointer '>
			forth person of interest
		</div>	
		<p>
		<span id='aboutus_person4' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  ></span>
		</p>
		
	</div>
	
	
	
		<div id=''  class='last span-8  '      style='padding-top:30px; vertical-align:top'      >
			
			<div   style='height:9px;background:url(<?php echo base_url()    ?>images/bluebox_top.jpg) no-repeat'  >
			</div>
			<div  id='aboutus_pdf_div' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer' style='padding:5px 5px 5px 15px;background:url(<?php echo base_url()    ?>images/bluebox_center.jpg) repeat-y '>
				
			</div>
			<div   style='height:21px;background:url(<?php echo base_url()    ?>images/bluebox_bottom.jpg) no-repeat'  >
			</div>
		</div>



	
</div>

<?php     
			$this->load->view('edit/footer/optionone_footer.php');
?>



</body >

<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 