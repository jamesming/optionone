<?php     
			$this->load->view('header/form_header.php');
?>
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
		<img  class='active'  src='<?php echo base_url()    ?>images/About_Us_Banner.jpg'>	
	</div>
</div>



<div   class='container'     style='margin-top:30px'   >

	<div class='column span-2 '  >
		
		<img src='<?php echo base_url()    ?>images/woman.jpg'>	
		
		
		
	</div>
			
	<div class='column span-14 '  >
			
		<span id='employment_span' href="#fancy_zoom_modal_box_for_text_editor" class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  >This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
		
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
		Apply to work for us
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

<form name='applicants' id='applicants'>
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
				<td>Your Address
				</td>
				<td colspan=2>
					<input  name="address" id="address" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>	
			</tr>		
			
			<tr>
				<td>
				</td>
				<td>
					<input  name="city" id="city" type_of_field='varchar' constraint='255' class='input_fields form_style smaller' type="" value="">
				</td>
				<td>
					<input  name="state" id="state" type_of_field='varchar' constraint='255' class='input_fields form_style smaller' type="" value="">
				</td>		
			</tr>
			
			<tr>
				<td>Birthdate
				</td>
				<td colspan=2>
					<input  name="birthdate" id="birthdate" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>	
			</tr>	
			
			<tr>
				<td>Gender
				</td>
				<td colspan=2>
					<input  name="gender" id="gender" type_of_field='varchar' constraint='1' class='input_fields form_style' type="" value="">
				</td>	
			</tr>	
			
			<tr>
				<td>What languages do you speak?
				</td>
				<td colspan=2>
					<textarea name='languages' id='languages'  type_of_field='BLOB'   class='input_fields form_style ' >
					</textarea>
				</td>	
			</tr>				
			<tr>
				<td>Emergency Contact
				</td>
				<td colspan=2>
					<input  name="emergency_contact" id="emergency_contact" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>	
			</tr>		
			
			<tr>
				<td>Education
				</td>
				<td colspan=2>
					<input  name="diploma" id="diploma" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>	
			</tr>			
			
			<tr>
				<td>Certification
				</td>
				<td colspan=2>
					<input  name="certification" id="certification" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>	
			</tr>			
			
			<tr>
				<td>Degree
				</td>
				<td colspan=2>
					<input  name="degree" id="degree" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>	
			</tr>	
			
			
			<tr>
				<td>Other
				</td>
				<td colspan=2>
					<input  name="other" id="other" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>	
			</tr>				
			
			
			<tr>
				<td>Do you have current First Aid Certification (State Level)
				</td>
				<td >
					<input  name="firstaid" id="firstaid" type_of_field='INT' constraint='1' class='input_fields form_style' type="" value="">
				</td>	
				<td >
					<input  name="expiration_date_first_aid" id="expiration_date_first_aid" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>					
			</tr>	
			
									
			<tr>
				<td>Do you have current CPR?
				</td>
				<td >
					<input  name="cpr" id="cpr" type_of_field='INT' constraint='1' class='input_fields form_style' type="" value="">
				</td>	
				<td >
					<input  name="expiration_date_cpr" id="expiration_date_cpr" type_of_field='varchar' constraint='255' class='input_fields form_style' type="" value="">
				</td>					
			</tr>	
			
			<tr>
				<td>Have you taken a Food Safety course?
				</td>
				<td colspan=2>
					<input  name="food_safety" id="food_safety" type_of_field='INT' constraint='1' class='input_fields form_style' type="" value="">
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