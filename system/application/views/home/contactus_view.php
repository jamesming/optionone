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

<div class='container '  >
		
	<span id='ourteam'  class=' fancy_zoom_modal_box_for_text_editor_link '  ></span>
	
</div>

<div   class='container'     style='margin-top:30px'  >

	<div class='column span-12 '   style='text-align:center'   >
		
		<img src='<?php echo base_url()    ?>images/contactUsFormBig.jpg'>	
		
		
		
	</div>
			

	
	<div class='column span-12 last'   >
	<iframe allowtransparency="true" src="http://www.jotform.com/form/10114419783" frameborder="0" style="width:100%; height:643px; border:none;" scrolling="no">
</iframe>
	</div>
	
</div>





<?php     
			$this->load->view('footer/optionone_footer.php');
?>

</body >
<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 