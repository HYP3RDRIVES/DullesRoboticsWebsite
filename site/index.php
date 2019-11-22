<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
  Modified by Erica Miller, Zain Ahmed, Jacob Enerio, and Elliot Michlin for the Dulles Robotics Club 2019-2020.
-->

<!DOCTYPE html>
<html lang="en">

  <script>
  var user = detect.parse(navigator.userAgent);
  if (user.browser.family === 'Firefox'){
    document.getElementById("content").innerHTML=' <img src="https://drc.aspencdn.me/photos/txpasdrive.webp"> <img src="https://drc.aspencdn.me/photos/stateRAS.webp">';
}
  </script>
<div id="#loader" style="display:none;"></div>
<head>
  <title>Home - Dulles Robotics</title>
  <meta property="og:image" content="/img/w.png">
  <script type="text/javascript" src="lib/atc.min.js" async defer></script>
  <?php
    	include 'res/head.php';
     ?>
  <meta name="viewport" content="width=640">
    <script src="https://kit.fontawesome.com/7c99d65b69.js" crossorigin="anonymous"></script>

</head>

<body style="overflow-x: hidden;">
  <!-- Navigation Bar -->
  <div class="fill">
    <?php
       include 'res/nav.php';
      ?>
      <?php
         include 'res/toast.php';
        ?>
    <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
    <script type="text/javascript">
      document.getElementById('nav-bar-home').setAttribute('class', 'active nav-item');
    </script>

    <div class="myCarousel" id="#carouselHider" style="height:97vh;">
      <!--  <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQc5bzPiqXskOKwXqDc_P5Rcpp2_pvFrOptn8Ds6UvrybJMgZYmVPAVdKU7W3zLxureySLAlzICS4wq/embed?start=true&loop=true&delayms=3000&rm=minimal&loop=true&autoStart=true" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe> -->
      <?php
        include 'res/homeImageCarousel.php';
      ?>
    </div>
    <script>
    var carousel = document.getElementById("#carouselHider");
    var altTitle = document.getElementById("#altTitle");
    var primCont = document.getElementById("#primCont");
    if (removal){

     carousel.remove();
     altTitle.style = "display:flex";
     primCont.style = "margin-top:1vh; margin-bottom:1vh;"
   }
   if (!removal){
     altTitle.style = "display:none;";
     primCont.style = "margin-top:10vh; margin-bottom:1vh;";
   }
     </script>
  </div>

