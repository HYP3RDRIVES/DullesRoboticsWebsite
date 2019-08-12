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
</head>
<body style="height:100%;">
	<?php
		include 'res/nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-forms').setAttribute('class', 'active dropdown-item');
	</script>

	<!-- Main Page -->
	<div class="container" style="height:100%;">
		<div class="row"></div>
		<h1 class="display-3">Forms and Documents</h1>
		<hr class="style14">

    <div class="col-sm-12 col-md-8" id="scrollspy-info">
      <div data-spy="scroll" data-target="#list-announ" data-offset="0" class="scrollspy-example">
    <h3>Interest Meeting Form</h3>
      <hr class="style2">
      <hr class="style12">
  <!-- Scribd Embed -->
      <div class="wsite-scribd">
    <div title="Scribd: interest_meeting_application_.docx" id="doc_389168948" style="background-color:#fff"><iframe style="border: 0px none;" src="http://www.scribd.com/embeds/389168948/content?access_key=key-KBZRKI55xhHonnEVw4p6&amp;jsapi=true&amp;xdm_e=http://dhsrobotics.weebly.com&amp;xdm_c=default1&amp;xdm_p=1" id="" width="100%" height="500" frameborder="0"></iframe></div>
    <script type="text/javascript">
    if (!window.scribd_js_loaded) {
      window.scribd_js_loaded = true;
      document.write("<scr"+"ipt type=\"text/javascript\" src=\"//www.scribd.com/javascripts/scribd_api.js\"></scr"+"ipt>");
    }
    </script><script type="text/javascript" src="//www.scribd.com/javascripts/scribd_api.js"></script>
    <script type="text/javascript">
    var scribd_doc_389168948 = scribd.Document.getDoc(389168948, "key-KBZRKI55xhHonnEVw4p6");
    scribd_doc_389168948.addParam("jsapi_version", 2);
    scribd_doc_389168948.addParam("height", 500);
    scribd_doc_389168948.addParam("width", "100%");
    scribd_doc_389168948.write("doc_389168948");
    </script>
    </div>
  <!--  Scribd Embed  -->
      <p class="lead">
<a href="https://docs.google.com/document/d/1HG8JYLzTcvJNR0Aec5MTyM6wgr_obxvYEHm7LpjGf_c/edit?usp=sharing" target="_blank" class="btn btn-primary">View in G Docs</a>
      </p>
    </div>
  </div>

	<!-- Footer -->
	<?php
		include 'res/footer.php';
	 ?>

	<!-- Scripts -->

	<!-- Bootstrap CDN -->
	<?php
		include 'res/cdn.php';
	 ?>
</body>
</html>
