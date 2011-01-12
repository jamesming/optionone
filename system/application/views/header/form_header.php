<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<head>
<?php     	$this->load->view('header/header_css.php');  ?>
	<script type="text/javascript" language="Javascript">
		
			$(document).ready(function() {
				
				$('.input_fields').each(
				
						function( i ){
			 
								$.post("<?php echo base_url(). 'index.php/home/create_table_for_form'; ?>",{
									table: $('form').attr('id'),
									field: $(this).attr('id'),
									type_of_field: $(this).attr('type_of_field'),
									constraint: $(this).attr('constraint')
									},function(data) {
												
									});
									
									$(this).val($(this).attr('id'))
						}
				);	
				
				
				
				$('#submit').click(function(event) {
					
								$.post("<?php echo base_url(). 'index.php/home/insert_into_table_for_form'; ?>",{
									fields: $('form').serialize(),
									table: $('form').attr('id')
									},function(data) {
												alert('submitted');
									});

				});	
				
				
			 
			});
			 
	</script>
</head>