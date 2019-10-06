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
     <meta name="viewport" content="height=device-height, initial-scale=1">
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





        <!-- Welcome Message -->

        <div class="row">
            <div class="col">
                  <img src="img/w.png" class="img-fluid" alt="imagejqjij" width="500">
            </div>
          <div class="col">
            <h1 class="display-5">An Introduction:</h1>
            <p class="lead">We are a robotics club based out of Dulles HS in Sugar Land, TX. Our FTC teams are #12456 - Big Red and #13822 - Robovikings. Our FRC team is #7494 - Circuit Bizurkers.
            We also participate in community outreach events and workshops.</p>
            <a href="story.php" class="btn btn-primary">View our Story</a>
          </div>
        </div>

          <div class="row" style="padding-top:10px">
            <div class="col">
                        <img src="img/stateRAS.jpg" class="img-fluid" alt="dcmpphoto" width="500" height="500">
            </div>
            <div class="col">
            <h1 class="display-5">Our Members</h1>
          <div class="lead">
            <p>Dulles Robotics is comprised of an extremly diverse group of people, from different backgrounds. Each member posses a unique skillset crucial to the functioning of our teams.</p>
          </div>
        </div>
      </div>

          <div class="row" style="padding-top:10px">
            <div class="col">
              <img src="img/mentor.jpg" class="img-fluid" alt="sartartia" width="500" height="100">

            </div>

          <div class="col">
              <h1 class="display-5">Outreach</h1>
          <div class="lead">
            <p>Dulles Robotics participates in numerous outreach events, such as hosting teen camps at local libraries, as well as mentoring FTC teams from around our school district. We have also hosted FTC competitions at our school, and have promoted FIRST on a local TV station.</p>
          </div>
        </div>
        </div>
          <div class="row" style="padding-top:10px">
            <h1 class="display-5">The website</h1>
            <hr>
          </div>
          <div class="lead">
            <p>Dullesrobotics.com is self-hosted at home, by a few of our members. Originally starting off as a site on weebly, we were able to accuire a domain, and eventually our own servers. In the summer of 2019, the site recived a major overhaul, after transitioning to PHP, and Bootstrap. Special thanks to <strong>Geoffrey Dolive</strong> for helping fund our domain for 2019-2020!</p>
          </div>







     </div>
   </div>
      <hr/>

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
