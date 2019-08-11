<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html>
<head>
    <title>Announcements</title>
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
					<div id="list-announ" class="list-group">
					  <a class="list-group-item list-group-item-action" href="#list-item-1">General Announcements</a>
					  <a class="list-group-item list-group-item-action" href="#list-item-2">Remind Feed</a>

					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-8" id="scrollspy-info">
				<div data-spy="scroll" data-target="#list-announ" data-offset="0" class="scrollspy-example">
					<h4 id="list-item-1" class="display-4">General Announcements</h4>
					<br>
						<h3>School will open soon</h3>
							<hr class="style2">
							<p class="small lead">10 May 2019</p>
							<hr class="style12">
							<p class="lead">
								School begins on Aug 14th!
							</p>
						<hr class="style3">
						<br>
					  	<h3>New Website!</h3>
					  		<hr class="style2">
							<p class="small lead">9 May 2019</p>
							<hr class="style12">
							<p class="lead">
							 As you can probably tell, we have complelty overhauled our site, including switching from JS to PHP, as well as changing the look and feel. This should allow for a better user experience, and is also more efficient.
								<ul class="list-group-flush">
									<li class="list-group-item-text lead"><em>Loonatic:</em> Erica Miller</li>
								</ul>
							</p>
						<hr class="style3">
				  	<hr class="style18">

					<h4 id="list-item-2" class="display-4">Remind Feed</h4>
					  	<script src="https://widgets.remind.com/iframe.js?token=f6b921d0075701340fe10242ac110435&height=600&join=true"></script>
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
