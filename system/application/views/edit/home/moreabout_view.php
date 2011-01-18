<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

	<?php     	$this->load->view('header/header_css.php');  ?>
	
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script language="Javascript" type="text/javascript">
		
				$(document).ready(function() { 
					
					//*
					//* Using AJAX to pull the field content from the server
					//*
					
					$.post("<?php echo base_url(). 'index.php/home/get'; ?>",{
						table: '<?php echo $table;    ?>',
						field: '<?php echo $field;    ?>'
						},function(data) {
							$('body').html(data)
						});
				
				});
		
	
	</script>


</head>

<body   style='padding:0px 20px'  >
</body>test
</html>