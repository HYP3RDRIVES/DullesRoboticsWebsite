<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height:100%;">
<head>
    <title>Forms and Documents - Dulles Robotics</title>
    <?php include 'res/head.php'; ?>
    <script src="https://kit.fontawesome.com/7c99d65b69.js" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		include 'res/nav.php';
	?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-forms').setAttribute('class', 'active dropdown-item');
	</script>

	<!-- Main Page -->
<div class="bodydiv">
	<div class="container" style="height:85.6%;">
		<h1 class="display-3">Forms and Documents</h1>
		<hr class="style14">


    <!-- interest meeting form -->
		<h1 class="display-4">Interest Meeting Form</h1>
  <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#docInterestCollapse" role="button" aria-expanded="false" aria-controls="docInterestCollapse">
      View</i>
    </a>
    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#downloadInterestCollapse" aria-expanded="false" aria-controls="downloadInterestCollapse">
      Download <i class="fas fa-chevron-down"></i>
    </button>
  </p>
  <div class="collapse hover" id="downloadInterestCollapse">
    <div class="card card-body">
      <p class="lead">
          <a href="https://docs.google.com/document/d/1HG8JYLzTcvJNR0Aec5MTyM6wgr_obxvYEHm7LpjGf_c/edit" target="_blank" class="btn btn-primary">View in Google Docs <i class="fas fa-external-link-alt"></i></a>
          <a href="/files/Interest-Meeting-Application.docx" download="InterestMeetingApp.docx" target="_blank" class="btn btn-primary">Open in Word <i class="fas fa-file-word"></i></a>
      </p>
    </div>
  </div>
  <div class="collapse" id="docInterestCollapse">
    <div class="card card-body">
      <p class="lead">
        <iframe src="https://docs.google.com/document/d/e/2PACX-1vQ9Qo8rktjxbVdwnaBY8w1MwlgUoexVAtLfbZiwlSyvpmDd4swsY_luhiLGs_1PE91iYeO7hwFBP4e_/pub?embedded=true" width="640" height="720"></iframe>
      </p>
    </div>
  </div>
<hr class="style1">
<!-- robotics forms -->
<h1 class="display-4">Robotics Forms</h1>
<p>
<a class="btn btn-primary" data-toggle="collapse" href="#docInterestCollapse2" role="button" aria-expanded="false" aria-controls="docInterestCollapse2">View</i></a>
<a href="/files/roboforms.pdf" download="RoboForms" target="_blank" class="btn btn-info">Open in PDF Viewer <i class="fas fa-file-pdf"></i></a>
</p>

<div class="collapse" id="docInterestCollapse2">
<div class="card card-body">
  <p class="lead">
    <object data="/files/roboforms.pdf" type="application/pdf" width="640" height="720">
      If you're seeing this, your browser doesn't have a PDF viewer. Try to download instead!
    </object>
  </p>
</div>
</div>
<hr class="style1" style="margin-bottom:350px;">
</div>
</div>



<!-- Footer -->
<div>
<?php include 'res/footer.php'; ?>
</div>
<?php include 'res/cdn.php'; ?>
<!-- Scripts -->
<!-- activate tooltips -->
<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</footer>
</body>
</html>
