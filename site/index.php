
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
    <meta name="description" content="This is the website for the Dulles Robotics Club, and FRC Team #7494, as well as FTC Teams #13822 and #12456.">
    <meta property="og:image" content="/img/w.png">
    <meta name="description" content="This is the website for the Dulles Robotics Club, and FRC Team #7494, as well as FTC Teams #13822 and #12456. ">
    <meta name="keywords" content="Dulles Robotics, Dulles Robotics Club, Dulles High School, Dulles High School Robotics Club, FRC 7494, Circuit Bizurkers, Big Red, 12456, 13822, Robovikings, Robovikes, Circuit Bizurkers #7494, Circuit Beserkers, #7494, #12456, #13822, #13822 Robovikings, #12456 Big Red">

    <?php
    	include 'res/head.php';
     ?>
       <meta name="viewport" content="width=640">
</head>

<body style="">
	<!-- Navigation Bar -->
	<?php
		include 'res/nav.php';
	 ?>


	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-home').setAttribute('class', 'active nav-item');
	 </script>

    <!-- Main Page -->
	<div class="container">

    <!-- noti box -->
    <?php
      include 'res/toast.php';
     ?>

		<!-- Title -->
            <div class="col-md-12">
                <p class="display-3 text-center">Dulles Robotics</p> <br>
         </div>
		<hr class="style14" />

		<!-- Logo and Welcome -->
<div class="row special-row">
			<!-- Logo -->
			<div class="col-md-6">
				<img src="img/w.png" width="480px" class="img-fluid" alt="Logo">
			 </div>
			<!-- Welcome Message -->
			<div class="col-md-6">
				<div class="row">
					<h4 class="display-4">Welcome!</h4>
					<hr>
					<p class="lead text-justify">We are a robotics club based out of Dulles HS in Sugar Land, TX. We have two FTC teams as well as one FRC Team.</p>
					<a href="about.php" class="btn btn-primary">About Us</a>

				</div>
			 </div>
		 </div>
		<hr/>

		<!-- Slide Show and Mission -->
		<div  class="row row-special">
			<!-- Slide Show -->
			<div class="col-md-6">
                <div class="fill">
          <!--  <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQc5bzPiqXskOKwXqDc_P5Rcpp2_pvFrOptn8Ds6UvrybJMgZYmVPAVdKU7W3zLxureySLAlzICS4wq/embed?start=true&loop=true&delayms=3000&rm=minimal&loop=true&autoStart=true" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe> -->
                    <?php
                    include 'res/homeImageCarousel.php';
                    ?>
                </div></div>
			<!-- Mission Statement -->
			<div class="col-md-6">
				<div class="row">
					<h1 class="display-4">Our Mission</h1>
					<p class="lead text-justify">Our Mission is to foster an interest in STEM to allow our students to become the leaders and problem solvers of tomorrow.</p>
				</div>
			 </div>
		 </div>
    <hr class="style14">

		<!-- Info -->
    <div class="col-sm-12">
      <h3 class="display-4" style="text-align:center;">Stay in Touch</h3>
    </div>
	<div class="col-sm-12" style="margin-bottom: 2%; margin-top: 2%;text-align:center">
				<p class="lead" style="padding-left: 0.5rem; text-align:center ;">
					View our current club <a href="officers.php" class="badge badge-dark">officers</a>. <button class="btn badge badge-info text-light" id="remind-link" data-toggle="tooltip" data-placement="top" title="Text @776d6f to 81010">Remind code</button>, newsletter signup and more contact info is provided <a href="contact.php" class="badge badge-dark">here</a>.
        </p>
			</div>
 		</div>

 		<div class="col-sm-12" style="margin-bottom: 2%; text-align:center;">
 			<p class="lead small" style="margin: 0 0;">If you have any questions or comments about the Dulles Robotics Club, contact us at our <a class="badge badge-dark text-light" id="remind-link" href="mailto:dullesrobotics@gmail.com" data-toggle="tooltip" data-placement="top" title="E-Mail us at dullesrobotics@gmail.com">E-Mail</a>‏‏‎. Any question or comments can also be addressed directly to any of the officers.</p>
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
<script src="https://aspencdn.me/bootstrap/4.3.1/js/bootstrap.bundle.js"></script>
</footer>

</body>

</html>
