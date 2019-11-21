<!--
	Dulles Robotics Club 2019-2020
	Written By Zain Ahmed
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">

<head>
  <title>Robots - Dulles Robotics</title>
  <?php
    include 'res/head.php';
    ?>
  <meta property="og:title" content="Dulles Robotics Club - Robots"/>
  <meta property="og:image" content="/img/mock3.png"/>
</head>

<body style="background-color:white; scrollbar-width:10px; ">

  <?php
include 'res/nav.php';

?>



  <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('navigator').setAttribute('class', 'bg-dark navbar navbar-expand-md  navbar-dark');
    document.getElementById('nav-bar-robot').setAttribute('class', 'active dropdown-item text-white');
  </script>
  <!-- Main Page -->


  <hr class="style14">

    <div style="position:sticky">
<a class="btn btn-primary active"  id="#javelin-btn" onclick="javelinShow()" style="margin-left:50px;"><strong>FRC 2019</strong></a>
<br/>
<a class="btn btn-primary" id="#elephant-btn" onclick="elephantShow()" style="margin-left:50px;margin-top:10px;"><strong>FTC 2018-2019</strong></a>
<br/>
<a class="btn btn-primary" id="#blowtorch-btn" onclick="blowtorchShow()" style="margin-left:50px;margin-top:10px;"><strong>FTC 2016-2018</strong></a>
</div>
  <div class="container text-dark" style="display: table; vertical-align:center; align-content:center; display:table; ">
    <div class="col-md-12">
      <h3 class="display-2" style="text-align:center;">Robots</h3>
    </div>
    <hr class="style1" />

    <!-- Title -->
    <div class="row special-row block" id="#javelin" style="display:flex;">
      <!-- <div class="col-md-2 bot-sub"></div> -->
      <div class="col-md-6" style=" height:300px; width:100%;">
        <img src="https://drc.aspencdn.me/photos/javelin.jpg" class="img-fluid img-center indxcrop" alt="javelin" style="padding:30px;  align-self: right;">
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-2" style="text-align:left; font-size:85px;">​​Javelin</h4>
        </div>
        <div class="row">
          <p class="lead text-justify">Javelin is our first robot to compete in FRC, on <strong> team 7494. </strong></p>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Specs</h2>
              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Name</span> Javelin</li>

              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> 112 lbs</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span> Deep Space</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span> 7494</li>


            </ul>
          </div>

          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Comps</h2>
              <li class="lead large rspec"> <span class="badge badge-primary text-light">FIT Channelview</span> Finalist Alliance</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">FIT Pasadena</span> Rookie All Stars</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">FIT DCMP</span> Safety Award, Rookie All Stars</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Turing Division</span></li>

            </ul>
          </div>
          <ul>
            <li class="lead text-justify">Rigid build allows for effective defense</li>
            <li class="lead text-justify">Fast Hatch Rate</li>
          </ul>
        </div>
      </div>
      <!-- <div class="col-md-2 bot-sub"></div> -->
    </div>



    <div class="row special-row block" id="#elephant" style="display:none;">

      <div class="col-md-6 text-center" style="align-content:center;">
        <img src="/img/rrbr.jpg" style="width: 450px; height: 450px; vertical-align:center; padding:20px; align-self:center;" class="img-fluid img-center img-vert-center" alt="twc">
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-2" style="text-align:left; font-size:85px;">​​Elephant</h4>
        </div>
        <div class="row">
          <p class="lead text-justify">Elephant was the robot used in FTC Rover Ruckus by team <strong>#12456 Big Red for the 2018-2019 season</strong></p>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Specs</h2>
              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Name</span> Elephant</li>

              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> ~35 lbs</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span> Rover Ruckus</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span> 12456</li>
            </ul>
          </div>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Comps</h2>
              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Houston-Southwest League Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Last Chance Qualifier (San Jacinto College) </span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Texas UIL State Championships</span></li>


            </ul>
          </div>
        </div>
        <ul>
          <li class="lead text-justify">Extending intake for Gold and Silver</li>
          <li class="lead text-justify">Mechanum Wheels allow for strafing</li>
        </ul>
      </div>
    </div>




    <div class="row special-row block" id="#blowtorch" style="display:none;">

      <div class="col-md-6 text-center" style="align-content:center;">
        <img src="/img/mock3.jpg" style="width: 450px; height: 450px;" class="img-fluid img-center img-vert-center" alt="twc" style="padding:20px; align-self:center;  width:65%">
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-2" style="text-align:left; font-size:85px;">​​Blowtorch</h4>
        </div>
        <div class="row">
          <p class="lead text-justify">Blowtorch was the robot used in FTC Relic Recovery by team <strong>#12456 Big Red for the 2017-2018 season</strong></p>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Specs</h2>
              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Name</span> Blowtorch</li>

              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> ~35 lbs</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span> Relic Recovery</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span> 12456</li>
            </ul>
          </div>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Comps</h2>
              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Houston-Southwest League Meet</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Regional</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Last Chance Qualifier (San Jacinto College) </span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Texas State Championships</span></li>


            </ul>
          </div>
          <ul>
            <li class="lead text-justfy">Mechanum wheels allow for strafing.</li>
            <li class="lead text-justfy">PID programming enables wheel fail tolerance</li>
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
      $(function() {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </footer>
</body>

</html>
