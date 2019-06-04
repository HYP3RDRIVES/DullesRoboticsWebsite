<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
	Modified by Erica Miller, for the Dulles Robotics Club 2019-2020.
-->

<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <title>Archive</title>
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
		<h1 class="display-3">Archive</h1>
		<div class="col">
			<div class="row">
				<p class="lead text-justify">On <strong> 6/4/2019, </strong> Erica Miller realized how much she sucks at PHP. Haha, what a nerd!</p>
			</div>
		 </div>
		<hr class="style14">
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