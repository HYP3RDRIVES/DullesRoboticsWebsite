<?php include "res/head.php" ?>
<!DOCTYPE html>
<html style="height:100%;">

<head>
  <title>Login - Dulles Robotics</title>
  
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
      <form onsubmit="return false" method="post">
      <label for="teamno">Email</label>
      <input id = "user-box" type=" text-center" class="form-control text-center" name="user">
	          <div class="invalid-feedback" id = "invalid-user" style="display:none">Invalid Username!</div>
        <div class="invalid-feedback" id = "user-taken" style="display:none">Username is already in use!</div>
      <label for="teamno">Password</label>
      <input id = "pass-box" type="password"  class="form-control text-center" name="pass">
      <button id="login-send" class="btn btn-primary" onclick="">Submit</button>
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
	
	<script>

	//Handle UI
	/*var exitLoginBtn = document.getElementById("login-exit");
	exitLoginBtn.addEventListener("click", function(){
	loginForm.style.display = "none";
	//Reveal all elements
	document.body.childNodes.forEach(function(element) {
		if (element.id == "pg-content") {
			element.style.display = "";
			}
		});
	});*/

	//Handle Login and Registration
	$(document).ready(function(){
		// Handle Login Button
        $('#login-send').click(function(){
            //var clickBtnValue = $(this).val();
            var ajaxurl = 'login_code.php';
            var username = $("#user-box").val();
            var password = $("#pass-box").val();
            console.log("Gathering Login Data");
            data =  {do_login: "do_login",
                    username:username,
                    password:password};
            console.log(data);
            // Perform Login to Server
            $.ajax({type:'post',url:ajaxurl, data, success:function (response) {
                console.log("Login Response: "+response);
                switch (response) {
                case "Invalid Username!":
                    console.log("Alert: Invalid Username!");
                    $("#invalid-user").css("display","");
                    $("#invalid-user").text("Invalid Username!");
                    if (!$("#user-box").hasClass("is-invalid")) {
						$("#user-box").addClass("is-invalid");
                    }
                    $("#user-taken").css("display","none");
                    $("#invalid-pass").css("display","none");
                    if ($("#pass-box").hasClass("is-invalid")) {
						$("#pass-box").removeClass("is-invalid");
                    }
                    break;
                case "Invalid Password!":
                    console.log("Alert: Invalid Password!");
                    $("#invalid-pass").css("display","");
                    if (!$("#pass-box").hasClass("is-invalid")) {
						$("#pass-box").addClass("is-invalid");
                    }
                    $("#invalid-user").css("display","none");
                    if ($("#user-box").hasClass("is-invalid")) {
						$("#user-box").removeClass("is-invalid");
                    }
                    break;
                case "User is banned!":
                	$("#invalid-user").css("display","");
                	$("#invalid-user").text("User is banned!");
                    if (!$("#user-box").hasClass("is-invalid")) {
						$("#user-box").addClass("is-invalid");
                    }
                    $("#user-taken").css("display","none");
                    $("#invalid-pass").css("display","none");
                    if ($("#pass-box").hasClass("is-invalid")) {
						$("#pass-box").removeClass("is-invalid");
                    }
                    break;
                case "Success (Regular)!":
					console.log("Alert: Regular Login Successful!");
					// Remove invalid markers
					$("#invalid-pass").css("display","none");
                    if ($("#pass-box").hasClass("is-invalid")) {
						$("#pass-box").removeClass("is-invalid");
                    }
                    $("#invalid-user").css("display","none");
                    if ($("#user-box").hasClass("is-invalid")) {
						$("#user-box").removeClass("is-invalid");
                    }
                    
                    // Prevent Login because we are already logged in
                    $("#pg-content").css("display","");
                    $("#login-form").css("display","none");
                    $("#chat-link").css("display","");
                    $("#login-link").text("Logout");
                    $("#user-link").text(username);
					$("#user-link").css("display","");
					
                    document.cookie = "username = "+username;
                    document.cookie = "password ="+password;
                    document.cookie = "loggedin ="+true;
                    document.cookie = "admin ="+false;
                    <?php $_SESSION['loggedin']= $_COOKIE['loggedin'];
                    $_SESSION['password']=$_COOKIE['password'];
                    $_SESSION['username']=$_COOKIE['username'];
                    $_SESSION['admin']=$_COOKIE['admin'];?>
                    break;
                case "Success (Admin)!":
                	console.log("Alert: Admin Login Successful!");
					// Remove invalid markers
					$("#invalid-pass").css("display","none");
                    if ($("#pass-box").hasClass("is-invalid")) {
						$("#pass-box").removeClass("is-invalid");
                    }
                    $("#invalid-user").css("display","none");
                    if ($("#user-box").hasClass("is-invalid")) {
						$("#user-box").removeClass("is-invalid");
                    }
                    
                    // Prevent Login because we are already logged in
                    $("#pg-content").css("display","");
                    $("#login-form").css("display","none");
                    $("#chat-link").css("display","");
                    $("#login-link").text("Logout");
                    $("#user-link").text(username);
					$("#user-link").css("display","");
				
                    document.cookie = "username = "+username;
                    document.cookie = "password ="+password;
                    document.cookie = "loggedin ="+true;
                    document.cookie = "admin ="+true;
                    <?php $_SESSION['loggedin']= $_COOKIE['loggedin'];
                    $_SESSION['password']=$_COOKIE['password'];
                    $_SESSION['username']=$_COOKIE['username'];
                    $_SESSION['admin']=$_COOKIE['admin'];?>
                    break;
                default:
					console.log("Unusual Response: "+response);
                    break;
                }
                
            }});
        });

        //Handle Registration
        $("#register-send").click(function(){
        	var ajaxurl = 'res/register_code.php';
            var username = $("#user-box").val();
            var password = $("#pass-box").val();
            console.log("Gathering Registration Data");
            data =  {do_register: "do_register",
                    username:username,
                    password:password};
            // Perform Login to Server
            $.ajax({type:'post',url:ajaxurl, data, success:function (response) {
                console.log("Registration Response: "+response);
                switch (response) {
                case "User Already Exists!":
                    console.log("Alert: Invalid Username!");
                    //$("#invalid-user").css("display","");
                    if (!$("#user-box").hasClass("is-invalid")) {
						$("#user-box").addClass("is-invalid");
                    }
                    $("#user-taken").css("display","");
                    $("#invalid-pass").css("display","none");
                    if ($("#pass-box").hasClass("is-invalid")) {
						$("#pass-box").removeClass("is-invalid");
                    }
                    break;
                case "Success!":
					console.log("Alert: Registration Successful!");
					// Remove invalid markers
					$("#invalid-pass").css("display","none");
                    if ($("#pass-box").hasClass("is-invalid")) {
						$("#pass-box").removeClass("is-invalid");
                    }
                    $("#invalid-user").css("display","none");
                    if ($("#user-box").hasClass("is-invalid")) {
						$("#user-box").removeClass("is-invalid");
                    }
                    $("#user-taken").css("display","");
                    // Prevent Login because we are already logged in
                    $("#pg-content").css("display","");
                    $("#login-form").css("display","none");
                    $("#chat-link").css("display","");
                    $("#login-link").text("Logout");
                    $("#user-link").text(username);
					$("#user-link").css("display","");
				
                    document.cookie = "username ="+username;
                    document.cookie = "password ="+password;
                    document.cookie = "loggedin ="+true;
                    document.cookie = "admin ="+false;
                    <?php $_SESSION['loggedin']= $_COOKIE['loggedin'];
                    $_SESSION['password']=$_COOKIE['password'];
                    $_SESSION['username']=$_COOKIE['username'];
                    $_SESSION['admin']=$_COOKIE['admin'];?>
                    break;
                }
                
            }});
        });
	});
</script>
  </footer>
</body>
</html>
