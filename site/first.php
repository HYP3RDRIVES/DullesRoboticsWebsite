<!--
	Dulles High School Robotics Club 2019-2020
	Written By Zain Ahmed, Web Developer
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">

<head>
  <title>FIRST - Dulles Robotics</title>
  <?php
    	include 'res/head.php';
     ?>
  <title>About FIRST - Dulles Robotics</title>
  <description "This is the official website for the Dulles Robotics Club, and FRC Team #7494, as well as FTC Teams #13822 and #12456.">
    <meta property="og:title" content="Dulles Robotics Club - Official Website">
    <meta property="og:image" content="/img/w.png">
    <meta name="description" content="This is the website for the Dulles Robotics Club, and FRC Team #7494, as well as FTC Teams #13822 and #12456. ">
    <meta name="keywords"
      content="Dulles Robotics, Dulles Robotics Club, Dulles High School, Dulles High School Roboti_cs Club, FRC 7494, Circuit Bizurkers, Big Red, 12456, 13822, Robovikings, Robovikes, Circuit Bizurkers #7494, Circuit Beserkers, #7494, #12456, #13822, #13822 Robovikings, #12456 Big Red, Dulles Robot, Robot, FIRST, FRC, Fort Bend ISD, FBISD, FBISD FRC, FBISD VEX, VEX, VRC, FTC, FIRST TECH CHALLENGE, DULLES ROBOTS">

</head>

