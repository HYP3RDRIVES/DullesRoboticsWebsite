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
  <meta property="og:title" content="Dulles Robotics Club - About">
  <meta property="og:image" content="/img/w.png">


</head>

<body style="">

  <?php
		include 'res/nav.php';
	?>
  <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('nav-bar-about').setAttribute('class', 'active nav-item  animated fadeInDown');
  </script>

  <!-- Main Page -->
  <div class="sect4" style="height: 40vh; overflow: hidden;position: relative;" id="#sheader">
    <style>

.skewed-bg{
background: rgb(66, 180, 76);
padding: 200px 0;

transform:skewX(10deg) skewY(0deg);
margin-top: -200px;
margin-left: -200px;
width: 50vw;
height:50vh;
z-index: 1;

.content{


  text-align: center;

  .title{
    padding-top: 100px;
    font-weight: normal;

  }

  .text{

    width:40vw;
    margin: 25px auto;
    color: lighten($main-color, 55);

  }
}
}
@media only screen and (max-width : 768px) {
  .skewed-bg{
    display: none;
  }
  .cover{
    display: none;
  }
}
</style>
<div class="skewed-bg" style="position:absolute;">
  <div class="content"style="padding-right: 10vw;padding-left: 7vw;" >
    <h1 class="text" style="transform:skewX(-10deg);">Support The Future</h1>
    <p class="text" style="transform:skewX(-10deg);">By supporting Dulles Robotics, you help fulfill the mission of inspiring the Next Generation of innovators and thinkers.</p>
   </div>

</div>
<div class="cover"  id="#cover-img" style="display: flex;background-image: url('https://drc.aspencdn.me/photos/stateRAS.jpg'); background-repeat: no-repeat; background-position: center right;width:80vw; margin-left:20vw;position:absolute; top:0; height:38vh;z-index:0;"></div>

</div>
</div>
<script>
const width  = window.innerWidth || document.documentElement.clientWidth ||
document.body.clientWidth;
var coverImg = document.getElementById("#cover-img");
if (width < 768){
  console.log("smol display");
  var sheader = document.getElementById("#sheader");
  sheader.parentNode.removeChild(sheader);
}
</script>




    <div class="container" style="margin-top:40px;">


          <div class="container">

            <div class="row text-center" style="margin-bottom:50px;">
              <div class="col-sm-12">
                <h3 class="display-3" style="text-align:center; margin-bottom:20px;">Tiers</h3>
                <div  style="background-image: url('/img/tiers.png'); background-repeat: no-repeat; background-position: center;width:80vw;"></div>
              </div>

              <!--
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/build.jpg">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Build</h4>
                  <p class="lead-text text-justify lead" style="text-align:center;text-align:center;">The build team is charge of the building of our robots, both for FTC and FRC. They work against deadlines to ensure that the robot is ready for debugging, while also remaining in close communication with the Programming and Design teams to ensure the robot functions correctly and meets the original concept.</p>
                </div>
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/program.png">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Programming</h4>
                  <p class="lead-text text-justify lead" style="text-justify:auto;text-align:center;">The programming team is in charge of programming the instructions for what the robot is supposed to do. This includes programming the robot to respond with the intended results using a controller, as well as writing code for the robot to perform autonomously.  The programmers here at Dulles Robotics use Java.</p>
                </div>
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/design.png">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Design</h4>
                  <p class="lead-text text-justify lead" style="text-justify:auto;text-align:center;">The Design team is responsible for designing the robot. They produce sketches and CAD renderings of the robot prototype.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/pres.jpg">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Presentation</h4>
                  <p class="lead-text text-justify lead" style="text-justify:auto;text-align:center;">Presentation is responsible for the image of Dulles Robotics. They make the PIT displays, and other brand releated content including Graphics Design, and Maintaining this Website.</p>
                </div>
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/market.png">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Marketing</h4>
                  <p class="lead-text text-justify lead" style="text-justify:auto;text-align:center;">The marketing team handles the team's finances and sponsorship. Their focus is to raise money for the operations and competitions.</p>
                </div>
              -->
            </div>
          </div>

          <div class="col-sm-2 bot-sub"></div>

          <hr class="style20" />
          <div class="row" style="padding-top:10px; margin-left:0%;">
            <h4 class="display-3" style="font-size:40px; margin-left:-2px;">Tax Deductible</h4>
            <hr>
          </div>
          <div class="lead">
            <p>Dulles Robotics is a 501(c)3 tax-exempt organization and your donation is tax-deductible within the guidelines of U.S. law. To claim a donation as a deduction on your U.S. taxes, please keep your email donation receipt as your official record. We'll send it to you upon successful completion of your donation. Donations are also eligible for employer matching. Please contact your employer for more information!</p>
          </div>

</div>
</div>

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
