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
	
			$(document).ready(function() { 
				setInterval('swapImages()', 5000);
			});
			 
	</script>
</head>

<!--  
/**
*
* Header
*
**/
--> 

<div   class='container'  style='
	padding:15px 0px;
	'  >
	
	<img   style='
	border:0px solid red;
	float:left;
	'  
	src='images/logo.jpg'>
	
	
	
	
	<img   style='
	margin:0px 70px;
	
	'  
	src='images/optionTab.jpg'>
	
	
	
	
	<img   style='
	
	float:right;
	'  
	src='images/free_consultation.jpg'>
</div>

<!--  
/**
*
* Menu
*
**/
--> 

<div   class='container' >
	
		<img   style='
		float:left;
		'  
		src='images/LeftHalfGradCircle.jpg'>

		<div    style='
			color:white;
			float:left;
			width:913px;
			height:44px;
			layer-background-image: url(images/middleMenuFill.jpg);
			background-image: url(images/middleMenuFill.jpg);
			'  >
			
			<style>
			#menu1 {
			  width:908px;
			  padding:7px 0px 0px 0px;
			  margin:0 auto; 
			  list-style-type:none;
			  }
			
			#menu1 li {
			  float:left;
			  width:98px;
			  #border:1px solid #fff; 
			  }
			
			#menu1 a {
			  display:block;
			  width:98px;
			  color:white; 
			  #background:#d4d4d4; 
			  text-align:center; 
			  padding:4px 0; 
			  text-decoration:none; 
			  float:left; 
			  }
			
			#menu1 a:hover {
			  #color:#fff; 
			  background:#08c;
			  }
			</style>
						
			<ul id="menu1">
			<li><a href="#nogo">Home</a></li>
			<li><a href="#nogo">About Us</a></li>
			<li><a href="#nogo">Why Us</a></li>
			<li><a href="#nogo">Our Caregivers</a></li>
			<li><a href="#nogo">Our Team</a></li>
			<li><a href="#nogo">Help for Families</a></li>
			<li><a href="#nogo">Environment</a></li>
			<li><a href="#nogo">FAQs</a></li>
			<li><a href="#nogo">Contact Us</a></li>
			
			
			
			
			
			</ul>

			
		</div>
		
		
		
		<img   style='
		float:left;
		'  
		src='images/RightHalfGradCircle.jpg'>				
		
</div>

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
<div class='container' >
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

		<style>
			.subhead_A_div{
			margin:20px 0px;	
			}
				
			.subhead_A{
				font-family: 'trebuchet MS', sans-serif;
				font-size: 16px;
				font-weight: bold;
				letter-spacing: -0.4pt;
				line-height: 1.2;
			}
			
			.font_color_blue{
			color:#0C698A;	
			}
			.font_color_green{
			color:#088537;
			}
			.font_color_brick{
			color:#901412;	
			}
		</style>
		
		
<div  class='container'    style='
	height:auto;	
	'  >
			
	<div class='column span-8'     >
		<div class='subhead_A_div'>
			<font class='subhead_A font_color_blue'    >Straightforward process, from <!--accessment, to--> care, to billing, to service.</font>
		</div>
		<img   style='
		float:left;
		width:100%;
		'  
		src='images/straightForward.jpg'>			
	</div>
	
	<div class='column span-8'   style='border:0px solid gray'  >
		<div class='subhead_A_div'>
			<font class='subhead_A font_color_green'    >Qualified, experience, rigidly screened caregivers</font>
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

		<style>
			
		.subhead_B_div{
			margin:20px 0px;	
		}
			
		.subhead_B{
			font-family: 'trebuchet MS', sans-serif;
			font-size: 16px;
			font-weight: bold;
			letter-spacing: -0.4pt;
			line-height: 0.6;
		}	
		</style>
		
		
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
		
		
		<img   style='
		width:100%;
		'  
		src='images/counter.jpg'>			
	</div>
	
</div>


<!--  
/**
*
* Footer
*
**/

--> 


<div   class='container rounded_top_right rounded_top_left' style='

padding:20px 20px;
#height:auto;
#width:auto;
color:gray;
background:lightblue;

	
	'  >&#169; 2011 OptionONE Healthcare Management LLC.
</div>


<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 