<div style="height:100vh;">
  <!-- Main Page -->
  <div class="container" style="margin-top:10vh; margin-bottom:1vh;" id="#primCont" >
    <div class="text-center" id="#altTitle" >
      <h1 class="display-3">Dulles Robotics</h1>
    </div>

    <div class="row">
      <!-- Logo -->
      <div class="col-md-6">
        <img src="img/w.png" width="480px" class="img-fluid" alt="Logo">
      </div>
      <!-- Welcome Message -->
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-4">Welcome!</h4>
          <hr>
          <p class="lead text-justify">We are a robotics club based out of Dulles High School in Sugar Land, Texas. Dulles Robotics is home to two FTC Teams (13822, 12456) in addition to one FRC team (7494). These teams participate in the FIRST robotics programs.</p>
          <a href="about.php" class="btn btn-primary">About Us</a>

        </div>
      </div>
    </div>
    <hr />

    <!-- Slide Show and Mission -->
    <div class="row row-special">
      <!-- Slide Show -->

      <!-- Mission Statement -->
      <div class="col-md-12">
        <div class="row">
          <h1 class="display-4">Our Mission</h1>
          <p class="lead text-justify">Our Mission is to foster an interest in STEM to allow our students to become the leaders and problem solvers of tomorrow.</p>
        </div>
      </div>

    </div>
    <hr class="style10">

    <div class="col-sm-12">
      <h3 class="display-4" style="text-align:center;">Events</h3>
    </div>
  <!-- Calendar mini-view -->
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <div class="card-light card text-center" style="height:30vh;">
          <h5 class="card-header">FTC League Match <a class="badge badge-pill badge-dark" style="padding:7px;">Upcoming</a></h5>
          <div class="card-body">
            <h6 class="card-subtitle mb-2 text-center">November 16th - 7am</h6>
            <p class="card-text">You MUST pay your dues to take part in these competitions.</p>
            <a title="Add to Calendar" class="addeventatc" style="position:absolute;bottom: 10px; left:5px;right:5px;margin:2px;" class="btn btn-cool">
              Add to Calendar
              <span class="start">11/16/2019 07:00 AM</span>
              <span class="end">11/16/2019 1:30 PM</span>
              <span class="timezone">America/Chicago</span>
              <span class="title">FTC Robotics Match</span>
              <span class="location">Dulles High School</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center" style="height:30vh;">
          <h5 class="card-header">FTC League Match</h5>
          <div class="card-body">
            <h6 class="card-subtitle mb-2">December 14th - 7am</h6>
            <p class="card-text">Right before winter break! Dues required to participate, as always.</p>
            <a title="Add to Calendar" class="addeventatc" style="position:absolute;bottom: 10px; left:5px;right:5px;margin:2px;" class="btn btn-cool">
              Add to Calendar
              <span class="start">12/14/2019 07:00 AM</span>
              <span class="end">12/14/2019 1:30 PM</span>
              <span class="timezone">America/Chicago</span>
              <span class="title">FTC Robotics Match</span>
              <span class="location">Dulles High School</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center" style="height:30vh;">
          <h5 class="card-header">FRC Kickoff</h5>
          <div class="card-body">
            <h6 class="card-subtitle mb-2">January 4th 2020</h6>
            <p class="card-text">Game reveal for FRC 2020 Infinite Recharge</p>
          <div style="align-self:center">
          <a title="Add to Calendar" class="addeventatc" style="position:absolute;bottom: 10px; left:5px;right:5px;margin:2px;" class="btn btn-cool">
            Add to Calendar
            <span class="start">1/4/2019 07:00 AM</span>
            <span class="end">1/4/2019 1:30 PM</span>
            <span class="timezone">America/Chicago</span>
            <span class="title">FRC Kickoff</span>
            <span class="location">Dulles High School</span>
          </a>
        </div>
        </div>
        </div>
      </div>
    </div>

  <!--    <div class="col-sm">
      <h6 class="text-center" style="font-style:italic;color:#ABA7A7;margin-top:20%;">More events will be added when we get more. Stay tuned!</h6>
    </div>
  </div>
-->

  <hr class="style14">
  <!-- Info -->
  <div class="col-sm-12">
    <h3 class="display-4" style="text-align:center;">Stay in Touch</h3>
  </div>
  <div class="col-sm-12" style="margin-bottom: 2%; margin-top: 2%;text-align:center">
    <p class="lead" style="padding-left: 0.5rem; text-align:center ;">
      View our current club <a href="officers.php" class="badge badge-dark">officers</a>. <button class="btn badge badge-info text-light" id="remind-link" data-toggle="tooltip" data-placement="top" title="Text @776d6f to 81010">Remind code</button>,
      newsletter signup and more contact info is provided <a href="contact.php" class="badge badge-dark">here</a>.
    </p>
  </div>
  <div class="col-sm-12" style="margin-bottom: 2%; text-align:center;">
    <p class="lead small" style="margin: 0 0;">If you have any questions or comments about the Dulles Robotics Club, contact us at our <a class="badge badge-dark text-light" id="remind-link" href="mailto:dullesrobotics@gmail.com"
        data-toggle="tooltip" data-placement="top" title="E-Mail us at dullesrobotics@gmail.com">E-Mail</a>‏‏‎. Any question or comments can also be addressed directly to any of the officers.</p>
  </div>
  </div>



  <!-- Footer -->
  <footer>
    <?php include 'res/footer.php'; ?>
  </footer>
  <?php include 'res/cdn.php'; ?>

  <!-- Scripts -->
  <!-- activate tooltips -->
  <script type="text/javascript">
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <script>
    window.onbeforeunload = function() {
      window.scrollTo(0, 0);
    }
  </script>
  </footer>
</div>
</body>

</html>
