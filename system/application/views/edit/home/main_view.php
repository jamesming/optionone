<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
<?php     
			$this->load->view('header/meta_tags.php');
?>
	

	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	
<head>
<?php     	$this->load->view('header/header_css.php');  ?>
	<script type="text/javascript" language="Javascript">
		
	    function swapImages(){
	      var $active = $('#myGallery .active');
	      var $next = ($('#myGallery .active').next().length > 0) ? $('#myGallery .active').next() : $('#myGallery img:first');
	      $active.fadeOut(function(){
	      $active.removeClass('active');
	      $next.fadeIn().addClass('active');
	      });
	    }
	    

			$(document).ready(function() { 
				
				setInterval('swapImages()', 5000);

				
									
			});
			
			 
	</script>
</head>
<body id='main'>
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

<div class='container'      >
	<div id="myGallery">
		<img  class='active'  src='<?php  echo base_url();   ?>images/mainImage.jpg'>	
		<img   src='<?php  echo base_url();   ?>images/mainImage2.jpg'>	
	</div>
</div>




<!--  
/**
*
* Three Image Panel
*
**/

--> 

		
		
<div  class='container'    style='
	height:auto;	
	'  >
			
	<div class='column span-8'     >
		<div id='home_straightforward_head'  href="#fancy_zoom_modal_box_for_text_editor" class=' fancy_zoom_modal_box_for_text_editor_link cursor_pointer'>
			
		</div>
		<img   style='
		float:left;
		width:100%;
		'  
		src='<?php  echo base_url();   ?>images/Home_Image_1.jpg'>			
	</div>
	
	<div class='column span-8'   style='border:0px solid gray'  >
		<div id='home_qualified_head'  href="#fancy_zoom_modal_box_for_text_editor"  class=' fancy_zoom_modal_box_for_text_editor_link cursor_pointer' >
		</div>
		<img   style='
			float:left;
			width:100%;
			'  
			src='<?php  echo base_url();   ?>images/Home_Image_2.jpg'>				
	</div>	
	
	<div class='column span-8 last'   style='border:0px solid gray'  >
		<div id='home_attentive_head'  href="#fancy_zoom_modal_box_for_text_editor" class=' fancy_zoom_modal_box_for_text_editor_link cursor_pointer'>
		</div>
		<img   style='
		float:left;
		width:100%;
		'  
		src='<?php  echo base_url();   ?>images/Home_Image_3.jpg'>			
		
	</div>
	
</div>

<!--  
/**
*
* Three Column Lower Section
*
**/
-->


		
		
<div   class='container'    >
	

			
	<div class='column span-8 subhead_B_div'  >


		<span id='home_ourservice' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  ></span>
		
	</div>
	
	<div class='column span-8 subhead_B_div '   style='border:0px solid gray'  >

		<span id='home_whyoption' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  ></span>
	</div>	
	
	<div class='column span-8 last subhead_B_div'   style='border:0px solid gray'  >
		
		<img   style='
		width:100%;
		margin:19px 0px;
		'  
		src='<?php  echo base_url();   ?>images/Serving_Area.jpg'>	
		
		



		
		
		
		<?php     
					$this->load->view('edit/side/counter_div.php');
		?>
		
		<!--
		<img   style='
		width:100%;
		'  
		src='images/counter.jpg'>		
		-->
		
		
			
	</div>
	
</div>


<!--  
/**
*
* Footer
*
**/

--> 

<?php     
			$this->load->view('edit/footer/optionone_footer.php');
?>

</body>
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 