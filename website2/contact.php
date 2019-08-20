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

	<!-- Main Page -->
	<div class="container">
		<div class="row" id="resources-title-row">
			<h1 class="display-3">Contact Us</h1>
		</div>
		<hr class="style14">
		<div class="row" id="all-sections-container">
			<div class="col-md-4 d-none d-md-block">
				<div class="sticky-div" style="position:sticky; top:20px;">
					<div id="list-announ" class="list-group">
						<a class="list-group-item list-group-item-action" href="#list-item-1">Twitter</a>
						<a class="list-group-item list-group-item-action" href="#list-item-2">Facebook</a>
						<a class="list-group-item list-group-item-action" href="#list-item-3">Youtube</a>

			<!--		<a class="list-group-item list-group-item-action" href="#list-item-5">Discord</a> -->
						<a class="list-group-item list-group-item-action" href="#list-item-6">Github</a>
				<!--		<a class="list-group-item list-group-item-action" href="#list-item-7">Remind Feed</a> -->
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-8" id="scrollspy-info">
				<div data-spy="scroll" data-target="#list-announ" data-offset="0" class="scrollspy-example">
					<h4 id="list-item-1" class="display-4">Twitter</h4>
					<br>
						<a class="twitter-timeline"   data-width="730" data-height="750" href="https://twitter.com/dulles_robotics?ref_src=twsrc%5Etfw">Tweets by dulles_robotics</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					<hr class="style3">
				  	<hr class="style18">

					<h4 id="list-item-2" class="display-4">Facebook</h4>
					      <iframe id="facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdullesrobotics%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

					<hr class="style3">
				  	<hr class="style18">

					<h4 id="list-item-3" class="display-4">Youtube</h4>
											<a href="https://www.youtube.com/channel/UC2LGV0aJWqBB2dNQNPcwoEg">Go to our Youtube channel!</a>


	<!---						<hr class="style3">
				  	<hr class="style18">

				        <h4 id="list-item-5" class="display-4">Discord</h4>
	-								<!--<iframe src="https://discordapp.com/widget?id=243589990536314891&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
										<a href="./officers.php">Contact an officer to visit our discord server!</a>  -->
					<hr class="style3">
				  	<hr class="style18">

					<h4 id="list-item-6" class="display-4">Github</h4>
          <div class="github-card" data-user="DullesRobotics" theme="default" target="_blank"></div>
        <script src="https://lab.lepture.com/github-cards/widget.js"></script>
					<!--	<a href="https://github.com/DullesRobotics">Go to our Github page!</a> -->

						<hr class="style3">
				  	<hr class="style18">

	<!--				<h4 id="list-item-7" class="display-4">Remind Feed</h4>
					  	<script src="https://widgets.remind.com/iframe.js?token=f6b921d0075701340fe10242ac110435&height=600&join=true"></script> -->
				</div>
			</div>
		</div>

	</div>
	<!-- Footer -->
	<?php
		include 'res/footer.php';
	 ?>

	<!-- Scripts -->
	<!-- Bootstrap Scripts -->
	<?php
		include 'res/cdn.php';
	 ?>
</body>
</html>