<body style="max-width:100vw;overflow-x:hidden;">

  <?php
		include 'res/nav.php';
	?>
  <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('nav-bar-first').setAttribute('class', 'active nav-item  animated fadeInDown');
  </script>


  <div id="#firstBody">
    <!-- Main Page -->
    <div class="container" id="#abtFirst">
      <h1 class="display-3 animated zoomIn" style="text-align:center;">About <i>FIRST</i></h1>
      <hr class="style14 animated zoomIn  ">
      <div class="row special-row">
        <div class="col-md-6">
          <img src="/img/FIRST.png" class=" frstImg img-fluid img-center animated fadeInLeft" alt="first">
        </div>
        <!-- Welcome Message -->

        <div class="col-md-6 animated fadeInRight">
          <h2 class="first-header">Introduction</h2>
          <p class="lead first-text"> FIRST (For Inspiration and Recognition of Science and Technology) was founded in 1989 to inspire young people's interest and participation in science and technology. Based in Manchester, NH, the 501(c)(3) not-for-profit
            public charity designs accessible, innovative programs that motivate young people to pursue education and career opportunities in science, technology, engineering, and math, while building self-confidence, knowledge, and life skills.</p>
          <h2>Mission of <i>FIRST</i></h2>
          <p class="lead first-text">
            The mission of FIRST® is to inspire young people to be science and technology leaders and innovators, by engaging them in exciting mentor-based programs that build science, engineering, and technology skills, that inspire innovation, and
            that foster well-rounded life capabilities including self-confidence, communication, and leadership.</p>
          <a href="https://www.firstinspires.org/about/vision-and-mission" target="_blank" class="btn btn-tertiary">Learn more about <i>FIRST</i></a>


        </div>
      </div>


      <!-- WM Sponsor Block Ends -->
      <!-- TWC Sponsor Block -->
      <div class="container">

        <hr class="style14 animated zoomIn" />


        <!-- Logo -->
        <div class="row special-row">
          <div class="col-md-6">
            <img src="/img/FTC.png" class=" frstImg img-fluid img-center animated fadeInLeft ftcAnimate" alt="ftc">
          </div>

          <!-- Welcome Message -->
          <div class="col-md-6 animated fadeInRight ftcAnimate">
            <h1 class="display-3"><i>FIRST</i> Tech Challenge</h1>
            <p class="lead first-text">Teams of middle and high school-aged students are challenged to design, build, and program a robot to play a floor game against other teams’ creations. Team <strong>12456</strong> and Team <strong>13822</strong> have been
              competing in the FIRST Tech Challenge since 2016 and 2017 respectively.</p>
            <a href="https://www.firstinspires.org/robotics/ftc" target="_blank" class="btn btn-tertiary">Learn more about FTC</a>

          </div>
        </div>


        <!-- TWC Sponsor Block Ends -->

        <!-- NASA Sponsor Block -->


        <hr class="style14 animated zoomIn" />

        <!-- Logo and Welcome -->

        <!-- Logo -->
        <script>
          function infScroll() {
            var game = document.getElementById('#frc20');
            game.scrollIntoView({
              block: 'start',
              behavior: 'smooth'
            });
          }

          function deepScroll() {
            var game = document.getElementById('#frc19');
            game.scrollIntoView({
              block: 'start',
              behavior: 'smooth'
            });
          }
        </script>
        <div class="row special-row">
          <div class="col-md-6">
            <img src="/img/FRC.png" class=" frstImg img-fluid img-center animated fadeInLeft frcAnimate" alt="frc">
          </div>
          <!-- Welcome Message -->
          <div class="col-md-6 animated fadeInRight frcAnimate">
            <h4 class="display-3"><i>FIRST</i> Robotics Competition</h4>
            <p class="lead">High school-aged teams compete head to head on a special playing field with robots they have designed, built, and programmed. Team 7494 has been competing in the First Robotics Competition since its rookie year in 2019.
            </p>
            <a href="https://www.firstinspires.org/robotics/frc" target="_blank" class="btn btn-tertiary">Learn more about FRC</a>
            <a onclick="infScroll()" target="_blank" class="btn btn-tertiary" id="#gameScroll1">View this year's Game</a>
            <a onclick="deepScroll()" target="_blank" class="btn btn-tertiary" id="#gameScroll2">View last year's Game</a>

          </div>
        </div>
      </div>
    </div>
    <div class="container animated fadeInUp" id="#2k20">
      <hr class="style18">
      <div class="text-center">
        <h1 class="display-3">2019-2020 Season: RISE</h1>
        <a href="https://info.firstinspires.org/first-rise-2020?utm_source=first-inspires&utm_medium=headline&utm_campaign=fir-registration-020&utm_referrer=https%3A%2F%2Fwww.firstinspires.org%2F" target="_blank">
          <img src="/img/Rise.jpg" class=" frstImg img-fluid" alt="Rise Lockup" width="650" height="500"></a>
        <p class="lead" style="margin-top:20px;">Throughout history, great civilizations have risen, then fallen. Now it’s our turn to rise—building and bolstering our own planetary metropolis.
          This 2019-2020 season, <i>FIRST</i> RISE, powered by Star Wars: Force for Change, is setting out to inspire citizens of the galaxy to work together, strengthening and protecting the Force that binds us and creating a place where
          collaboration and collective wisdom can elevate new ideas and foster growth.</p>
      </div>
      <hr class="style14">
      <div class="container">



        <!-- Logo and Welcome -->
        <div id="logo-and-welcome" class="row well border-0 border-secondary">
          <!-- Logo -->
          <div class="col">
            <div class="row" id="#ftc20">
              <div class="text-center">
                <img src="/img/Skystone.png" class=" frstImg img-fluid" alt="ftcsky" width="350" height="400">
              </div>
            </div>
          </div>
          <!-- Welcome Message -->
          <div class="col">
            <div class="row">
              <h4 class="display-3">FTC: Skystone</h4>
            </div>
            <div class="row">
              <p class="lead"></p>

              <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/-_6h0NOeiI8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            <hr class="style4">
            <a href="https://info.firstinspires.org/skystone" target="_blank" class="btn btn-info">Learn more</a> <a href="https://www.firstinspires.org/resource-library/ftc/game-and-season-infoe" target="_blank" class="btn btn-secondary">Game Manual
              & Materials</a>
            </hr>
          </div>
        </div>
        <hr class="style14">
        <!-- Infinite Recharge -->

        <div id="logo-and-welcome" class="row well border-0 border-secondary">
          <!-- Logo -->
          <div class="col">
            <div class="row" id="#frc20">
              <div class="text-center">
                <img src="/img/Infinite.png" class=" frstImg img-fluid" alt="ftcsky" width="350" height="400">
              </div>
            </div>
          </div>
          <!-- Welcome Message -->
          <div class="col">
            <div class="row">
              <h4 class="display-3">FRC: Infinite Recharge</h4>
            </div>
            <div class="row">
              <p class="lead"></p>

              <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/gmiYWTmFRVE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            <hr class="style4">
            <a href="https://info.firstinspires.org/infinite-recharge" target="_blank" class="btn btn-info">Learn more</a> <a href="https://www.firstinspires.org/resource-library/frc/competition-manual-qa-system" target="_blank" class="btn btn-secondary">Game Manual
              & Materials</a>
            </hr>
          </div>
        </div>


        <hr class="style18">
      </div>
      <div class="container animated fadeInUp delay-1s" id="#2k19">
        <div class="text-center">
          <h1 class="display-3">2018-2019 Season: LAUNCH</h1>
          <img src="/img/first2019.jfif" class="img-fluid" alt="Launch" width="650" height="500"></a>


          <p class="lead" style="margin-top:20px;">One Sunday night in July 1969, one billion people huddled around their radios and TV screens in awe as we walked on the moon for the first time.
            In that moment, the world was united in celebration of human ingenuity and inspired by the possibility that by working together, we can quite literally reach the stars.
        </div>

        <hr class="style14">
        <!-- Logo and Welcome -->

        <!-- Logo -->
        <div class="row special-row" id="#ftc19">
          <div class="col-md-6">
            <div class="row">
              <div class="text-center">
                <img src="/img/RRuckus.png" class="text-center img-fluid" alt="twc" width="350" height="400" style="align-self: center;">
              </div>
            </div>
          </div>
          <!-- Welcome Message -->
          <div class="col-md-6">
            <div class="row">
              <h4 class="display-3">FTC: Rover Ruckus</h4>
            </div>
            <div class="row">
              <p class="lead"></p>

              <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/tCjur2-knp0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            <hr class="style4">
            <a href="https://info.firstinspires.org/skystone" target="_blank" class="btn btn-info">Learn more</a> <a href="https://www.firstinspires.org/resource-library/ftc/game-and-season-infoe" target="_blank" class="btn btn-secondary">Game Manual
              & Materials</a>
            </hr>
          </div>
        </div>


        <hr class="style14">
        <!-- Infinite Recharge -->
        <div class="row special-row" style="padding-bottom:20px;" id="#frc19">
          <!-- Logo -->
          <div class="col-md-6">
            <div class="text-center">
              <div class="row">
                <img src="/img/logo-deep-space.svg" class="text-center img-fluid img-center" alt="twc" width="350" height="400">
              </div>
            </div>
          </div>
          <!-- Welcome Message -->
          <div class="col-md-6">
            <div class="row">
              <h4 class="display-3">FRC: Destination Deep Space</h4>
            </div>
            <div class="row">
              <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Mew6G_og-PI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <hr class="style4">
            <p class="lead">Destination: Deep Space is the game for the 2019 FIRST Robotics Competition. The game involves two alliances of three teams each competing to place hatch covers and rubber balls or “cargo” on rockets and cargo ships before
              returning to their hab platform to climb at the end of the match</p>
            <a href="https://info.firstinspires.org/infinite-recharge" target="_blank" class="btn btn-tertiary">Learn more</a>
          </div>
        </div>
      </div>

    </div>
    <div class="container text-center" id="#riseBtn" style="margin-bottom:1vh;">

      <hr class="style14">
      <a class="btn btn-tertiary" onclick="riseLoader()" style="cursor:pointer;">View more</a>
    </div>

    <!-- Footer -->
    <script>
      var rise = document.getElementById("#2k20");
      var launch = document.getElementById("#2k19");
      var lazyRise = document.getElementById("#riseBtn");
      var gameScroll1 = document.getElementById("#gameScroll1");
      var gameScroll2 = document.getElementById("#gameScroll2");

      if (removal) {
        rise.parentNode.removeChild(rise);
        launch.parentNode.removeChild(launch);
        gameScroll1.parentNode.removeChild(gameScroll1);
        gameScroll2.parentNode.removeChild(gameScroll2);
      } else {
        lazyRise.style = "display:none;";
      }
    </script>
    <footer>
      <div id="#theFooter">
        <?php include 'res/footer.php'; ?>
      </div>
      <?php include 'res/cdn.php'; ?>
      <!-- Scripts -->
      <!-- activate tooltips -->
    </footer>


    <script>
      var done = false;

      function riseLoader() {
              var footer = document.getElementById("#theFooter");
        var mainPage = document.getElementById("#firstBody");
        if (!done) {
          lazyRise.parentNode.removeChild(lazyRise);
          footer.parentNode.removeChild(footer);
          mainPage.appendChild(rise);
          console.log("displayed rise");
          mainPage.appendChild(lazyRise);
          mainPage.appendChild(footer);
          done = true;
        } else {
          footer.parentNode.removeChild(footer);
          lazyRise.parentNode.removeChild(lazyRise);
          mainPage.appendChild(launch);
          mainPage.appendChild(footer);
          console.log("displayed launch");
          lazyRise.style = "display:none;";
        }
      }
    </script>

</body>

</html>
