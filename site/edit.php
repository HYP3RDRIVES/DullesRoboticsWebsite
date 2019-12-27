
<!DOCTYPE html>
<html style="height:100%;">

<head>
  <title>Login - Dulles Robotics</title>
  <?php include 'res/head.php'; ?>
  <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
  <?php
  include '/secrets.php'
  ?>



</head>

<body>
  <?php
		include 'res/nav.php';
	?>

  <div class="container" style="min-height:50vh">
    <div class="row"></div>
    <h1 class="display-3" style="text-align:center;">Select Page to Edit</h1>
    <hr class="style14">

    <div class="container-fluid text-center">

      <a class="btn btn-primary" onclick="valueGrab()">Blog</a>
      <a class="btn btn-primary active" href="#" >Unavailable</a>



    </div>
  </div>
  <footer style="position: absolute: bottom;">
    <script type="text/javascript">
    // Initialize the FirebaseUI Widget using Firebase.


      document.getElementById('nav-bar-login').setAttribute('class', 'active nav-item  animated fadeInDown');
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
