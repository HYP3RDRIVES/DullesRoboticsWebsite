<!DOCTYPE html>
<html style="height:100%;">

<head>
  <title>Calendar - Dulles Robotics</title>
  <?php include 'res/head.php'; ?>
</head>

<body>
  <?php
		include 'res/nav.php';
	?>

  <div class="container">
    <div class="row"></div>
    <h1 class="display-3">Calendar</h1>
    <hr class="style14">

    <div class="container">
      <iframe src="https://calendar.google.com/calendar/embed?src=gc3570831acr65itavaos3qh5s%40group.calendar.google.com&ctz=America%2FChicago" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
  </div>
  <footer style="position: absolute: bottom;">
    <script type="text/javascript">
      document.getElementById('nav-bar-officers').setAttribute('class', 'active dropdown-item text-white');
    </script>

    <?php
      include 'res/footer.php';
    ?>
    <?php
      include 'res/cdn.php';
    ?>
    <script type="text/javascript">
      $(function() {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </footer>
</body>
</html>
