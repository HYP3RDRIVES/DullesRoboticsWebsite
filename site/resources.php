<!DOCTYPE html>
<html style="height:100%;">

<head>
  <title>Resources - Dulles Robotics</title>
  <?php include 'res/head.php'; ?>
</head>

<body>
  <?php
		include 'res/nav.php';
	?>
  <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('nav-bar-resource').setAttribute('class', 'active dropdown-item text-white');
  </script>

  <!-- Main Page -->

  <div class="bodydiv" style="height:84.5vh;" style="overflow-y:hidden;">
    <div class="container" style="height:85.6%;">
      <h1 class="display-3">Resources</h1>
      <hr class="style14">
      <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Link</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a data-toggle="collapse" data-target="#downloadInterestCollapse" aria-expanded="false" aria-controls="downloadInterestCollapse" style="cursor:pointer;">Member Application</a></th>
      <td>Form to apply to become a member</td>
    </tr>
    <tr>
      <th scope="row"><a data-toggle="collapse" id="#docInterest2-btn" data-target="#docWaiverCollapse" aria-expanded="false" aria-controls="docWaiverCollapse" style="cursor:pointer;">Permission Forms</a></th>
      <td>Permission forms for Dulles Robotics</td>
    </tr>
    <tr>
      <th scope="row"><a href="articles/webdev.php" target="_blank">Intro to Web Development</a></th>
      <td>Web Development Basics Article</td>
    </tr>
  </tbody>
</table>

      <!-- interest meeting form -->

      <div class="collapse hover" id="downloadInterestCollapse">
        <div class="doc-card card-body">
          <a class="btn btn-primary" data-toggle="collapse" id="#docInterest-btn" href="#docInterestCollapse" role="button" aria-expanded="false" aria-controls="docInterestCollapse">Preview</a>
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
      <div class="collapse hover" id="docWaiverCollapse">
        <div class="doc-card card-body">
          <a class="btn btn-primary" data-toggle="collapse" id="#docInterest-btn" href="#docInterestCollapse2" role="button" aria-expanded="false" aria-controls="docInterestCollapse2">Preview</a>

            <a href="/files/roboforms.pdf" download="RoboForms" target="_blank" class="btn btn-info">Open in PDF Viewer <img height="18" width="18" src="/img/icon/file.svg"></img></a>
        </div>
      </div>


      <div class="collapse" id="docInterestCollapse2">
        <div class="doc-card card-body">
          <p class="lead">
            <object data="/files/roboforms.pdf" id="#pdfobj" type="application/pdf" width="640" height="720">
              If you're seeing this, your browser doesn't have a PDF viewer. Try to download instead!
            </object>
          </p>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
<footer style="margin-top:1300px;">
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
