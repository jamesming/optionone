<head>
<?php     	$this->load->view('header/header_css.php');  ?>

</head>
<style>
	table#info{
	width:200px;
	margin-left:100px;	
	}
	table#info td{
	padding:10px 15px 10px 0px;
	text-align:left;
	}
	table#info td:nth-child(odd){
	text-align:right;
	}
</style>
<div>
	
	<table id='info'   style='
		'  >
		<tr>
			<td><img src="http://www.jamesming.com/optionone/images/home.jpg" />
			</td>
			<td>315 Montgomery Street<br>
		San Francisco, CA  94102	
			</td>
		</tr>
		<tr>
			<td><img src="http://www.jamesming.com/optionone/images/print.jpg" />
			</td>
			<td>(415)&nbsp;&nbsp;829-4281
			</td>
		</tr>
		<tr>
			<td><img src="http://www.jamesming.com/optionone/images/tel.jpg" />
			</td>
			<td>(415)&nbsp;&nbsp;829-4279
			</td>
		</tr>
		<tr>
			<td><img  src="http://www.jamesming.com/optionone/images/mail.jpg" />
			</td>
			<td><a href='mailto:info@ihcoption.com'>info@ihcoption.com</a>
			</td>
		</tr>
	</table>

</div>



<script type="text/javascript" language="Javascript">


			var isEven = function(someNumber){
			    return (someNumber%2 == 0) ? true : false;
			};

			var americansOver65 = 39603845;

			$(document).ready(function() { 
				
					var epoch =  Math.round(((new Date()).getTime()-Date.UTC(1970,0,1))/10000  );
					
					if( isEven( epoch ) ){
						
							$('#testme').text(   epoch - 90011406 );
						
					};
					
				
			});
			
			
			
</script>

<div id='testme'   style='border:1px solid gray'  >
</div>


<?php
/* End of file myfile.php */ 
/* Location: ./system/modules/mymodule/myfile.php */ 