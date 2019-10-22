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
		document.getElementById('nav-bar-contact').setAttribute('class', 'active dropdown-item');
	</script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

	<!-- Main Page -->


	<div class="container">
		<div class="row" id="resources-title-row">
			<h1 class="display-3">Contact Us</h1>
		</div>
		<hr class="style14">
		<div class="row" id="all-sections-container">
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

			<div class="col-sm-12 col-md-8" id="scrollspy-info">
				<div data-spy="scroll" data-target="#list-announ" data-offset="0" class="scrollspy-example">
					<h4 id="list-item-1" class="display-4">Twitter</h4>
<a class="twitter-timeline" data-width="600" data-height="700" data-theme="light" href="https://twitter.com/dulles_robotics?ref_src=twsrc%5Etfw">Tweets by dulles_robotics</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


					<hr class="style3">
				  	<hr class="style18">

					<h4 id="list-item-2" class="display-4">Facebook</h4>
          <div class="fb-page" data-href="https://www.facebook.com/dullesrobotics/" data-tabs="timeline" data-width="600" data-height="700" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/dullesrobotics/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dullesrobotics/">Dulles Robotics</a></blockquote></div>

    <!--      <a href="https://www.facebook.com/dullesrobotics/" class="btn btn-primary button-contact">Follow</a>
          <a href="https://m.me/dullesrobotics" class="btn btn-primary button-contact">Message Us</a> -->
					<!-- <iframe id="facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdullesrobotics%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->

					<hr class="style3">
				  	<hr class="style18">

					<h4 id="list-item-3" class="display-4"><!-- <img src="/img/ytube.png" class="img-fluid" style="height: 10%; width: 10%;"></img>--> Youtube</h4>
          <a href="https://www.youtube.com/channel/UC2LGV0aJWqBB2dNQNPcwoEg" class="btn btn-danger button-contact" data-toggle="tooltip" data-placement="top" title="YT: Dulles Robotics">View our Youtube Channel</a>
          <a href="https://www.youtube.com/channel/UC2LGV0aJWqBB2dNQNPcwoEg/featured?sub_confirmation=1" class="btn btn-danger button-contact">Subscribe</a>

										<!--	<a href="https://www.youtube.com/channel/UC2LGV0aJWqBB2dNQNPcwoEg">Go to our Youtube channel!</a> -->
                      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Y6uAwig27LI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </hr>
					<hr class="style3">
				  	<hr class="style18">

					<h4 id="list-item-6" class="display-4">Github</h4>
          <div class="github-card" data-user="DullesRobotics" theme="default" target="_blank"></div>
        <script src="https://lab.lepture.com/github-cards/widget.js"></script>
					<!--	<a href="https://github.com/DullesRobotics">Go to our Github page!</a> -->

						<hr class="style3">
				  	<hr class="style18">

            <h4 id="list-item-5" class="display-4">E-Mail</h4>
                  <a href="mailto:dullesrobotics@gmail.com" class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Email us at: dullesrobotics@gmail.com">Contact us via E-Mail</a>
                </div>
                <hr class="style3">
                <hr class="styleSpace">

	<!--				<h4 id="list-item-7" class="display-4">Remind Feed</h4>
					  	<script src="https://widgets.remind.com/iframe.js?token=f6b921d0075701340fe10242ac110435&height=600&join=true"></script> -->
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
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<div id="fb-root"></div>

</footer>
</body>
</html>
