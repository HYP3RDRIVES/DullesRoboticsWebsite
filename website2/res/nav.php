<!--
    Dulles High School Computer Science Club 2018-2019
    Written By Adil Rasiyani, President
    Bootstrap v4.1
-->

<!--Top Navigation Bar-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container-fluid">
            <!--Logo on the left-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="index.php" class="navbar-brand">Dulles Robotics</a>
            </div>

            <!--Menu Bar-->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="navbar-nav">
                    <li class="nav-item" id="nav-bar-home"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" id="nav-bar-announ"><a class="nav-link" href="announcements.php">Announcements</a></li>
                    <!--<li class="nav-item" id="nav-bar-resources"><a class="nav-link"href="resources.php">Resources</a></li>-->
              <!--      <li class="nav-item" id="nav-bar-archive"><a class="nav-link"href="archive.php">Archive</a></li> -->
                    <li class="nav-item" id="nav-bar-archive"><a class="nav-link"href="https://media.dullesrobotics.com" target="_blank">Media Archive</a></li>
                    <li class="nav-item" id="nav-bar-ourstory"><a class="nav-link"href="story.php" target="_blank">Our Story</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="nav-drop-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Club Info
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a id="nav-bar-about" class="dropdown-item" href="about.php">About Us</a>
                          <a id="nav-bar-contact" class="dropdown-item" href="contact.php">Contact Us</a>
                          <a id="nav-bar-forms" class="dropdown-item" href="form-doc.php">Forms and Documents</a>
                          <a id="nav-bar-officers" class="dropdown-item" href="officers.php">Officers</a>
                        </div>
                    </li>
                    <!--dropdown menu
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Link 4</a></li>
                            <li><a href="#">Link 5</a></li>
                            <li><a href="#">Link 6</a></li>
                        </ul>
                    </li>-->
                </ul>
                <!--Right aligned stuff
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logout</a></li>
                </ul>-->

            </div>
        </div>
    </nav>
