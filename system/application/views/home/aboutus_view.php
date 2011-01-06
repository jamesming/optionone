<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<head>
<?php     	$this->load->view('header/header_css.php');  ?>
	<script type="text/javascript" language="Javascript">
		
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
		<img  class='active'  src='<?php echo base_url()    ?>images/About_Us_Banner.jpg'>	
		<img   src='images/mainImage2.jpg'>	
	</div>
</div>




<div   class='container'   style='padding-bottom:60px'  >

			
	<div class='column span-16 subhead_B_div'  >
		
		
		<p>
		<font class='subhead_B'><span   class='font_color_blue'  >About Us</span></font><br><br>
		This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		
		<p>
		<font class='subhead_B'><span   class='font_color_blue'  >Our Team</span></font><br><br>
		This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>	
		
		<p>
		<font class='subhead_B'><span   class='font_color_blue'  >Our Goals</span></font><br><br>
		This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		
		<p>
		<font class='subhead_B'><span   class='font_color_blue'  >Quality Assurance</span></font><br><br>
		This is a simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>		
		
		
	</div>

	
	<div class='column span-8 last subhead_B_div'   style='border:0px solid gray'  >
		
		<img   style='
		float:right;
		width:90%;
		margin:19px 0px;
		
		'  
		src='<?php echo base_url()    ?>images/About_Us_Image_R.jpg'>	
		
		
		<img   style='
		width:100%;
		margin:19px 0px;
		'  
		src='<?php echo base_url()    ?>images/serving.jpg'>			
		
		
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

<?php     
			$this->load->view('footer/optionone_footer.php');
?>


<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 