
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
<script>
function getCookie(cname) {
      var name = cname + "=";
      //var decodedCookie = decodeURIComponent(document.cookie);
      var ca = document.cookie.split(';');
      for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }
    getCookie("loggedin");
    if (getCookie("loggedin")=="true"){
      console.log("logged in");

    }
    else{
      window.location.replace("/");
    }
    </script>

  <div class="container" style="min-height:50vh">
    <div class="row"></div>
    <h1 class="display-3" style="text-align:center;">Select Page to Edit</h1>
    <hr class="style14">

    <div class="container-fluid text-center">

      <a class="btn btn-primary" href="announcements.php">Blog</a>
      <a class="btn btn-primary active" href="#" >Robots</a>



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
