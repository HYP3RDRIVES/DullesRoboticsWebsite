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
    document.getElementById('nav-bar-forms').setAttribute('class', 'active dropdown-item text-white');
  </script>

  <!-- Main Page -->

  <div class="bodydiv" style="height:84.5vh;" style="overflow-y:hidden;">
    <div class="container" style="height:85.6%;">
      <h1 class="display-3">Forms and Documents</h1>
      <hr class="style14">


      <!-- interest meeting form -->
      <h1 class="display-4">Interest Meeting Form</h1>
      <p>
        <a class="btn btn-primary" data-toggle="collapse" id="#docInterest-btn" href="#docInterestCollapse" role="button" aria-expanded="false" aria-controls="docInterestCollapse">
          View</i>
        </a>
        <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#downloadInterestCollapse" aria-expanded="false" aria-controls="downloadInterestCollapse">
          Download <i class="fas fa-chevron-down"></i>
        </button>
      </p>
      <div class="collapse hover" id="downloadInterestCollapse">
        <div class="doc-card card-body">
          <p class="lead">
            <a href="https://docs.google.com/document/d/1HG8JYLzTcvJNR0Aec5MTyM6wgr_obxvYEHm7LpjGf_c/edit" target="_blank" class="btn btn-primary">View in Google Docs <i class="fas fa-external-link-alt"></i></a>
            <a href="/files/Interest-Meeting-Application.docx" download="InterestMeetingApp.docx" target="_blank" class="btn btn-primary">Open in Word <i class="fas fa-file-word"></i></a>
          </p>
        </div>
      </div>
      <div class="collapse" id="docInterestCollapse">
        <div class="doc-card card-body">
          <p class="lead">
            <iframe id="#pdfframe" src="https://docs.google.com/document/d/e/2PACX-1vQ9Qo8rktjxbVdwnaBY8w1MwlgUoexVAtLfbZiwlSyvpmDd4swsY_luhiLGs_1PE91iYeO7hwFBP4e_/pub?embedded=true" width="640" height="720"></iframe>
          </p>
        </div>
      </div>
      <hr class="style1">
      <!-- robotics forms -->
      <h1 class="display-4">Robotics Forms & Waivers</h1>
      <p>
        <a class="btn btn-primary" data-toggle="collapse" id="#docInterest2-btn" href="#docInterestCollapse2" role="button" aria-expanded="false" aria-controls="docInterestCollapse2">View</i></a>
        <a href="/files/roboforms.pdf" download="RoboForms" target="_blank" class="btn btn-info">Open in PDF Viewer <i class="fas fa-file-pdf"></i></a>
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
    var pdf4 = document.getElementById('#pdfframe');
    if (networkType === '4g') {
      console.log("4g or faster connection");
    } else {
      pdf1.remove()
      pdf2.remove()
      pdf3.remove()
      pdf4.remove()

    }
  </script>


  <!-- Footer -->
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
