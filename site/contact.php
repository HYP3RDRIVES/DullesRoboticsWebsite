<!--
Dulles High School Computer Science Club 2018-2019
Written By Adil Rasiyani, President
Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">

<head>
  <title>Contact - Dulles Robotics</title>
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
    document.getElementById('nav-bar-contact').setAttribute('class', 'active dropdown-item text-white');
  </script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

  <!-- Main Page -->


  <div class="container">
      <h1 class="display-3" style="text-align:center;">Contact Us</h1>
    <hr class="style14">
      <!--

Nav Box is currenly useless

      <div class="sticky-div" style="position:sticky; top:20px;">
        <div id="list-announ" class="list-group">
          <a class="list-group-item list-group-item-action" href="#list-item-1">Twitter</a>
          <a class="list-group-item list-group-item-action" href="#list-item-2">Facebook</a>
          <a class="list-group-item list-group-item-action" href="#list-item-3">Youtube</a>

        <a class="list-group-item list-group-item-action" href="#list-item-5">Discord</a>
          <a class="list-group-item list-group-item-action" href="#list-item-6">Github</a>
          <a class="list-group-item list-group-item-action" href="#list-item-7">Remind Feed</a>
    <	</div>
      </div>
    -->
    <div class="row">
      <div class="col-sm" style="margin-left:20px;">
          <h1 id="list-item-1" class="display-7">Youtube</h1>
          <iframe width="500" height="315" src="https://www.youtube-nocookie.com/embed/Y6uAwig27LI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div>
            <a href="https://www.youtube.com/channel/UC2LGV0aJWqBB2dNQNPcwoEg" class="btn btn-danger button-contact" data-toggle="tooltip" data-placement="bottom" title="YT: Dulles Robotics">View our Youtube Channel</a>
            <a href="https://www.youtube.com/channel/UC2LGV0aJWqBB2dNQNPcwoEg/featured?sub_confirmation=1" class="btn btn-danger button-contact">Subscribe</a>
        </div>
      </div>
    <hr class="style14">
      <div class="col-sm">
        <h1 class="display-7">E-Mail</h1>
          <a href="mailto:dullesrobotics@gmail.com" class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Email us at: dullesrobotics@gmail.com">Contact us via E-Mail</a>
          <hr/>
          <h1 class="display-7">Remind</h1>
          <a href="https://www.remind.com/?sign-up=true" class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Text @776d6f to 81010">Join our Remind group</a>
              <!-- <script src="https://widgets.remind.com/iframe.js?token=f6b921d0075701340fe10242ac110435&height=200"></script> -->
              <hr/>
              <h4 class="display-7">Github</h4>
<div class="github-card" data-user="DullesRobotics" theme="default" target="_blank"></div>
<script src="https://lab.lepture.com/github-cards/widget.js"></script>

        </div>
      </div>
    <hr class="style14">
    <div class="row">
          <div class="col-sm">
              <h1 id="list-item-1" class="display-7">Twitter</h1>
              <a class="twitter-timeline" data-width="450" data-height="700" data-dnt="true" data-theme="dark" href="https://twitter.com/dulles_robotics?ref_src=twsrc%5Etfw">Tweets by dulles_robotics</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>

          <div class="col-sm">
              <h1 id="list-item-2" class="display-7">Facebook</h1>
              <div class="fb-page" data-href="https://www.facebook.com/dullesrobotics/" data-tabs="timeline" data-width="450" data-height="700" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/dullesrobotics/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dullesrobotics/">Dulles Robotics</a></blockquote>
              </div>
    </div>
    </div>
    </div>
  </div>



  <!-- Footer -->


  <!-- Scripts -->

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
    <div id="fb-root"></div>

  </footer>
</body>

</html>
