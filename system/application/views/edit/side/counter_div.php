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

	    var cnt = 39603845;
	    
	    function counter(){
                    $('#displayCounter').html(addCommas(cnt));
                    cnt++;
	    }
	
			$(document).ready(function() { 
				
				setInterval('swapImages()', 5000);
				counter();
				setInterval('counter()', 20000);
				
				$('#counter_see_calculation_link').fancyZoom()		
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
