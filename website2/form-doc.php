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
			<h1 class="display-3">Forms And Documents</h1>
		</div>
		<hr class="style14">
		<div class="row" id="all-sections-container">
			<div class="col-md-4 d-none d-md-block">

			</div>
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
								https://docs.google.com/document/d/1HG8JYLzTcvJNR0Aec5MTyM6wgr_obxvYEHm7LpjGf_c/edit?usp=sharing
							</p>
						<hr class="style3">
						<br>
					 <!-- 	<h3>WANTED: Dead or Alive!</h3>
					  		<hr class="style2">
							<p class="small lead">69 Lewdatic Wuz Here 2069</p>
							<hr class="style12">
							<p class="lead">
								I'm looking for a blog post template. The reward is 69 jellybeans! Who's up for it! Also we have bounties on this kid:
								<ul class="list-group-flush">
									<li class="list-group-item-text lead"><em>Loonatic:</em> Erica Miller</li>
								</ul>
							</p>
						<hr class="style3">
				  	<hr class="style18">
-->

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
