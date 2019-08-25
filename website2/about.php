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
     <meta property="og:title" content="Dulles Robotics Club">
     <meta property="og:image" content="/img/w.png">
     <meta name="description" content="The Dulles High School Robotics Club. We are a robotics club based out of Dulles High School in Sugar Land, TX. We have FRC team #7494 and FTC teams #12456, and #13822">
     <meta name="keywords" content="Dulles Robotics, Dulles Robotics Club, Dulles High School, Dulles High School Robotics Club, FRC 7494, Circuit Bizurkers, Big Red, 12456, 13822, Robovikings, Robovikes, Circuit Bizurkers #7494, Circuit Beserkers, #7494, #12456, #13822, #13822 Robovikings, #12456 Big Red">

</head>
<body style="">

	<?php
		include 'res/nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('nav-bar-about').setAttribute('class', 'active nav-item');
  </script>

	<!-- Main Page -->
	<div class="container" style="height:100%;">
		<h1 class="display-3">About Us</h1>
		<hr class="style14">
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


            <a href="story.php" class="btn btn-primary">View our Story</a>


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
