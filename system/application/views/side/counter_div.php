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
		

<div    id='displayCounter' style='
	background:url(<?php  echo base_url();   ?>images/new_counter.jpg) no-repeat;
					color:darkred;
					letter-spacing: 5pt;
					font-weight:bold;
	        font-size:27px;
	        font-family:Georgia;
	        text-align:center;
					float:left;
					width:320px;
					height:60px;
	'  >
</div>
<div   style='
			margin-top:0px;
			margin-bottom:7px;
			text-align:center;
			font-size:13px;
			'  ><a  id='counter_see_calculation_link'   href="#fancy_zoom_modal_box_for_calculation"  class='fancy_zoom_modal_box_for_calculation_link cursor_pointer '  >See how we figured it...</a>

		</div>

<script type="text/javascript" language="Javascript">

			var isEven = function(someNumber){
			    return (someNumber%2 == 0) ? true : false;
			};


			var count = 0;
			
			var epoch =  Math.round(((new Date()).getTime()-Date.UTC(1970,0,1))/10000  );
			
			var realTimeAmericansOver65 =  epoch - 90011406

	    function counter(){
	    	
						var epoch =  Math.round(((new Date()).getTime()-Date.UTC(1970,0,1))/10000  );
						
						var americansOver65 = 39603845;
						
						if( isEven( epoch ) ){
							
								realTimeAmericansOver65 = epoch - 90011406  - (  count  ) ;
								
								count++;
							
						};
						
						$('#displayCounter').html(addCommas(  realTimeAmericansOver65  ));
						
						
	    							
	    }
	
			$(document).ready(function() { 

				counter();
				
				setInterval('counter()', 10000);				
				




				setInterval('swapImages()', 5000);

				$('#counter_see_calculation_link').fancyZoom();
				
				
				$('.fancy_zoom_modal_box_for_calculation_link')
				.fancyZoom().click(function(event) {
				
					$("#iframe_content_for_calculation").attr('src','<?php echo base_url();    ?>index.php/home/moreabout/' +  'content' + '/' + $(this).attr('id') );
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
