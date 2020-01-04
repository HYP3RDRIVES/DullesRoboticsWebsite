<!--
    Dulles High School Computer Science Club 2018-2019
    Written By Adil Rasiyani, President
    Bootstrap v4.1
    Modified by Erica Miller, Zain Ahmed, Jacob Enerio, and Elliot Michlin for the Dulles Robotics Club 2019-2020.
-->

<!--Top Navigation Bar-->
<nav class="navbar navbar-expand-md  navbar-dark" id="navigator" style="background-color:#0f0e17;">
  <!-- <nav class="navbar navbar-expand-md" id="navbar" style="background-color: #555"> -->
  <div class="container-fluid">
    <!--Logo on the left-->
    <div class="navbar-header  animated fadeInDown">
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainNavBar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="/" class="navbar-brand">Dulles Robotics</a>
    </div>

    <!--Menu Bar-->
    <div class="collapse navbar-collapse " id="mainNavBar">
      <ul class="nav navbar-nav navbar-right ">
        <li class="nav-item animated fadeInDown" id="nav-bar-home"><a class="nav-link" href="/">Home</a></li>

        <li class="nav-item animated fadeInDown" id="nav-bar-about"><a class="nav-link" href="/about.php">About Us</a></li>
        <li class="nav-item animated fadeInDown" id="nav-bar-first"><a class="nav-link" href="/first.php"><i>FIRST</i></a></li>
        <li class="nav-item animated fadeInDown" id="nav-bar-sponsor"><a class="nav-link" href="/sponsors.php">Sponsors</a></li>
        <!--<li class="nav-item" id="nav-bar-resources"><a class="nav-link"href="resources.php">Resources</a></li>-->
        <!--      <li class="nav-item" id="nav-bar-archive"><a class="nav-link"href="archive.php">Archive</a></li> -->
        <!--      <li class="nav-item" id="nav-bar-archive"><a class="nav-link"href="https://media.dullesrobotics.com" target="_blank">Media Archive</a></li> -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  animated fadeInDown" href="#" id="nav-drop-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
          </a>
          <div class="dropdown-menu static" aria-labelledby="navbarDropdownMenuLink">

            <!--        <a id="nav-bar-ourstory" class="dropdown-item" href="story.php">Our Story</a> -->
            <a class="dropdown-item" id="nav-bar-announ" href="/announcements.php">Blog</a>
            <a id="nav-bar-contact" class="dropdown-item" href="/contact.php">Contact</a>
            <a id="nav-bar-robot" class="dropdown-item" href="/robots.php">Robots</a>
            <a id="nav-bar-resource" class="dropdown-item" href="/resources.php">Resources</a>
            <a id="nav-bar-officers" class="dropdown-item" href="/officers.php">Officers</a>
            <a id="nav-bar-cal" class="dropdown-item" href="/calendar.php">Calendar</a>
          </div>
        </li>

        <!--  <li class="nav-item" id="nav-bar-sponsor" ><a class="nav-link"href="login.php">Member Login</a></li> -->
      </ul>
      <!--Right aligned stuff -->


                <div class="navbar-collapse order-3 dual-collapse2">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item" id="nav-bar-login">
								<a class="btn btn-light text-dark" id="user-link" href="edit.php" style="display:none"></a>
                                 <a class="btn btn-light text-dark" id="login-link" href="/login.php">Login</a>
                            </li>

                        </ul>
                    </div>
    </div>
  </div>
</nav>

<!-- Script for login button -->
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


	var loginBtn = document.getElementById("login-link");

	var openLogin = true;
	$(document).ready(function() {
		var loginstats = getCookie("loggedin");
		console.log(loginstats);
		if (loginstats == "true") {

      var authstate = true;
      console.log("authstate "+ authstate);
			$("#user-link").text(getCookie("username"));
			$("#user-link").css("display","");
			$("#chat-link").css("display","");
			$("#login-link").text("Logout");
		}
	});
	loginBtn.addEventListener("click", function(){
			if ($("#login-link").text() == "Logout") {
				var ajaxurl = 'res/logout_code.php';
	            console.log("Logging Out");
	            data =  {do_logout: "do_logout"};
	            // Perform Login to Server
	            $.ajax({type:'post',url:ajaxurl, data, success:function (response) {

	            	}
				});
	            $("#login-link").text("Login");
                $("#user-link").text("");
                $("#chat-link").css("display","none");
                document.cookie = "loggedin = "+false;
                <?php $_SESSION['loggedin']= 0;?>

                //If we are in the profile page, send us to main page
                var path = window.location.pathname;
				var page = path.split("/").pop();
				var origpath = path.substring(0,path.length-page.length);

				console.log("Logging out on "+page);
				if (page == "profile.php" || page=="chat.php") {
					window.location.href = origpath + "index.php";
				}

				return;
			}

		  	else {
			  	if (openLogin) {
			  		$("#login-form").shakeLogin();
			  		openLogin = false;
			  	}

		  	}
		});
</script>
