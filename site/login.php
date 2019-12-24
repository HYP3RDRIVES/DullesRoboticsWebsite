
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

  <div class="container">
    <div class="row"></div>
    <h1 class="display-3" style="text-align:center;">Admin Portal</h1>
    <hr class="style14">

    <div class="container-fluid text-center">

      <p class="text-danger" style="display:none;" id="#errorMsg">Your username or password is invalid! Try again!</p>
      <form method="post">
      <label for="teamno">Email</label>
      <input type=" text-center" class="form-control text-center" name="user">
      <label for="teamno">Password</label>
      <input type="password"  class="form-control text-center" name="pass">
      <button class="btn btn-primary" onclick="valueGrab()">Submit</button>
    </form>
      <script>
      function valueGrab(){
      var email = document.getElementsByName("user")[0].value;
      var password = document.getElementsByName("pass")[0].value;
      console.log(email);
      console.log(password);
      var ui = new firebaseui.auth.AuthUI(firebase.auth());
      ui.start('#firebaseui-auth-container', {
        signInOptions: [
          firebase.auth.EmailAuthProvider.PROVIDER_ID
  ],
  // Other config options...
});


firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  document.getElementById('#errorMsg').style.display = "block";
  // ...
});
}
</script>
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
