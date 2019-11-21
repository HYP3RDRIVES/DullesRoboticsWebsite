<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
	Modified by Erica Miller, Zain Ahmed, Jacob Enerio, and Elliot Michlin for the Dulles Robotics Club 2019-2020.
-->
	<!-- Empty space for our footer -->

	<!-- Footer -->
	<footer class="page-footer font-small bg-dark" id = "main-footer">
		<!-- Name and Year (year automatically updates itself) -->
	  	<div class="footer-copyright text-center py-3 text-light">
	    	Dulles Robotics <?php echo date("Y"); ?>-<?php echo (date("Y")+1) ?><br/>
	  	</div>

			<div class="col">
	  	 <div class="footer-copyright text-muted text-center small">
	  		 This is a student built, operated, and hosted site. Opinions expressed on this site are not necessarily those held by Fort Bend ISD and shall not be attributed to Fort Bend ISD.

				  <div class="text-center" style="padding-bottom:10px;">
					  Special Thanks to our sponsors:
						  <a href="https://wm.com" target="_blank"><img src="img/sponsor/wm.png" alt="sponsor" width="90" height="40" left=(window.width-width/2)+"px"/></a>
						  <a href="https://nasa.gov" target="_blank"><img src="img/sponsor/nasa.png" alt="sponsor" width="55" height="45" left=(window.width-width/2)+"px"/></a>
					 	 <a href="https://twc.texas.gov" target="_blank"><img src="img/sponsor/twc.png" alt="sponsor" width="45" height="45" left=(window.width-width/2)+"px"/></a>
				 	 </div>
		   </div>
	    </div>


	</footer>
	<!-- Footer -->

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
