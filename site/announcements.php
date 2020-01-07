<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html>

<head>
  <title>Blog - Dulles Robotics</title>
  <?php
    	include 'res/head.php';
     ?>
</head>

<body data-spy="scroll" data-target="#list-announ">

  <?php
		include 'res/nav.php';
	?>
  <script type="text/javascript">
    document.getElementById('nav-bar-announ').setAttribute('class', 'active dropdown-item text-white');
  </script>
  <!-- Main Page -->
  <div class="container">
    <h1 class="display-3" style="text-align:center;">Announcements & Blog</h1>
    <hr class="style14">
    <div class="row" id="all-sections-container">
      <div class="col-md-4 d-none d-md-block">
        <div class="sticky-div" style="position:sticky; top:20px;">
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-8" id="scrollspy-info">


      <div id = "blogContainer" data-spy="scroll" data-target="#list-announ" data-offset="0" class="scrollspy-example">
        
        <!--<a class="btn btn-primary" id="#oneBtn" onclick="oneEdit()">Edit</a>-->

        <script>


        /*function getCookie(cname) {
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

        var one = document.getElementById("b9");
        var btn = document.getElementById('#oneBtn');
        btn.parentNode.removeChild(btn);



            if (getCookie("loggedin")=="true"){
              one.appendChild(btn);

            }
            else{
              console.log("not logged in")
            }

          var editing = false;



          function oneEdit() {

            if (editing === true) {
              var btn = document.getElementById('#oneBtn');
              console.log("save function triggered");
              document.getElementById('b9').setAttribute('contenteditable', 'false');
              btn.setAttribute('class', 'btn btn-primary');
              btn.innerHTML = "Edit";
              editing = false;
              console.log(editing);
              return;

            }

            var btn = document.getElementById('#oneBtn');
            if (editing === false) {
              console.log("edit function triggered");
              document.getElementById('b9').setAttribute('contenteditable', 'true');
              btn.setAttribute('class', 'btn btn-success');
              btn.innerHTML = "Save";
              editing = true;
              console.log(editing);
              return;

            }

          }*/
        </script>
        <hr />
		

      </div>
    </div>
  </div>

  <script>
  //This is for saving/loading/editing/adding blogposts
  //Get cookie script
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
			
  //Do not run this function if there are already blogs in the database!
  var initSaveBlogs = function(){
	var blogs = document.getElementsByClassName("BlogPost");
	var blogDates = document.getElementsByClassName("BlogDate");
	for (var i = blogs.length-1; i >= 0; i--) {
		var blogDate = blogDates[i].innerHTML;
		var blogParts = blogDate.split("/"); 
		var dateComp = blogParts[2]+"-"+blogParts[1]+"-"+blogParts[0]+" 00:00:01";
		var ajaxurl = 'blog_code.php';
        var username = getCookie("username");
        var password = getCookie("password");
		console.log(dateComp);
            console.log("Gathering Login Data");
            data =  {add_blog_post: "add_blog_post",
                    username:username,
                    password:password,
					blog:blogs[i].innerHTML,
					date:dateComp};
    
            // Perform  to Server

            //Dont tell user if login or password is incorrect - security risk if you do
			console.log("Sending data");
            $.ajax({type:'post',url:ajaxurl, data, success:function (response) {
				console.log(response);
			}
		})
	}
  }
  
  //Load blogs when page is ready
  $(document).ready(function(){
		var ajaxurl = 'blog_code.php';
		data = {get_blogs: "get_blogs"};
		var oldDiv = undefined;
		$.ajax({type:'post',url:ajaxurl, data, success:function (response) {
				blogs = JSON.parse(response);
				var didFirst = false;
				for (let [key,value] of Object.entries(blogs)) {
					//First blog is null in the database so skip it!
					if (!didFirst) {
						didFirst = true;
						continue;
					}
					var newDiv = document.createElement("div");
					newDiv.id = "b"+value["id"];
					newDiv.classList.add("BlogPost");
					newDiv.innerHTML = value["blog"];
					if (oldDiv == undefined) {
						document.getElementById("blogContainer").appendChild(newDiv);
					}
					else {
						document.getElementById("blogContainer").insertBefore(newDiv,oldDiv);
					}
					var oldDiv = newDiv;
					
					//Add the edit button if we are allowed to
					if (getCookie("loggedin")=="true") {
						var editBlogBtn = document.createElement("a");
						editBlogBtn.classList.add("btn");
						editBlogBtn.classList.add("btn-primary");
						editBlogBtn.id = "editB"+value["id"];
						editBlogBtn.innerHTML = "Edit";
						editBlogBtn.blogID = value["id"];
						editBlogBtn.addEventListener("click",function() {
							var blogPost = document.getElementById("b"+this.blogID);
							if (this.innerHTML == "Edit") {
								blogPost.setAttribute('contenteditable', 'true');
								this.setAttribute('class', 'btn btn-success');
								this.innerHTML = "Save";
							}
							else {
								blogPost.setAttribute('contenteditable', 'false');
								this.setAttribute('class', 'btn btn-primary');
								this.innerHTML = "Edit";
								
								//Send updated blog to database
								ajaxurl = 'blog_code.php';
								var username = getCookie("username");
								var password = getCookie("password");
								
								console.log("Gathering Login Data");
								data =  {edit_blog_post: "edit_blog_post",
									username:username,
									password:password,
									blog:blogPost.innerHTML,
									id:this.blogID};
								console.log("Sending data");
								$.ajax({type:'post',url:ajaxurl, data, success:function (response) {
									console.log(response);
								}});
							}
						})
						document.getElementById("blogContainer").insertBefore(editBlogBtn,newDiv.nextSibling);
					}
				}
				
			}
       });
  });
  
  
  </script>

  <!-- preload ends -->
  <!-- Footer -->
  <footer>
    <?php include 'res/footer.php'; ?>
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
