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
			margin-top:70px;
			margin-bottom:7px;
			text-align:center;
			font-size:13px;
			'  >
			<a    style='display:none'  id='counter_see_calculation_link'  href="#small_box" >See how we figured it...</a>

		</div>
		
		
		
		
<a  id='counter_see_calculation_link'   href="#fancy_zoom_modal_box_for_text_editor"   class='fancy_zoom_modal_box_for_text_editor_link cursor_pointer '  ></a>
		
		
<div id="small_box">
	<div   style='
			width:700px;
			height:260px;		
		'  >
		<p><font class="Apple-style-span" color="#8B0000" size="5" face="arial">Calculations…&nbsp;</font></p>
		<p><font class="Apple-style-span" face="georgia" size="2">Figures and estimates are from the U.S. Government Census or U.S. Government Forecasts&nbsp;<br /></font></p>
		<ol type="1">
			<li><font face="georgia" size="2">Start with the latest available&nbsp;<b>number of Americans 65 and older</b>&nbsp;<b>39,603,845</b></font></li>
			<li><font face="georgia" size="2">Subtract this number from the&nbsp;<b>forecasted number of Americans 65 or older by 2030</b>&nbsp;<b>72,000,000</b></font></li>
			<li><font face="georgia" size="2">The result is the&nbsp;<b>growth in number of Americans 65+ from 2010 to 2030</b>&nbsp;<b>32,396,155</b></font></li>
			<li><font face="georgia" size="2">Divide growth number by number years being considered (20) to determine the&nbsp;<b>average annual growth</b>&nbsp;<b>1,619,908</b></font></li>
			<li><font face="georgia" size="2">Divide the average annual growth by 365 to determine&nbsp;<b>average daily growth</b>&nbsp;<b>4,438</b></font></li>
			<li><font face="georgia" size="2">Divide average daily growth by 24 to determine the&nbsp;<b>average hourly growth</b>&nbsp;<b>185</b></font></li>
			<li><font face="georgia" size="2">Divide the average hourly growth by 60 to determine the&nbsp;<b>average growth per minute</b>&nbsp;<b>3</b></font></li>
		</ol>
	</div>
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
