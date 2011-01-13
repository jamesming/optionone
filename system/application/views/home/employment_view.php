
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



<form id='applicants'></form>
<div  class='container ' >
		<iframe id="iframe_content_for_applicants_form"     style='
			display:none;
			border:0px solid gray;
			width:100%;
			height:4270px;
			margin: 0; 
			padding: 0; 
			' 
			frameborder="0" src="<?php echo base_url();    ?>index.php/home/applicants_form_in_iframe"  >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>
		
		
<iframe allowtransparency="true" src="http://www.jotform.com/form/10110604832" frameborder="0" style="width:100%; height:4152px; border:none;" scrolling="no">
</iframe>
		
		
</div>
<?php     
			$this->load->view('footer/optionone_footer.php');
?>

</body >
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 