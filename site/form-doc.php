<!DOCTYPE html>
<html style="height:100%;">

<head>
  <title>Forms and Documents - Dulles Robotics</title>
  <?php include 'res/head.php'; ?>
</head>

<body>
  <?php
		include 'res/nav.php';
	?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('nav-bar-forms').setAttribute('class', 'active dropdown-item text-white');
  </script>

  <!-- Main Page -->

  <div class="bodydiv" style="height:84.5vh;" style="overflow-y:hidden;">
    <div class="container" style="height:85.6%;">
      <h1 class="display-3">Forms and Documents</h1>
      <hr class="style14">


      <!-- interest meeting form -->
      <h1 class="display-7">Interest Meeting Form</h1>
      <p>
        <a class="btn btn-primary" data-toggle="collapse" id="#docInterest-btn" href="#docInterestCollapse" role="button" aria-expanded="false" aria-controls="docInterestCollapse">View</a>
        <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#downloadInterestCollapse" aria-expanded="false" aria-controls="downloadInterestCollapse">
          Download <img height="10" width="15" src="/img/icon/chevron-down.svg"></img>
        </button>
      </p>
      <div class="collapse hover" id="downloadInterestCollapse">
        <div class="doc-card card-body">
            <a href="https://docs.google.com/document/d/1HG8JYLzTcvJNR0Aec5MTyM6wgr_obxvYEHm7LpjGf_c/edit" target="_blank" class="btn btn-primary">View in Google Docs <img height="15" width="15" src="/img/icon/external.svg"></img></a>
            <a href="/files/Interest-Meeting-Application.docx" download="InterestMeetingApp.docx" target="_blank" class="btn btn-primary">Open in Word <img height="18" width="18" src="/img/icon/file.svg"></img></a>
        </div>
      </div>
      <div class="collapse" id="docInterestCollapse">
        <div class="doc-card card-body">
          <p class="lead">
            <object data="/files/Interest Meeting Application.pdf" id="#pdfobj" type="application/pdf" width="640" height="720">
              If you're seeing this, your browser doesn't have a PDF viewer. Try to download instead!
            </object>
          </p>
        </div>
      </div>
      <hr class="style1">
      <!-- robotics forms -->
      <h1 class="display-7">Robotics Forms & Waivers</h1>
      <p>
        <a class="btn btn-primary" data-toggle="collapse" id="#docInterest2-btn" href="#docInterestCollapse2" role="button" aria-expanded="false" aria-controls="docInterestCollapse2">View</i></a>
        <a href="/files/roboforms.pdf" download="RoboForms" target="_blank" class="btn btn-info">Open in PDF Viewer <img height="18" width="18" src="/img/icon/file.svg"></img></a>
      </p>

      <div class="collapse" id="docInterestCollapse2">
        <div class="doc-card card-body">
          <p class="lead">
            <object data="/files/roboforms.pdf" id="#pdfobj" type="application/pdf" width="640" height="720">
              If you're seeing this, your browser doesn't have a PDF viewer. Try to download instead!
            </object>
          </p>
        </div>
      </div>
      <hr class="style1" style="margin-bottom:350px;">
    </div>
  </div>

  <script>
    var pdf1 = document.getElementById('#docInterest-btn');
    var pdf2 = document.getElementById('#docInterest2-btn');
    var pdf3 = document.getElementById('#pdfobj');

    if (networkType === '4g') {
      console.log("4g or faster connection");
    } else {
      pdf1.remove();
      pdf2.remove();
      pdf3.remove();
    }
  </script>


  <!-- Footer -->
<footer style="margin-top:500px;">
  <div>
    <?php include 'res/footer.php'; ?>
  </div>
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
