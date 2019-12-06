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
</head>

<body>
<style>
.special-row{
  padding-bottom: 50px;
}
</style>
  <?php
		include 'res/nav.php';
	?>
  <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('nav-bar-sponsor').setAttribute('class', 'active nav-item');
  </script>
  <!-- Main Page -->
  <div class="container" style="display: table; vertical-align:center; align-content:center; display:table; ">
    <div class="col-md-12">
      <h3 class="display-3" style="text-align:center;">Sponsors</h3>
    </div>
    <hr class="style1" />
    <!-- Title -->
    <h1 class="display-3">Title Sponsor</h1>
    <div class="row special-row block">
      <!-- <div class="col-md-2 bot-sub"></div> -->
      <div class="col-md-6" style=" height:300px; width:100%;">
        <img src="/img/sponsor/wm.webp" class="img-fluid img-center" alt="wm" style="padding:30px;  align-self: right;">
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-1" style="text-align:left; font-size:66px;">​​Waste Management</h4>
        </div>

        <div class="row">
          <p class="lead text-justify">Our title sponsor, WM, is our biggest supporter and strives to make us the best we could possibly be by providing mentors and financial assistance. This company works very effectively by supporting the young
            generations and helping our team members get the education needed in the real world. With the gracious support of WM, Team 7494 has been and will be able to reach new heights and continue to succeed.</p>
        </div>
        <div class="row">
          <a class="btn btn-primary" href="https://www.wm.com/">Website <img height="12" width="15" src="/img/icon/external.svg"></img></a>
        </div>
      </div>
      <!-- <div class="col-md-2 bot-sub"></div> -->
    </div>

    <hr class="style18" />


    <h1 class="display-3">Primary Tier</h1>
    <div class="row special-row block">

            <div class="col-md-6 text-center">
              <img src="https://static.contentres.com/media/images/2ffc6847-c6aa-4624-aa7c-796d54d4dae6.jpg" class="img-fluid img-center center-block" alt="nasa" style="padding:10px; height:100%; width: 75%;">
            </div>
            <div class="col-md-6">
              <div class="row">
                <h4 class="display-1" style="font-size:60px">TMiller Financial</h4>
              </div>
              <div class="row">
                <p class="lead text-justify">TMiller Financial has graciously supported us!</p>
              </div>
              <div class="row">
                <a class="btn btn-primary" href="https://www.tmillerfinancial.com/">Website <img height="12" width="15" src="/img/icon/external.svg"></img></a>
              </div>
            </div>

          </div>

<hr class="style18" />
<h1 class="display-3">Grants</h1>
          <div class="row special-row block">

            <div class="col-md-6 text-center">
              <img src="/img/sponsor/nasa.webp" class="img-fluid img-center center-block" alt="nasa" style="padding:10px; height:100%; width: 75%;">
            </div>
            <div class="col-md-6">
              <div class="row">
                <h4 class="display-1" style="font-size:60px">NASA</h4>
              </div>
              <div class="row">
                <p class="lead text-justify">NASA and their yearly grants have allowed us to continue to pay for registration and participate in FRC. Their continued support through grants is greatly appreciated.</p>
              </div>
              <div class="row">
                <a class="btn btn-primary" href="https://www.nasa.gov/">Website <img height="12" width="15" src="/img/icon/external.svg"></img></a>
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
