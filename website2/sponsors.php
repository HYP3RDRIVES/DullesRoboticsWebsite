<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <title>Sponsors - Dulles Robotics</title>
    <?php
    	include 'res/head.php';
     ?>
     <meta property="og:title" content="Dulles Robotics Club">
     <meta property="og:image" content="/img//w.png">
     <meta name="description" content="The Dulles High School Robotics Club. We are a robotics club based out of Dulles High School in Sugar Land, TX. We have FRC team #7494 and FTC teams #12456, and #13822">
     <meta name="keywords" content="Dulles Robotics, Dulles Robotics Club, Dulles High School, Dulles High School Robotics Club, FRC 7494, Circuit Bizurkers, Big Red, 12456, 13822, Robovikings, Robovikes, Circuit Bizurkers #7494, Circuit Beserkers, #7494, #12456, #13822, #13822 Robovikings, #12456 Big Red">

</head>
<body style="height:100%;">

	<?php
		include 'res/nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-Sponsors').setAttribute('class', 'active dropdown-item');
	</script>

	<!-- Main Page -->
	<div class="container" style="height:100%;">
		<h1 class="display-3">Our Sponsors</h1>
		<hr class="style14">
    <div class="container">
      <!-- Title -->


      <!-- Logo and Welcome -->
      <div id="logo-and-welcome" class="row well border-0 border-secondary">
        <!-- Logo -->
        <div class="col">
          <img src="img/sponsor/wm.png" class="img-fluid" alt="Logo">
         </div>
        <!-- Welcome Message -->
        <div class="col">
          <div class="row">

            <hr14>
            <h1>Waste Management</h1>
            <p class="lead text-justify">Our title sponsor, WM, is our biggest supporter and strives to make us the best we could possibly be by providing industry mentors and financial assistance. This company works very effectively by supporting the young generations and helping our team members get the education needed in the real world. Team 7494 would be nothing without the gracious support of WM.</p>


      <!-- idk why this is here but ill leave it commented if we may need it      <a href="story.php" class="btn btn-primary">View our Story</a> -->


          </div>
          <div class="row">
            <hr14>
            <h1>Texas Workforce Commission</h1>
            <p class="lead text-justify">Write some stuff thanking them here. Put image on left column</p>
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
