<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

	<?php     	$this->load->view('header/header_css.php');  ?>

	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.colors.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.styles.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.syntax.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/xhtml.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.full.js" type="text/javascript"></script>

<script language="Javascript" type="text/javascript">
	
			$(document).ready(function() { 
				var mbox = $("#iframe_child_div_text_area").css({
						height:"80%",
						width:"100%"
						}).htmlbox({
				    toolbars:[
					    [
						// Cut, Copy, Paste
						"separator","cut","copy","paste",
						// Undo, Redo
						"separator","undo","redo",
						// Bold, Italic, Underline, Strikethrough, Sup, Sub
						"separator","bold","italic","underline","strike","sup","sub",
						// Left, Right, Center, Justify
						"separator","justify","left","center","right",
						// Ordered List, Unordered List, Indent, Outdent
						"separator","ol","ul","indent","outdent",
						// Hyperlink, Remove Hyperlink, Image
						"separator","link","unlink","image"
						
						],
						[// Show code
						"separator","code",
				        // Formats, Font size, Font family, Font color, Font, Background
				        "separator","formats","fontsize","fontfamily",
						"separator","fontcolor","highlight",
						],
						[
						//Strip tags
						"separator","removeformat","striptags","hr","paragraph",
						// Styles, Source code syntax buttons
						"separator","quote","styles","syntax"
						]
					],
					skin:"blue"
				});
				
				$('#save').click(function(event) {
						
						$.post("<?php echo base_url(). 'index.php/home/update'; ?>",{
							table: '<?php echo $table;    ?>',
							field: '<?php echo $field;    ?>',
							text: mbox.get_html()
							},function(data) {
								
							});
						parent.document.getElementById('<?php echo $field;    ?>').innerHTML = mbox.get_html();
						// parent.close_fancyzoom();
						
				}).css({background:'green'}).text('Saved');	
				
				$.post("<?php echo base_url(). 'index.php/home/get'; ?>",{
					table: '<?php echo $table;    ?>',
					field: '<?php echo $field;    ?>'
					},function(data) {
						mbox.set_text(data);
					});


			});
	

</script>


</head>

<body><br>
<textarea id='iframe_child_div_text_area'></textarea>

<table width=100% > 
	<tr>
		<td  width=100%  style='
			padding:10px 10px 10px 10px;
			vertical-align:middle;
			text-align:center;
			margin:0 auto;
			'  >
			<div id="save"  class='cursor_pointer rounded_border' style='
				height:30px;
				width:75px;
				background:orange;
				margin:10px auto;
				padding-top:10px;
				font-weight:bold;
				color:white;
				font-size:15px;
				'  >Save</div>
		</td>
	</tr>
</table>


</body>
</html>