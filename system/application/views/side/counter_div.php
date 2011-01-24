<!--

		<div id='displayCounter' class='rounded_border'  style='
				border:1px solid;
        font-size:42px;
        font-family:Georgia;
        text-align:center;
        padding:15px 0px;
			'  >display counter
		</div>
		
		-->
		
		<div   style='
			margin-top:20px;
			margin-bottom:7px;
			text-align:center;
			font-weight:bold;
			font-size:20px;
			color:darkred;
			letter-spacing: 2pt;
			'  >Americans 65 and Older
		</div>
		<div    >
				<img    style='float:left'    src='<?php  echo base_url();   ?>images/counterL.jpg'>
				<div  id='displayCounter'   style='
					
					color:darkred;
					letter-spacing: 5pt;
					font-weight:bold;
	        font-size:27px;
	        font-family:Georgia;
	        text-align:center;
	        #padding:15px 0px;
					float:left;
					width:260px;
					height:50px;
					background:url(<?php  echo base_url();   ?>images/counterM.jpg) repeat-x;
					'>&nbsp;
				</div>
				<img    style='float:left'    src='<?php  echo base_url();   ?>images/counterR.jpg'>
		</div>
		<div   style='
			margin-top:70px;
			margin-bottom:7px;
			text-align:center;
			font-size:13px;
			'  ><a  id='counter_see_calculation_link'   href="#fancy_zoom_modal_box_for_calculation"  class='fancy_zoom_modal_box_for_calculation_link cursor_pointer '  >See how we figured it...</a>

		</div>
		
		
		
<script type="text/javascript" language="Javascript">

	    var cnt = 39603845;
	    
	    function counter(){
                    $('#displayCounter').html(addCommas(cnt));
                    cnt++;
	    }
	
			$(document).ready(function() { 
				
				setInterval('swapImages()', 5000);
				counter();
				setInterval('counter()', 20000);
				
				$('#counter_see_calculation_link').fancyZoom();
				
				
				$('.fancy_zoom_modal_box_for_calculation_link')
				.fancyZoom().click(function(event) {
					//alert('');
				
					//$("#iframe_content_for_calculation").attr('src','<?php echo base_url();    ?>index.php/home/moreabout/' +  'content' + '/' + $(this).attr('id') );
																																																	// represents table name     									represents field name
		
				});		
	
	
				
			});
			
			function addCommas(nStr) {
			    nStr += '';
			    x = nStr.split('.');
			    x1 = x[0];
			    x2 = x.length > 1 ? '.' + x[1] : '';
			    var rgx = /(\d+)(\d{3})/;
			    while (rgx.test(x1)) {
			        x1 = x1.replace(rgx, '$1' + ',' + '$2');
			    }
			    return x1 + x2;
			}


</script>


<div id="fancy_zoom_modal_box_for_calculation"     >
		<iframe id="iframe_content_for_calculation"   style="
			width:700px;
			height:440px;
			margin: 0; 
			padding: 0; 
			border: 0px solid black;
			" 
			frameborder="0" src=""  >
			
		    
		    
		</iframe>
</div>
