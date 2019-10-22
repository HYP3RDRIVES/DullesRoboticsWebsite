<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <title>Robots - Dulles Robotics</title>
    <?php
    include 'res/head.php';
    ?>
    <meta property="og:title" content="Dulles Robotics Club">
    <meta property="og:image" content="/img/mock3.png">
    <meta name="description" content="The Dulles High School Robotics Club. We are a robotics club based out of Dulles High School in Sugar Land, TX. We have FRC team #7494 and FTC teams #12456, and #13822">
    <meta name="keywords" content="Dulles Robotics, Dulles Robotics Club, Dulles High School, Dulles High School Robotics Club, FRC 7494, Circuit Bizurkers, Big Red, 12456, 13822, Robovikings, Robovikes, Circuit Bizurkers #7494, Circuit Beserkers, #7494, #12456, #13822, #13822 Robovikings, #12456 Big Red">

</head>
<body style="background-color:white; ">

<?php
include 'res/nav.php';

?>



<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
<script type="text/javascript">
    document.getElementById('navigator').setAttribute('class', 'bg-dark navbar navbar-expand-md  navbar-dark');
    document.getElementById('nav-bar-robot').setAttribute('class', 'active nav-item');

</script>
<!-- Main Page -->


<hr class="style14">
<div class="container text-dark" style="display: table; vertical-align:center; align-content:center; display:table; ">
    <div class="col-md-12">
        <h3 class="display-2" style="text-align:center;">Robots</h3>
    </div>
    <hr class="style1" />
    <!-- Title -->
    <div class="row special-row block">
        <!-- <div class="col-md-2 bot-sub"></div> -->
        <div class="col-md-6" style=" height:300px; width:100%;">
            <img src="/img/w.png" class="img-fluid img-center"  alt="wm" style="padding:30px;  align-self: right;">
        </div>
        <div class="col-md-6" >
            <div class="row">
                <h4 class="display-2" style="text-align:left; font-size:85px;">​​Javelin</h4>
            </div>
            <div class="row">
                <p class="lead text-justify">Javelin is our first robot to compete in FRC, on <strong> team 7494. </strong></p>
                <div class="col-md-6 inner" style="padding:10px;">


                            <ul class="unstyled">
                                <h2>Specs</h2>
                                <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light" >Name</span> Javelin</li>

                                <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> 120 lbs</li>

                                <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span>  Deep Space</li>

                                <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span>  7494</li>


                            </ul>
                </div>

                <div class="col-md-6 inner" style="padding:10px;">


                    <ul class="unstyled">
                        <h2>Comps</h2>
                        <li class="lead large rspec"> <span class="badge badge-primary text-light" >FIT Channelview</span> Finalist Alliance</li>

                        <li class="lead large rspec"> <span class="badge badge-primary text-light">FIT Pasadena</span> Rookie All Stars</li>

                        <li class="lead large rspec"> <span class="badge badge-primary text-light">FIT DCMP</span> Safety Award, Rookie All Stars</li>

                        <li class="lead large rspec"> <span class="badge badge-primary text-light">Turing Division</span></li>

                    </ul>
                </div>
                <ul>
                    <li class="lead text-justify">Rigid build allows for effective defense</li>
                    <li class="lead text-justify">Fast Hatch Rate</li>
                </ul>
            </div>
        </div>
        <!-- <div class="col-md-2 bot-sub"></div> -->
    </div>

    <hr class="style1" />

    <div class="row special-row block">

        <div class="col-md-6 text-center" style="align-content:center;">
            <img src="/img/mock3.jpg" style="width: 450px; height: 450px; opacity: 10%" class="img-fluid img-center" alt="twc"  style="padding:20px; align-self:center;  width:65%">
        </div>
        <div class="col-md-6" >
            <div class="row">
                <h4 class="display-2" style="text-align:left; font-size:85px;">​​Mock 3</h4>
            </div>
            <div class="row">
                <p class="lead text-justify">Mock 3 was the robot used in FTC Rover Ruckus by team <strong>#12456 Big Red for the 2017-2018 season</strong></p>
                <div class="col-md-6 inner" style="padding:10px;">


                    <ul class="unstyled">
                        <h2>Specs</h2>
                        <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light" >Name</span> Mock 3</li>

                        <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> ~35 lbs</li>

                        <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span>  Relic Recovery</li>

                        <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span>  12456</li>
                    </ul>
                </div>
                <div class="col-md-6 inner" style="padding:10px;">


                    <ul class="unstyled">
                        <h2>Comps</h2>
                        <li class="lead large rspec"> <span class="badge badge-primary text-light" > Houston-Southwest League Meet</span></li>

                        <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Regional</span></li>

                        <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>

                        <li class="lead large rspec"> <span class="badge badge-primary text-light"> Last Chance Qualifier (San Jacinto College) </span></li>

                        <li class="lead large rspec"> <span class="badge badge-primary text-light">Texas State Championships</span></li>


                    </ul>
                </div>
            </div>
        </div>
        </div>



    <hr class="style1" />

</div>



<!-- Logo and Welcome -->

<!-- Footer -->
<footer>
    <?php include 'res/footer.php'; ?>
    <?php include 'res/cdn.php'; ?>
    <!-- Scripts -->
    <!-- activate tooltips -->
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script src="https://aspencdn.me/bootstrap/4.3.1/js/bootstrap.bundle.js"></script>
</footer>
</body>
</html>
