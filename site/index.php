<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
  Modified by Erica Miller, Zain Ahmed, Jacob Enerio, and Elliot Michlin for the Dulles Robotics Club 2019-2020.
-->

<!DOCTYPE html>
<html lang="en">
<!--
  <script>
  var browserName  = navigator.userAgent.toLowerCase();
  console.log(browserName);
  if (browserName.indexOf('firefox') > -1){
    document.getElementById("#loader").innerHTML=' <img src="https://drc.aspencdn.me/photos/txpasdrive.webp"> <img src="https://drc.aspencdn.me/photos/stateRAS.webp">';
}
</script> -->
<div id="#loader" style="display:none;"></div>

<head>
  <title>Home - Dulles Robotics</title>
  <meta property="og:image" content="/img/w.png">
  <script type="text/javascript" src="lib/atc.min.js" async defer></script>
  <?php
    	include 'res/head.php';
     ?>



</head>
<style>
::-webkit-scrollbar-track {

  opacity: 0;

}
</style>
<body style="overflow-x: hidden;">
  <!-- Navigation Bar -->
  <div class="fill">
    <?php
       include 'res/nav.php';
      ?>
    <!-- TOAST HERE-->
    <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
    <script type="text/javascript">
      document.getElementById('nav-bar-home').setAttribute('class', 'active nav-item  animated fadeInDown');
      // document.getElementById('navigator').setAttribute('class','navbar navbar-expand-md  navbar-dark bg-dark');
    </script>

    <div class="myCarousel" id="#carouselHider" style="height:97vh;">
      <!--  <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQc5bzPiqXskOKwXqDc_P5Rcpp2_pvFrOptn8Ds6UvrybJMgZYmVPAVdKU7W3zLxureySLAlzICS4wq/embed?start=true&loop=true&delayms=3000&rm=minimal&loop=true&autoStart=true" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe> -->
      <?php
        include 'res/homeImageCarousel.php';
      ?>

    </div>

    <div style="height:100vh;">
      <!-- Main Page -->
      <div class="sect2" id=#indxone>
        <div class="container" style="margin-top:5vh; margin-bottom:1vh;" id="#primCont">

          <div class="text-center row special-row" id="#altTitle">
            <div class="col-md-12">
              <h1 class="display-3 text-center" style="color:white;">Dulles Robotics</h1>
            </div>
          </div>


          <script>
            var carousel = document.getElementById("#carouselHider");
            var altTitle = document.getElementById("#altTitle");
            var primCont = document.getElementById("#primCont");
            if (removal) {
              carousel.remove();
              altTitle.style = "display:flex";
              primCont.style = "margin-top:1vh; margin-bottom:1vh;"
            }
            if (!removal) {
              altTitle.remove();
              primCont.style = "margin-top:5vh; margin-bottom:1vh;";
            }
          </script>
        </div>

        <div class="container">
          <div class="row">
            <!-- Logo -->
            <div class="col-md-6">
              <img src="img/w.png" class="img-fluid" width="480px" alt="Logo">
            </div>
            <!-- Welcome Message -->
            <div class="col-md-6">
              <h1 class="display-4">Welcome!</h1>
              <p class="lead text-justify">We are a robotics club based out of Dulles High School in Sugar Land, Texas. Dulles Robotics is home to two FTC Teams (13822, 12456) in addition to one FRC team (7494). These teams participate in the FIRST
                robotics programs.</p>
              <a href="about.php" class="btn btn-lblue">About Us</a>
            </div>
          </div>

        </div>

      </div>

      <div class="sect1">
        <div class="container">
          <div class="row animated fadeInLeft delay-1s ">

            <div class="col">
              <!-- Mission Statement -->
              <h1 class="display-4" style="text-align:left;">Our Mission</h1>
              <p class="lead text-justify">Our Mission is to foster an interest in STEM to allow our students to become the leaders and problem solvers of tomorrow.</p>
            </div>

          </div>
        </div>
      </div>

      <div class="imgsect fill" style="background-image:url('/img/txpasteam.JPG'); background-attachment: fixed;">
        <div class="container text-center">
          <div class="row" style="padding-top:100px;">
            <div class="col">
              <img src="/img/Infinite.png" class="img-fluid" alt="frcinf" width="400" height="400">
            </div>
            <div class="col border-left" style="vertical-align:middle; margin-top:30px;">
              <h1 class="display-3 text-light">FRC Kickoff</h1>
              <p class="lead">The FRC 2020 Kickoff was held on January 4th 2020.</p>
              <a class="btn btn-secondary" href="https://www.firstinspires.org/resource-library/frc/competition-manual-qa-system">Game Materials</a>
              <a class="btn btn-light" href="https://youtu.be/gmiYWTmFRVE">Game Animation</a>
            </div>

          </div>
      </div>
      </div>
      <div class="sect5">
        <div class="container-fluid text-center" style="justify-content: center; align-items:center; vertical-align: middle;">

          <div class="row justify-content-center text-center">

            <div class="col">
              <a class="indxbox" href="first.php"content="7">
                <h1>What is <i>FIRST</i></h1>
                <p><i>FIRST</i> is a non-profit organisation dedicated to bring awareness of STEM to current students</p>

                <ion-icon style="font-size:50px;"name="arrow-forward"></ion-icon>

              </a>
            </div>
            <div class="col">
              <a class="indxbox" href="https://www.firstinspires.org/resource-library/frc/competition-manual-qa-system "content="7">
                <h1>FRC 2020</h1>
                <p>Click to view the FRC 2020 Game, Infinite Recharge.</p>

                <ion-icon style="font-size:50px;"name="arrow-forward"></ion-icon>

              </a>
            </div>
            <div class="col">
              <a class="indxbox" href="https://thebluealliance.com/team/7494" target="_blank" content="7">

                <h1>FRC TBA Page</h1>
                <p>View our page on The Blue Alliance</p>

                <ion-icon style="font-size:50px;"name="arrow-forward"></ion-icon>
              </a>
            </div>
            <div class="col">
              <a class="indxbox" href="/announcements.php">
                <h1>View our Blog</h1>
                <p>Click to view recent posts</p>

                <ion-icon style="font-size:50px;"name="arrow-forward"></ion-icon>
              </a>
            </div>
          </div>

        </div>
      </div>

      <div class="sect3">
        <div class="container">


          <h1 class="display-4 text-center">Events</h1>

          <!-- Calendar mini-view -->
          <div class="row justify-content-center text-center">
            
              <style>
                .cal-card {
                  background-color: #232946;
                  min-height: 30vh;

                }
                .card-header{
                  margin-bottom: 20px;
                }
                .card-text{

                  padding-bottom: 80px;
                }
                .card:hover {
                  background-color: #131c4b;
                  color: #ecf0ff;
                }
              </style>




            <div class="col-sm">
              <div class="card text-center cal-card">
                <style>
                  /* this whole part is for the background gradient thingy */
                  #badge-pill {
                    background: linear-gradient(to right, #7dd5f5, #7dd5f5, #7dd5f5, #a1e9f0, #e1f8fa, #a1e9f0, #7dd5f5, #7dd5f5, #7dd5f5, #a1e9f0, #e1f8fa, #a1e9f0, #7dd5f5, #7dd5f5, #7dd5f5);
                    background-position-x: 0%;
                    background-position-y: 0%;
                    background-size: auto;



                    color: white;
                    animation: rainbow_animation 4s ease-in-out infinite;
                    background-size: 400% 100%;
                    background-position: 100% 0;

                  }

                  .badge-pill {
                    background: linear-gradient(to right, #f52222, #f52222, #f52222, #f52222, #f52222, #ff6666, #f57d7d, #f57d7d, #f57d7d, #f57d7d, #f57d7d, #ff6666, #f52222, #f52222, #f52222, #f52222, #f52222);

                    color: transparent;
                    animation: rainbow_animation 6s ease-in-out infinite;
                    background-size: 400% 100%;
                    padding: 7px;
                  }

                  @keyframes rainbow_animation {

                    0%,
                    100% {
                      background-position: 0 0;
                    }

                    50% {
                      background-position: 100% 0;
                    }
                  }
                </style>
                <h5 class="card-header">FRC Channelview</h5><div class="badge badge-pill badge-dark" style="border-radius:25px;" id="#badge-pill">
                    <div class="text-light">Upcoming</div>
                  </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">March 7th/8th 2020</h6>
                  <p class="card-text">The 1st FRC match of the season. This is one of two district (FIT) events to qualify for District Champs</p>
                  <div style="align-self:center">
                    <a title="Add to Calendar" class="btn-coo btn addeventatc" style="position:absolute;bottom: 10px; left:5px;right:5px;">
                      Add to Calendar
                      <span class="start">3/7/2020 05:00 AM</span>
                      <span class="end">3/8/2020 6:00 PM</span>
                      <span class="timezone">America/Chicago</span>
                      <span class="title">FIT Channelview Event</span>
                      <span class="location">Channelview High School</span>
                    </a>
                    <a class="btn btn-primary" href="https://www.thebluealliance.com/event/2020txcha" target="_blank" style="position:absolute;bottom: 60px; left:5px;right:5px; margin-bottom:5px;background-color:#3da9fc;color:white;">View on TBA</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card text-center cal-card">
                <h5 class="card-header">FRC Pasadena</h5>
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">March 7th/8th 2020</h6>
                  <p class="card-text">The 1st FRC match of the season. This is one of two district (FIT) events to qualify for District Champs</p>
                  <div style="align-self:center">
                    <a title="Add to Calendar" class="btn-coo btn addeventatc" style="position:absolute;bottom: 10px; left:5px;right:5px;">
                      Add to Calendar
                      <span class="start">3/27/2020 05:00 AM</span>
                      <span class="end">3/28/2020 6:00 PM</span>
                      <span class="timezone">America/Chicago</span>
                      <span class="title">FIT Pasadena Event</span>
                      <span class="location">San Jacinto College Central</span>
                    </a>
                    <a class="btn btn-primary" href="https://www.thebluealliance.com/event/2020txpas" target="_blank" style="position:absolute;bottom: 60px; left:5px;right:5px; margin-bottom:5px;margin: top:40px;background-color:#3da9fc;color:white;">View on TBA</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card text-center cal-card">
                <h5 class="card-header">FIT DCMP</h5>
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">March 7th/8th 2020</h6>
                  <p class="card-text">District Championships. This event requires advancement in the First In Texas District</p>
                  <div style="align-self:center">
                    <a title="Add to Calendar" class="btn-coo btn addeventatc" style="position:absolute;bottom: 10px; left:5px;right:5px;">
                      Add to Calendar
                      <span class="start">3/27/2020 05:00 AM</span>
                      <span class="end">3/28/2020 6:00 PM</span>
                      <span class="timezone">America/Chicago</span>
                      <span class="title">FIT Pasadena Event</span>
                      <span class="location">San Jacinto College Central</span>
                    </a>
                    <a class="btn btn-primary" href="https://www.thebluealliance.com/event/2020txpas" target="_blank" style="position:absolute;bottom: 60px; left:5px;right:5px; margin-bottom:5px;margin: top:40px;background-color:#3da9fc;color:white;">View on TBA</a>
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
        </div>
      </div>

      <div class="sect4">
        <div class="container">
          <!-- Info -->
          <div class="col-sm-12">
            <h1 class="display-4" style="text-align:center;">Stay in Touch</h1>
          </div>
          <div class="col-sm-12" style="margin-bottom: 2%; margin-top: 2%;text-align:center">
            <p class="lead" style="padding-left: 0.5rem; text-align:center ;">
              View our current club <a href="officers.php" class="badge badge-dark">officers</a>. <button class="btn badge badge-info text-light" id="remind-link" data-toggle="tooltip" data-placement="top" title="Text @776d6f to 81010">Remind
                code</button>,
              newsletter signup and more contact info is provided <a href="contact.php" class="badge badge-dark">here</a>.
            </p>
          </div>
          <div class="col-sm-12" style="margin-bottom: 2%; text-align:center;">
            <p class="lead small" style="margin: 0 0;">If you have any questions or comments about the Dulles Robotics Club, contact us at our <a class="badge badge-dark text-light" id="remind-link" href="mailto:dullesrobotics@gmail.com"
                data-toggle="tooltip" data-placement="top" title="E-Mail us at dullesrobotics@gmail.com">E-Mail</a>‏‏‎. Any question or comments can also be addressed directly to any of the officers.</p>
          </div>
        </div>

      <!-- Footer -->
<?php include 'res/footer.php'; ?>
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
