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
     <meta property="og:image" content="/img/w.png">
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
	<div class="container">
		<h1 class="display-3">Our Sponsors</h1>
		<hr class="style14">
    <div class="container">
      <!-- Title -->




  <!-- WM Sponsor Block -->
  <div class="container">



  <!-- Logo and Welcome -->
    <div id="logo-and-welcome" class="row well border-0 border-secondary">
       <!-- Logo -->
      <div class="col">
        <img src="/img/sponsor/wm.png" class="img-fluid" alt="wm" width="530" height="900">
       </div>
       <!-- Welcome Message -->
      <div class="col">
        <div class="row">
          <h4 class="display-3">​​Waste Management</h4>
  </div>
          <div class="row">
  <p class="lead text-justify">Our title sponsor, WM, is our biggest supporter and strives to make us the best we could possibly be by providing mentors and financial assistance. This company works very effectively by supporting the young generations and helping our team members get the education needed in the real world. Team 7494 would be nothing without the gracious support of WM.</p>


        </div>
       </div>
     </div>
    <hr/>

</div>
 <!-- WM Sponsor Block Ends -->
<!-- TWC Sponsor Block -->
<div class="container">

  <hr class="style14" />

  <!-- Logo and Welcome -->
  <div id="logo-and-welcome" class="row well border-0 border-secondary">
    <!-- Logo -->
    <div class="col">
      <img src="/img/sponsor/twc.png" class="img-fluid" alt="twc" width="250" height="250">
     </div>
    <!-- Welcome Message -->
    <div class="col">
      <div class="row">
        <h4 class="display-3">Texas Workforce Commission</h4>
</div>
        <div class="row">
<p class="lead text-justify">They are very nice people. We thank them for their support</p>


      </div>
     </div>
   </div>
  <hr/>

</div>
<!-- TWC Sponsor Block Ends -->

<!-- NASA Sponsor Block -->
<div class="container">

  <hr class="style14" />

  <!-- Logo and Welcome -->
  <div id="logo-and-welcome" class="row well border-0 border-secondary">
    <!-- Logo -->
    <div class="col">
      <img src="/img/sponsor/nasa.png" class="img-fluid" alt="twc" width="300" height="300">
     </div>
    <!-- Welcome Message -->
    <div class="col">
      <div class="row">
        <h4 class="display-3">NASA</h4>
</div>
        <div class="row">
<p class="lead text-justify">NASA and their yearly grants have allowed us to continue to pay for registration and participate in FRC. Their continued support through grants is greatly appreciated.</p>


      </div>
     </div>
   </div>
  <hr/>

</div>
<!-- NASA Sponsor Block Ends -->
</div>
</div>
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
