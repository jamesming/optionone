<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
	    
	    var cnt = 4352345450;
	    
	    function counter(){
	    	
//	    	        if (cnt < 20) {
                    $('#displayCounter').html(cnt);
                    cnt++;
//                }
//                else {
//                    clearInterval(counter);
//                    $('#displayCounter').html("Timeout!!");
//                }
	    	
	    }
	
			$(document).ready(function() { 
				
				setInterval('swapImages()', 5000);
				setInterval('counter()', 1000);
				
									
			});
			
			 
	</script>
</head>
<body id='main'>
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
		<img  class='active'  src='images/mainImage.jpg'>	
		<img   src='images/mainImage2.jpg'>	
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
		<div class='subhead_A_div'>
			<font class='subhead_A font_color_blue'    >Straightforward process, from assessment to care...billing to service.</font>
		</div>
		<img   style='
		float:left;
		width:100%;
		'  
		src='images/Home_Image_1.jpg'>			
	</div>
	
	<div class='column span-8'   style='border:0px solid gray'  >
		<div class='subhead_A_div'>
			<font class='subhead_A font_color_green'    >Qualified, experience, and rigidly screened caregivers.</font>
		</div>
		<img   style='
			float:left;
			width:100%;
			'  
			src='images/Home_Image_2.jpg'>				
	</div>	
	
	<div class='column span-8 last'   style='border:0px solid gray'  >
		<div class='subhead_A_div'>
			<font class='subhead_A font_color_brick'      >Attentive follow-up process with 24-7 service.</font>
		</div>
		<img   style='
		float:left;
		width:100%;
		'  
		src='images/Home_Image_3.jpg'>			
		
	</div>
	
</div>

<!--  
/**
*
* Three Column Lower Section
*
**/
-->


		
		
<div   class='container'   style='padding-bottom:60px'  >
	

			
	<div class='column span-8 subhead_B_div'  >

		<font class='subhead_B'><span   class='font_color_blue'  >Our</span>&nbsp;<span class='font_color_green'>Services</span></font><br><br>
		<span id='ourservice' href="#large_box" class='large_box_link cursor_pointer '  >Cras non vulputate elit. Duis ultricies neque a mauris sollicitudin ut blandit enim aliquet. Sed eget laoreet nibh. Fusce euismod sapien id sem volutpat vel iaculis orci blandit. Donec quis feugiat mauris. Sed a cursus felis. Phasellus rhoncus leo id mi convallis ultrices. Vivamus arcu dolor, porttitor at laoreet ut, condimentum quis libero. Curabitur lectus nisl, luctus nec consequat et, auctor non diam. Sed et adipiscing metus. Sed in mauris mattis felis volutpat convallis pulvinar ac mauris. Vivamus enim turpis, bibendum nec consequat quis, sodales vel diam. Nam accumsan pretium tellus, et rhoncus libero tristique sit amet. Maecenas sollicitudin velit sem. Ut arcu augue, pellentesque vitae venenatis et, convallis scelerisque diam. In commodo malesuada libero, id suscipit urna congue non. Sed quis sem ut dui vulputate auctor. Aenean porttitor magna quis tortor scelerisque sed hendrerit massa eleifend. Cras turpis lectus, molestie in dignissim id, tincidunt eu metus. Duis libero tellus, eleifend id tempus at, blandit pulvinar augue.</span>
		
	</div>
	
	<div class='column span-8 subhead_B_div '   style='border:0px solid gray'  >
		<font class='subhead_B'><span   style='color:#0C698A'  >Why</span>&nbsp;<span  style='color:#088537'>OptionOne</span></font><br><br>
		<span id='whyoption' href="#large_box" class='large_box_link cursor_pointer '  >Nunc sit amet feugiat arcu. Morbi dictum mollis pharetra. Suspendisse sollicitudin lorem at est dignissim tempus. Nullam eget massa id velit vestibulum vulputate sed non mi. Curabitur cursus blandit augue at imperdiet. Maecenas ac dolor dolor, eget rhoncus augue. Ut ante risus, faucibus nec sagittis ac, consequat a elit. Aenean porta imperdiet neque, eu porta nulla iaculis a. Vestibulum id ante tellus, ac suscipit massa. Etiam sit amet ligula ut quam porttitor gravida id eu arcu. Nunc ligula erat, rutrum ac sagittis sit amet, commodo quis purus. Cras a est sit amet diam venenatis tempor. Mauris tempus, ante id sagittis facilisis, tortor libero fermentum orci, nec tincidunt metus orci in mauris.</span>
	</div>	
	
	<div class='column span-8 last subhead_B_div'   style='border:0px solid gray'  >
		
		<img   style='
		width:100%;
		margin:19px 0px;
		'  
		src='images/Serving_Area.jpg'>	
		
		

		
		<?php     
					$this->load->view('side/counter_div.php');
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
			$this->load->view('footer/optionone_footer.php');
?>

</body>
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 