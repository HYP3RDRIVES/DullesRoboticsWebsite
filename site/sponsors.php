<!--
	Dulles Robotics Club 2019-2020
	Written By Zain Ahmed
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">

<head>
  <title>Sponsors - Dulles Robotics</title>
  <?php
    	include 'res/head.php';
     ?>
  <meta property="og:title" content="Dulles Robotics Club - Sponsors"/>
  <meta property="og:image" content="/img/w.png"/>
  <?php
		include 'res/nav.php';
	?>
</head>

<body style="max-width:100vw;overflow-x:hidden;">
<style>
.special-row{
  padding-bottom: 50px;
}
</style>

  <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		if (isMobile) {
  			var an = document.getElementById('#animator');
        an.remove;
		} else {
			console.log("You are using Desktop");
		}
    document.getElementById('nav-bar-sponsor').setAttribute('class', 'active nav-item  animated fadeInDown');
  </script>
  <!-- Main Page -->
  <div class="container" style="display: table; vertical-align:center; align-content:center; display:table; ">
    <div class="col-md-12">
      <h3 class="display-3 animated fadeInDown" style="text-align:center;">Sponsors</h3>
    </div>
    <hr class="style1 animated zoomIn" />
    <!-- Title -->
    <div class="wm">
    <h1 class="display-3 animated fadeInLeft">Title Sponsor</h1>
    <div class="row special-row block">
      <!-- <div class="col-md-2 bot-sub"></div> -->
      <div class="col-md-6" style=" height:300px; width:100%;">
        <img src="/img/sponsor/wm.png" class="img-fluid img-center animated fadeInLeft" alt="wm" style="padding:30px;  align-self: right;">
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-1 animated fadeInRight" style="text-align:left; font-size:66px;">​​Waste Management</h4>
        </div>

        <div class="row">
          <p class="lead text-justify animated fadeInRight">Our title sponsor, WM, is our biggest supporter and strives to make us the best we could possibly be by providing mentors and financial assistance. This company works very effectively by supporting the young
            generations and helping our team members get the education needed in the real world. With the gracious support of WM, Team 7494 has been and will be able to reach new heights and continue to succeed.</p>
        </div>
        <div class="row">
          <a class="btn btn-tertiary animated fadeInRight" href="https://www.wm.com/">Website <img height="12" width="15" src="/img/icon/external.svg"></img></a>
        </div>
      </div>
      <!-- <div class="col-md-2 bot-sub"></div> -->
    </div>
  </div>

    <hr class="style18 animated zoomIn" />
<div class="primary">

    <h1 class="display-3 animated fadeInLeft">Primary Tier</h1>
    <div class="row special-row block">

            <div class="col-md-6 text-center">
              <img src="https://static.contentres.com/media/images/2ffc6847-c6aa-4624-aa7c-796d54d4dae6.jpg" class="img-fluid img-center center-block  animated fadeInLeft" alt="tmiller" style="padding:10px; height:100%; width: 75%;">
            </div>
            <div class="col-md-6">
              <div class="row">
                <h4 class="display-1 animated fadeInRight" style="font-size:60px">TMiller Financial</h4>
              </div>
              <div class="row">
                <p class="lead text-justify animated fadeInRight">TMiller Financial has graciously supported us!</p>
              </div>
              <div class="row">
                <a class="btn btn-tertiary animated fadeInRight" href="https://www.tmillerfinancial.com/">Website <img height="12" width="15" src="/img/icon/external.svg"></img></a>
              </div>
            </div>

          </div>
        </div>

<hr class="style18 animated zoomIn" />
<div class="grant">
<h1 class="display-3 animated fadeInLeft">Grants</h1>
          <div class="row special-row block">

            <div class="col-md-6 text-center">
              <img src="/img/sponsor/nasa.png" class="img-fluid img-center center-block animated fadeInLeft" alt="nasa" style="padding:10px; height:100%; width: 75%;">
            </div>
            <div class="col-md-6">
              <div class="row">
                <h4 class="display-1 animated fadeInRight" style="font-size:60px">NASA</h4>
              </div>
              <div class="row">
                <p class="lead text-justify animated fadeInRight">NASA and their yearly grants have allowed us to continue to pay for registration and participate in FRC. Their continued support through grants is greatly appreciated.</p>
              </div>
              <div class="row">
                <a class="btn btn-tertiary animated fadeInRight" href="https://www.nasa.gov/">Website <img height="12" width="15" src="/img/icon/external.svg"></img></a>
              </div>
            </div>

          </div>

  </div>
  <div class="row" style="padding-top:10px; display: inline; ">
    <h4 class="display-3" style="font-size:40px; margin-left:-2px;">Support Us</h4>
        <div class="lead justify-content-center;" style="justify:center; align-items: center;">
          <p>Click to view our Sponsorship Packet, for additional information, contact us at <a class="badge badge-secondary" style="font-weight:0.5px;" href="marilto:DullesRobotics@gmail.com">dullesrobotics@gmail.com</a>. </p>
    <a class="btn btn-green" href="/files/sponsorship.pdf">Sponsorship Packet!</a>
  </div>



 </div>
  <div class="row" style="padding-top:10px; margin-left:0%;">
    <h4 class="display-3" style="font-size:40px; margin-left:-2px;">Tax Deductible</h4>
    <hr>
  </div>
  <div class="lead">
    <p>Dulles Robotics is a 501(c)3 tax-exempt organization and your donation is tax-deductible within the guidelines of U.S. law. To claim a donation as a deduction on your U.S. taxes, please keep your email donation receipt as your official record. We'll send it to you upon successful completion of your donation. Donations are also eligible for employer matching. Please contact your employer for more information!</p>
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
