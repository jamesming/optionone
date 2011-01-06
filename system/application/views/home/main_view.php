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
<style>
	#myGallery img{
		margin:20px 0px 0px 0px;
		float:left;
		width:100%;
    display:none;
    #position:absolute;
    #top:0;
    #left:0;
	}
	#myGallery img.active{
      display:block;
    }
</style>
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
		src='images/straightForward.jpg'>			
	</div>
	
	<div class='column span-8'   style='border:0px solid gray'  >
		<div class='subhead_A_div'>
			<font class='subhead_A font_color_green'    >Qualified, experience, and rigidly screened caregivers.</font>
		</div>
		<img   style='
			float:left;
			width:100%;
			'  
			src='images/qualitfied.jpg'>				
	</div>	
	
	<div class='column span-8 last'   style='border:0px solid gray'  >
		<div class='subhead_A_div'>
			<font class='subhead_A font_color_brick'      >Attentive follow-up process with 24-7 service.</font>
		</div>
		<img   style='
		float:left;
		width:100%;
		'  
		src='images/attentive.jpg'>			
		
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
		This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		
	</div>
	
	<div class='column span-8 subhead_B_div'   style='border:0px solid gray'  >
		<font class='subhead_B'><span   style='color:#0C698A'  >Why</span>&nbsp;<span  style='color:#088537'>OptionOne</span></font><br><br>
		This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	</div>	
	
	<div class='column span-8 last subhead_B_div'   style='border:0px solid gray'  >
		
		<img   style='
		width:100%;
		margin:19px 0px;
		'  
		src='images/serving.jpg'>	
		
		
		<div id='displayCounter' class='rounded_border'  style='
				border:1px solid;
        font-size:42px;
        font-family:Georgia;
        text-align:center;
        padding:15px 0px;
			'  >
		</div>
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


<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 