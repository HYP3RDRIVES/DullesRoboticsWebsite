<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <title>Contact Us</title>
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
		document.getElementById('nav-bar-contact').setAttribute('class', 'active dropdown-item');
	</script>

	<!-- Main Page -->
	<div class="container" style="height:100%;">
		<h1 class="display-3">Contact Us</h1>
		<hr class="style14">
	</div>

	<!-- Footer -->
	<?php 
		include 'res/footer.php';
	 ?>

	<!-- Scripts -->
	
	<!-- Bootstrap Scripts -->
	<?php 
		include 'res/cdn.php';
	 ?>
</body>
</html>