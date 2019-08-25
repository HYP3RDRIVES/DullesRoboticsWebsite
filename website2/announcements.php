<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html>
<head>
    <title>Announcements - Dulles Robotics</title>
    <?php
    	include 'res/head.php';
     ?>
</head>
<body data-spy="scroll" data-target="#list-announ">

	<?php
		include 'res/nav.php';
	?>
	<!-- Main Page -->
	<div class="container">
		<div class="row" id="resources-title-row">
			<h1 class="display-3">Announcements</h1>
		</div>
		<hr class="style14">
		<div class="row" id="all-sections-container">
			<div class="col-md-4 d-none d-md-block">
				<div class="sticky-div" style="position:sticky; top:20px;">


					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-8" id="scrollspy-info">
				<div data-spy="scroll" data-target="#list-announ" data-offset="0" class="scrollspy-example">
					<h4 id="list-item-1" class="display-4">General Announcements</h4>
					<br>
          <h3>Parent Meeting</h3>
            <hr class="style2">
            <p class="small lead">23 Aug 2019</p>
            <hr class="style12">
            <p class="lead">
              Parent meeting on the <strong>4th of September</strong> at 5:30 PM, before open house.
            </p>
            <h3>General meeting</h3>
              <hr class="style2">
              <p class="small lead">23 Aug 2019</p>
              <hr class="style12">
              <p class="lead">
                First general meeting on 3rd Sept.
              </p>

						<h3>Interest Meetings</h3>
							<hr class="style2">
							<p class="small lead">19 Aug 2019</p>
							<hr class="style12">
							<p class="lead">
								Interest meetings are on Aug 23rd, and Aug 27th in Room G102 (behind the cafeteria) at 3 P.M.
							</p>
						<hr class="style3">
						<br>
					  	<h3>New Website!</h3>
					  		<hr class="style2">
							<p class="small lead">9 Aug 2019</p>
							<hr class="style12">
							<p class="lead">
							 As you can probably tell, we have completely overhauled our site, including switching from JS to PHP, as well as changing the look and feel. This should allow for a better user experience, and is also more efficient.
								<ul class="list-group-flush">

								</ul>
							</p>
						<hr class="style3">
				  	<hr class="style18">


				</div>
			</div>
		</div>

	</div>

	<!-- Footer -->
	<?php
		include 'res/footer.php';
	 ?>

	<!-- Scripts -->
	<script type="text/javascript">
		document.getElementById('nav-bar-announ').setAttribute('class', 'active nav-item');
	</script>

	<!-- Bootstrap CDN -->
	<?php include 'res/cdn.php';
	 ?>
</body>
</html>
