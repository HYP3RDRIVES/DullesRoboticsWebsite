<!DOCTYPE html>
<html style="height:100vh; ">

<head>
  <title>Kickoff Countdown - Dulles Robotics</title>
  <?php include 'res/head.php'; ?>
</head>

<body style="background-image: url('https://drc.aspencdn.me/photos/rise-bg.png');   background-repeat: no-repeat;
  object-fit: scale-down;
    background-size: cover;
      background-position: left;
  -webkit-text-size-adjust: none;
  background-clip: padding-box;
   background-attachment: fixed;

overflow-y:hidden;
  text-align: center;

  ">
  <?php
		include 'res/nav.php';
	?>

  <div class="container" style="height:80vh; margin-top:4vh;;">
    <div class="row"></div>
    <h1 class="display-3" style="text-align:center;">Kickoff Countdown</h1>
    <hr class="style14">

    <div class="container   text-center" style="display:inline-block;">
<div id="clockdiv" style="font-size:50px;">

        <p><span class="days" id="day"></span>   Days  <span class="hours" id="hour"></span> Hours  <span class="minutes" id="minute"></span>  Minutes  <span class="seconds" id="second"></span> Seconds  </p>
        <p>CST / UTC -6</p>

</div>

<p id="demo"></p>

<script>

var deadline = new Date("jan 4, 2020 10:30:00").getTime();

var x = setInterval(function() {

var now = new Date().getTime();
var t = deadline - now;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);
document.getElementById("day").innerHTML =days ;
document.getElementById("hour").innerHTML =hours;
document.getElementById("minute").innerHTML = minutes;
document.getElementById("second").innerHTML =seconds;
if (t < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "TIME UP";
                document.getElementById("day").innerHTML ='0';
                document.getElementById("hour").innerHTML ='0';
                document.getElementById("minute").innerHTML ='0' ;
                document.getElementById("second").innerHTML = '0'; }
}, 1000);
</script>

    </div>
  </div>

  <footer style="position: absolute: bottom;">
    <script type="text/javascript">
      document.getElementById('nav-bar-cal').setAttribute('class', 'active dropdown-item text-white');
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
