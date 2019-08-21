<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height:100%;">
<head>
    <title>Forms and Documents - Dulles Robotics</title>
    <?php include 'res/head.php'; ?>
</head>
<body style="height:100%;">
	<?php
		include 'res/nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-forms').setAttribute('class', 'active dropdown-item');
	</script>

	<!-- Main Page -->
	<div class="container" style="height:100%;">
		<div class="row"></div>
		<h1 class="display-3">Forms and Documents</h1>
		<hr class="style14">

    <div class="col-sm-12 col-md-8" id="scrollspy-info">
      <div data-spy="scroll" data-target="#list-announ" data-offset="0" class="scrollspy-example">
    <h3>Interest Meeting Form</h3>
      <hr class="style2">
      <hr class="style12">

      <p class="lead">
        <iframe src="https://docs.google.com/document/d/e/2PACX-1vRMgiO7mYySb2Mal5ULCQRvCL1x0_J59e-5PTngvqQM3PhO2aPirGI9Vx01KIEcNWsR-q9YXd8kexgT/pub?embedded=true" width="1075" height="600"></iframe>
<a href="https://docs.google.com/document/d/1HG8JYLzTcvJNR0Aec5MTyM6wgr_obxvYEHm7LpjGf_c/edit?usp=sharing" target="_blank" class="btn btn-primary">View in G Docs</a>
      </p>
    </div>
  </div>

	<!-- Footer -->
	<?php
		include 'res/footer.php';
	 ?>

	<!-- Scripts -->

	<!-- Bootstrap CDN -->
	<?php
		include 'res/cdn.php';
	 ?>
</body>
</html>
