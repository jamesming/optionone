<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<head>
<?php     	$this->load->view('header/header_css.php');  ?>
	<script type="text/javascript" language="Javascript">
		
			$(document).ready(function() {
			 
			});
			 
	</script>
</head>
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
		<img  class='active'  src='<?php echo base_url()    ?>images/Contact_Us_Banner.jpg'>	
		<img   src='images/mainImage2.jpg'>	
	</div>
</div>




<div   class='container'   style='padding-bottom:10px'  >

	<div class='column span-2 subhead_B_div'  >
		
		<img src='<?php echo base_url()    ?>images/woman.jpg'>	
		
		
		
	</div>
			
	<div class='column span-14 subhead_B_div'  >
			
		<p>
		<font class='subhead_B'><span   class='font_color_blue'  >Employment</span></font><br><br>
		<span id='employment_span' href="#large_box" class='large_box_link cursor_pointer '  >This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
		</p>
		
		
	</div>

	
	<div class='column span-8 last'   >
		
		<img   style='
		float:right;
		width:90%;
		margin:19px 0px;
		
		'  
		src='<?php echo base_url()    ?>images/address.jpg'>	
		
	
			
	</div>
	
</div>


<!--  
*
*  FORM
*
-->



<div   class='container'     >

	<div class='column span-2' >&nbsp;
	</div>
	<div class='column span-20' style='height:50px;'    >
		<p  class=' font_color_blue'   style='
			text-align:center;
			font-weight:bold;
			font-size:24px;
			
			'  >
		Come Work For Us
		</p>
	</div>	
	<div class='column span-2 last'>&nbsp;
	</div>		
	
</div>
<style>
#form_table td{
height:40px;
}
.form_style{
	border:1px solid gray;
#	font-size:27px;
	width:294px;
	height:25px;
	padding-left:10px;
	border-top-left-radius: 6px;
	border-top-right-radius: 6px;
	-moz-border-radius-topleft: 6px;
	-moz-border-radius-topright: 6px;
	-webkit-border-top-right-radius: 6px;
	-webkit-border-top-left-radius: 6px;
	border-bottom-left-radius: 6px;
	border-bottom-right-radius: 6px;
	-moz-border-radius-bottomleft: 6px;
	-moz-border-radius-bottomright: 6px;
	-webkit-border-bottom-right-radius: 6px;
	-webkit-border-bottom-left-radius: 6px;
}
</style>

<div   class='container'     style='padding-bottom:40px'   >

	<div class='column span-2' >&nbsp;
	</div>
	<div class='column span-20'>
		
		
		<table id='form_table'>
			<tr>
				<td>Your Name
				</td>
				<td>
					<input class='form_style smaller' name="" id="" type="" value="">
				</td>
				<td>
					<input class='form_style smaller' name="" id="" type="" value="">
				</td>		
			</tr>
			<tr>
				<td>Your Email
				</td>
				<td colspan=2>
					<input class='form_style' name="" id="" type="" value="">
				</td>	
			</tr>		
			<tr>
				<td>Your Phone Number
				</td>
				<td colspan=2>
					<input class='form_style' name="" id="" type="" value="">
				</td>	
			</tr>					
			<tr>
				<td>Message
				</td>
				<td colspan=2>
					<textarea  class='form_style ' >
					</textarea>
				</td>	
			</tr>					
			
			
				
			
		</table>
		
	</div>	

	<div class='column span-2 last'>&nbsp;
	</div>		
	
</div>


<?php     
			$this->load->view('footer/optionone_footer.php');
?>

</body >
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 