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
			'  >Americans 65 And Older (<a id='counter_see_calculation_link'  href="#small_box" >See the calculation!</a>)
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
					width:270px;
					height:50px;
					background:url(<?php  echo base_url();   ?>images/counterM.jpg) repeat-x;
					'>&nbsp;
				</div>
				<img    style='float:left'    src='<?php  echo base_url();   ?>images/counterR.jpg'>
		</div>
		
		
		
<div id="small_box">
	<div   style='
			width:700px;
			height:260px;		
		'  >
									<font class="Apple-style-span" size="3"><b><font class="Apple-style-span" color="#8B0000">How we figured it…&nbsp;</font></b><br /></font>
							<div><font class="Apple-style-span" size="3">&nbsp;</font></div>
							<div>
							<ul>
							<li><span class="Apple-style-span" style="font-size: medium; ">Americans 65 or older (According to the most recent U.S. Census)&nbsp;</span></li>
							<li><span class="Apple-style-span" style="font-size: medium; ">39,603,845
							
							American 65 or older by 2030 (According to U.S. Government forecast)&nbsp;</span></li>
							<li><span class="Apple-style-span" style="font-size: medium; ">72,000,000
							
							Increase in the number of Americans 65 or older from 2010 to 2030&nbsp;</span></li>
							<li><span class="Apple-style-span" style="font-size: medium; ">32,396,155
							
							Average annual growth in the number of Americans 65+ over the next 20 years&nbsp;</span></li>
							<li><span class="Apple-style-span" style="font-size: medium; ">1,619,908
							
							Average daily growth of 65+ b/t '10 and '30<span class="Apple-tab-span" style="white-space:pre">	</span><b>4,438</b></span></li>
							<li><span class="Apple-style-span" style="font-size: medium; ">Average hourly growth of 65+ b/t '10 and '30</span><span class="Apple-style-span" style="font-size: medium; "><span class="Apple-tab-span" style="white-space:pre">	</span></span><span class="Apple-style-span" style="font-size: medium; "><b>185</b></span><span class="Apple-style-span" style="font-size: medium; ">&nbsp;</span></li>
							<li><span class="Apple-style-span" style="font-size: medium; ">Average minute-to-minute growth of 65+ b/t '10 and '30<span class="Apple-tab-span" style="white-space:pre">	</span><b>3</b></span></li></ul></div>
	</div>
</div>

<script type="text/javascript" language="Javascript">

	    var cnt = 39603845;
	    
	    function counter(){
                    $('#displayCounter').html(cnt);
                    cnt++;
	    }
	
			$(document).ready(function() { 
				
				setInterval('swapImages()', 5000);
				counter();
				setInterval('counter()', 20000);
				
				$('#counter_see_calculation_link').fancyZoom()		
			});


</script>