<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <title>About - Dulles Robotics</title>
    <?php
    	include 'res/head.php';
     ?>
</head>
<body style="height:100%;">

	<?php
		include 'res/nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-about').setAttribute('class', 'active dropdown-item');
	</script>

	<!-- Main Page -->
	<div class="container" style="height:100%;">
		<h1 class="display-3">About Us</h1>
		<hr class="style14">
    <div class="container">
      <!-- Title -->


      <!-- Logo and Welcome -->
      <div id="logo-and-welcome" class="row well border-0 border-secondary">
        <!-- Logo -->
        <div class="col">
          <img src="img/w.png" class="img-fluid" alt="Logo">
         </div>
        <!-- Welcome Message -->
        <div class="col">
          <div class="row">

            <hr>
            <p class="lead text-justify">We are a robotics club based out of Dulles HS in Sugar Land, TX. Our FTC teams are #12456 - Big Red and #13822 - Robovikings. Our FRC team is #7494 - Circuit Bizurkers.
            We also participate in community outreach events and workshops.</p>


          </div>
         </div>
       </div>
      <hr/>

	</div>

	<!-- Footer -->
	<?php
		include 'res/footer.php';
	 ?>

	<!-- Scripts -->
	<!-- Bootstrap CDN -->
	<?php include 'res/cdn.php';
	 ?>
</body>
</html>
