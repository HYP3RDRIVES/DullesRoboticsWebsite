<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <title>FIRST - Dulles Robotics</title>
    <?php
    	include 'res/head.php';
     ?>
     <meta property="og:title" content="Dulles Robotics Club - About First">
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
	<div class="container" style="height:100%;">
		<h1 class="display-3">About <i>FIRST</i></h1>
		<hr class="style14">
    <div class="container">
      <!-- Title -->




  <!-- WM Sponsor Block -->
  <div class="container">



    <!-- Logo and Welcome -->
    <div id="logo-and-welcome" class="row well border-0 border-secondary">
      <!-- Logo -->
      <div class="col">
        <img src="/img/FIRST.png" class="img-fluid" alt="wm" width="530" height="900">
       </div>
      <!-- Welcome Message -->
      <div class="col">
        <div class="row">
          <h4 class="display-3">​​Mission of <i>FIRST</i></h4>
  </div>
          <div class="row">
  <p class="lead text-justify">The mission of FIRST® is to inspire young people to be science and technology leaders and innovators, by engaging them in exciting mentor-based programs that build science, engineering, and technology skills, that inspire innovation, and that foster well-rounded life capabilities including self-confidence, communication, and leadership.</p>
      <a href="https://www.firstinspires.org/about/vision-and-mission" target="_blank" class="btn btn-primary">Learn more about <i>FIRST</i></a> 

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
      <img src="/img/FTC.png" class="img-fluid" alt="ftc" width="450" height="450">
     </div>
    <!-- Welcome Message -->
    <div class="col">
      <div class="row">
        <h4 class="display-3"><i>FIRST</i>  Tech Challenge</h4>
</div>
        <div class="row">
<p class="lead text-justify">Teams of middle and high school-aged students are challenged to design, build, and program a robot to play a floor game against other teams’ creations. Team <strong>12456</strong> and Team <strong>13822</strong> have been competing in the FIRST robotics competition since 2016 and 2017 respectively.</p>
  <a href="https://www.firstinspires.org/robotics/ftc" target="_blank" class="btn btn-primary">Learn more about FTC</a>

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
      <img src="/img/FRC.png" class="img-fluid" alt="twc" width="450" height="450">
     </div>
    <!-- Welcome Message -->
    <div class="col">
      <div class="row">
        <h4 class="display-3"><i>FIRST</i> Robotics Competition</h4>
</div>
        <div class="row">
<p class="lead text-justify">High school-aged teams compete head to head on a special playing field with robots they have designed, built, and programmed. Team 7494 has been competing in the First Robotics Competition since its rookie year in 2019. </p>
 <a href="https://www.firstinspires.org/robotics/frc" target="_blank" class="btn btn-primary">Learn more about FRC</a>

      </div>
     </div>
   </div>
  <hr/>

</div>
<!-- NASA Sponsor Block Ends -->

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
