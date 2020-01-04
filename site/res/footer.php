<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
	Modified by Erica Miller, Zain Ahmed, Jacob Enerio, and Elliot Michlin for the Dulles Robotics Club 2019-2020.
-->
	<!-- Empty space for our footer -->

	<!-- Footer -->
	<div id="#appender"></div>
	<footer style="padding-top:20px;padding-bottom:10px;background-color:#0f0e17;">
	<!-- 	<!- - Name and Year (year automatically updates itself)
	  	<div class="footer-copyright text-center py-3 text-light">
	    	Dulles Robotics <?php echo date("Y"); ?>-<?php echo (date("Y")+1) ?><br/>
	  	</div>

			<div class="col">
	  	 <div class="footer-copyright text-muted text-center small">
	  		 This is a student built, operated, and hosted site. Opinions expressed on this site are not necessarily those held by Fort Bend ISD and shall not be attributed to Fort Bend ISD.

				  <div class="text-center" style="padding-bottom:10px;">
					  Special Thanks to our sponsors:
						  <a href="https://wm.com" target="_blank"><img src="/img/sponsor/wm.png" id="#wm" alt="sponsor" width="90" height="40" left=(window.width-width/2)+"px"/></a>
						  <a href="https://nasa.gov" target="_blank"><img src="/img/sponsor/nasa.png"  id="#nasa" alt="sponsor" width="55" height="45" left=(window.width-width/2)+"px"/></a>
				 	 </div>
		   </div>
	    </div>
		</footer>
		<footer class="page-footer font-small bg-dark" id="lite-warn">
			<div class="footer-copyright text-center py-3 text-light">

			<p class="text-center" style=" text-align:center;">	Slow Connection - Lite Mode loaded.</div>

			</div>

OLD FOOTER

-->


<div class="row special-row text-center">
	<div class="col-md-2"></div>
	<div class="col-md-4" style="display:inline;">

		<h1><img src="/img/dr.png" width="50" height="50">Dulles Robotics<h1>
			<p class="lead">550 Dulles Av, Sugar Land, Texas</p>
	</div>
	<div class="col-md-4 bogle">
		<h1>Supported By:<h1>
			<style>
			.bogle img{
				filter:grayscale(100%);
				transition: 0.2s;
			}
			.bogle img:hover{
				filter:grayscale(0%);
			}
			</style>
			<img src="/img/sponsor/wm.png" width="125" height="55">
			<img src="/img/sponsor/nasa.png" width="75" height="55">
	</div>
	<div class="col-md-2"></div>
</div>



	</footer>
	<!--
	<script>
	var wm = document.getElementById("#wm");
	var nasa = document.getElementById("#nasa");
	var slowMsg = document.getElementById("lite-warn");
	if(superSlow){
		var footer = document.getElementById("main-footer");
		footer.parentNode.removeChild(footer);
		slowMsg.style = "display:inline-block;"
		wm.removeChild(wm);
		nasa.removeChild(nasa);
	}
	else if (!superSlow){
		slowMsg.style = "display:none;"
	}
	</script>
	<!- - Footer -->

	<!-- Footer Script -->
<!--
	<script>
	$( document ).ready(function() {
		$("#main-footer").hide();
			if ($(document).height() <= $(window).height()) {
				$("#main-footer").show();
			}
		$("#main-footer").width = $(window).width;
		});

    $(window).scroll(function() {
	if($(window).scrollTop() + $(window).height() > $(document).height() - 10) {
       $("#main-footer").show();
	   //$("#main-footer").show(1000);
		}
	});

</script> -->
	<!-- Footer Script -->
