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
<body>

	<?php
		include 'res/nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('nav-bar-sponsor').setAttribute('class', 'active nav-item');
  </script>
	<!-- Main Page -->


		<hr class="style14">
    <div class="container" style="display: table; vertical-align:center; align-content:center; display:table; ">
      <div class="col-md-12">
        <h3 class="display-3" style="text-align:center;">Sponsors</h3>
      </div>
      <hr class="style1" />
      <!-- Title -->
<div class="row special-row block">
    <!-- <div class="col-md-2 bot-sub"></div> -->
  <div class="col-md-6" style=" height:300px; width:100%;">
    <img src="/img/sponsor/wm.png" class="img-fluid img-center"  alt="wm" style="padding:30px;  align-self: right;">
  </div>
  <div class="col-md-6" >
     <div class="row">
       <h4 class="display-3" style="text-align:left; font-size:85px;">​​Waste Management</h4>
     </div>
     <div class="row">
<p class="lead text-justify">Our title sponsor, WM, is our biggest supporter and strives to make us the best we could possibly be by providing mentors and financial assistance. This company works very effectively by supporting the young generations and helping our team members get the education needed in the real world. With the gracious support of WM, Team 7494 has been and will be able to reach new heights and continue to succeed.</p>
     </div>
   </div>
    <!-- <div class="col-md-2 bot-sub"></div> -->
</div>

<hr class="style1" />

<div class="row special-row block">

  <div class="col-md-6 text-center" style="align-content:center;">
    <img src="/img/sponsor/twc.png" class="img-fluid img-center" alt="twc"  style="padding:20px; align-self:center;  width:65%">
   </div>
     <div class="col-md-6">
       <div class="row">
         <h4 class="display-3" style="text-align:left; font-size:60px">Texas Workforce Commission</h4>
 </div>
         <div class="row">
 <p class="lead text-justify">They are very nice people. We thank them for their support.</p>
</div>
</div>

</div>

<hr class="style1" />

<div class="row special-row block">

  <div class="col-md-6 text-center">
    <img src="/img/sponsor/nasa.png" class="img-fluid img-center center-block" alt="nasa" style="padding:10px; height:100%; width: 75%;">
   </div>
     <div class="col-md-6">
       <div class="row">
         <h4 class="display-3" style="font-size:60px">NASA</h4>
 </div>
         <div class="row">
 <p class="lead text-justify">NASA and their yearly grants have allowed us to continue to pay for registration and participate in FRC. Their continued support through grants is greatly appreciated.</p>
</div>
</div>

</div>
</div>



  <!-- Logo and Welcome -->

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
</footer>
</body>
</html>
