
<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->
<!-- Last Project Edit: 31 July 2018 by Adil Rasiyani -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Dulles Robotics</title>
    <description "This is the website for the Dulles Robotics Club, and FRC Team #7494, as well as FTC Teams #13822 and #12456.">
    <meta property="og:title" content="Dulles Robotics Club">
    <meta property="og:image" content="/img/w.png">
    <meta name="description" content="This is the website for the Dulles Robotics Club, and FRC Team #7494, as well as FTC Teams #13822 and #12456. ">
    <meta name="keywords" content="Dulles Robotics, Dulles Robotics Club, Dulles High School, Dulles High School Robotics Club, FRC 7494, Circuit Bizurkers, Big Red, 12456, 13822, Robovikings, Robovikes, Circuit Bizurkers #7494, Circuit Beserkers, #7494, #12456, #13822, #13822 Robovikings, #12456 Big Red">
    <?php
    	include 'res/head.php';
     ?>
</head>

<body style="">
	<!-- Navigation Bar -->
  <nav>
	<?php
		include 'res/nav.php';
	 ?>
 </nav>

	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-home').setAttribute('class', 'active nav-item');
	 </script>

<!-- stuff for the dues noti box. Yes, i am bad at webdev. it looks ugly code. but idk how to do other ways. they are too confusing. but ill learn. -->
</script>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
          e.style.display = 'none';
    }
//-->
</script>



<!-- <div id="notibox">

     <div class="toast__icon">
   <svg version="1.1" class="toast__svg" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
   <g>
   	<g id="info">
   		<g>
   			<path  d="M10,16c1.105,0,2,0.895,2,2v8c0,1.105-0.895,2-2,2H8v4h16v-4h-1.992c-1.102,0-2-0.895-2-2L20,12H8     v4H10z"></path>
   			<circle  cx="16" cy="4" r="4"></circle>
   		</g>
   	</g>
   </g>

       </svg>
     </div>
     <div class="toast__content">
       <p class="toast__type">Due payment closes soon!</p>
       <p class="toast__message">Don't forget to pay dues for the 2019-2020 school year! Press the button below to pay via Revtrak.</p>
      <a class="btn btn-danger" href="https://fortbendisd.revtrak.net/FBISD-Schools-1082/High-School/DHS/dhs-robotics/#/list" target="_blank" onclick="toggle_visibility('notibox');">Pay Dues</a>
     </div>
     <div class="toast__close">
       <a onclick="toggle_visibility('notibox');" >
       <svg version="1.1" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 15.642 15.642" xmlns:xlink="https://www.w3.org/1999/xlink" enable-background="new 0 0 15.642 15.642">
     <path fill-rule="evenodd" d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z"></path>
   </svg>
 </a>
     </div>
   </div>

</div> -->


<!-- stuff for notibox ends -->
<main>
    <!-- Main Page -->
	<div class="container">
		<!-- Title -->
            <div class="row justify-content-center">
                <p class="display-3">Dulles Robotics</p> <br>
         </div>
		<hr class="style14" />

		<!-- Logo and Welcome -->
		<div id="logo-and-welcome" class="row well border-0 border-secondary">
			<!-- Logo -->
			<div class="col">
				<img src="img/w.png" width="480px" class="img-fluid" alt="Logo">
			 </div>
			<!-- Welcome Message -->
			<div class="col">
				<div class="row">
					<h4 class="display-3">Welcome!</h4>
					<hr>
					<p class="lead text-justify">We are a robotics club based out of Dulles HS in Sugar Land, TX. We have two FTC teams as well as one FRC Team.</p>
					<a href="about.php" class="btn btn-primary">About Us</a>

				</div>
			 </div>
		 </div>
		<hr/>

		<!-- Slide Show and Mission -->
		<div id="slides-and-mission" class="row">
			<!-- Slide Show -->
			<div class="col">
                <div class="slides">
            <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQc5bzPiqXskOKwXqDc_P5Rcpp2_pvFrOptn8Ds6UvrybJMgZYmVPAVdKU7W3zLxureySLAlzICS4wq/embed?start=true&loop=true&delayms=3000&rm=minimal&loop=true&autoStart=true" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
            </div></div>
			<!-- Mission Statement -->
			<div class="col">
				<div class="row">
					<h1 class="display-4">Our Mission</h1>
					<p class="lead text-justify">Our Mission is to foster an interest in STEM to allow out students to become the leaders and problem solvers of tomorrow.</p>
				</div>
			 </div>
		 </div>
		<hr class="style14">

		<!-- Info -->
		<div id="stay-in-touch-container">
			<div id="stay-in-touch-title" class="row justify-content-center">
				<h1 class="display-4 text-uppercase">Stay In Touch</h1>
			 </div>
	<div class="row justify-content-center" style="margin-bottom: 2%; margin-top: 2%;">
			<div id="stay-in-touch-text" class="row">
				<p class="lead" style="padding-left: 0.5rem;">
					View our current club <a href="officers.php" class="badge badge-dark">officers</a>. <button class="btn badge badge-info text-light" id="remind-link" data-toggle="tooltip" data-placement="top" title="Text @776d6f to 81010">Remind code</button>, newsletter signup and more contact info is provided <a href="contact.php" class="badge badge-dark">here</a>.
        </p>
			</div>
 		</div>
  </div>
 		<hr>

 		<div class="row justify-content-center" style="margin-bottom: 2%; margin-top: 2%;">
 			<p class="lead small" style="margin: 0 0;">If you have any questions or comments about the Dulles Robotics Club, contact us at our <a class="badge badge-dark text-light" id="remind-link" href="mailto:dullesrobotics@gmail.com" data-toggle="tooltip" data-placement="top" title="E-Mail us at dullesrobotics@gmail.com">E-Mail</a>‏‏‎ </p>
			<p class="small lead">     Any question or comments can also be addressed directly to any of the officers.﻿﻿</p>
 		</div>
	</div>
</main>

	<!-- Footer -->
<footer>
	<?php include 'res/footer.php'; ?>
<?php include 'res/cdn.php'; ?>
<!-- Scripts -->
  <!-- activate tooltips -->
  <script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
</footer>

</body>

</html>
