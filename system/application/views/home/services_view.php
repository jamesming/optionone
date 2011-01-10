<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	


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
<body id='services'>
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
		<img   src='images/mainImage2.jpg'>	
	</div>
</div>



<!--  
/**
*
* middle panel
*
**/

-->

<div   class='container'   style='padding-bottom:60px'  >

			
	<div class='column span-16 '  >
		
		<span id='services_span' href="#large_box" class='large_box_link cursor_pointer '  ></span>
		
	</div>
	
	
	
<?php     
			$this->load->view('side/right_side.php');
?>



	
</div>

<?php     
			$this->load->view('footer/optionone_footer.php');
?>
</body >

<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 