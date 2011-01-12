<?php     
			$this->load->view('header/form_header.php');
?>
<body id='contactus'    >
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
<div class='container'   style='height:300px;'   >
	<div id="myGallery">
		<img  class='active'  src='<?php echo base_url()    ?>images/About_Us_Banner.jpg'>	
	</div>
</div>



<div   class='container'     style='margin-top:30px'  >

	<div class='column span-2 '  >
		
		<img src='<?php echo base_url()    ?>images/woman.jpg'>	
		
		
		
	</div>
			
	<div class='column span-14 '  >
			
		<span id='ourteam' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  >This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
		
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



<div   class='container'     >

	<div class='column span-2' >&nbsp;
	</div>
	<div class='column span-20' style='height:50px;'    >
		<p  class=' font_color_blue'   style='
			text-align:center;
			font-weight:bold;
			font-size:24px;
			
			'  >
		Contact Us Now
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
<form name='prospects' id='prospects'>
<div   class='container'     style='padding-bottom:40px'   >

	<div class='column span-2' >&nbsp;
	</div>
	<div class='column span-20'>
		
		
		<table id='form_table'>
			<tr>
				<td>Your Name
				</td>
				<td>
					<input  name="firstname" id="firstname" type_of_field='varchar' constraint='255' class='input_fields form_style smaller' type="" value="">
				</td>
				<td>
					<input  name="lastname" id="lastname" type_of_field='varchar' constraint='255' class='input_fields form_style smaller' type="" value="">
				</td>		
			</tr>
			<tr>
				<td>Your Email
				</td>
				<td colspan=2>
					<input  name="email" id="email" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>	
			</tr>		
			<tr>
				<td>Your Phone Number
				</td>
				<td colspan=2>
					<input  name="phone" id="phone" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>	
			</tr>					
			<tr>
				<td>Message
				</td>
				<td colspan=2>
					<textarea name='message' id='message'  type_of_field='BLOB'   class='input_fields form_style ' >
					</textarea>
				</td>	
			</tr>					
			
			<tr>
				<td colspan=2><input id='submit' name='submit' type='button' value='submit'>
				</td>	
			</tr>					
				
			
		</table>
		
	</div>	

	<div class='column span-2 last'>&nbsp;
	</div>		
	
</div>
</form>

<?php     
			$this->load->view('footer/optionone_footer.php');
?>

</body >
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 