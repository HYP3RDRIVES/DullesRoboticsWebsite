<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html >
<head>
    <title>Our Story - Dulles Robotics</title>
    <?php
    	include 'res/head.php';
     ?>
     <?php
       include 'res/nav.php';
     ?>
     <!--Set Active Page to 'active' in navbar (imported from nav.php)-->

      <script type="text/javascript">
       document.getElementById('nav-bar-ourstory').setAttribute('class', 'active dropdown-item');
     </script>

</head>
<body style="height:100%;text-align: center;" >


	<!-- Main Page -->


		<h1 class="display-3">Our Story</h1>




      <!-- Title -->


      <!-- Logo and Welcome  -->

      <!-- <div id="logo-and-welcome" class="row well border-0 border-secondary"> -->
        <!-- Logo -->
    <!--    <div class="col"> -->

      <!--    <img src="img/w.png" class="img-fluid" alt="Logo"> -->
         <!-- </div> -->


        <!-- Welcome Message -->
  <!--      <div class="col">
          <div class="row">
            <hr>
-->

	<div class="container-fluid" style="overflow-y:hidden; overflow-x:scroll; display:inline-block; position:absolute; bottom: 1px;" >
    <script>
    // Re-bind vertical mouse wheel scrolling to horizontal scrolling
  $('container-fluid').mousewheel(function(event, delta, deltaX, deltaY) {
  	event.preventDefault();
      var scrollPosition = $('container-fluid').scrollLeft() - deltaY*2 + deltaX*2;
      $('container-fluid').scrollLeft(scrollPosition);
  });
    </script>
                <hr class="style14" style="display:inline-block;">
                <div style="width:200%;">
                <div class="row special-row" >
                <div class="col-md-2"style=" padding: 30px;">

            <div class="scard" >
            <p class="lead text-justify">The first ever official year of Robotics was when I was in 8th grade. There was a guy named Vishnu Iyer, and at this time he'd have been a junior at Dulles. He started "Robotics", and you'll see why I put this in quotations very soon.
              I dont know much about this year but I know Mrs. Coffman used to host the meetings, they were very far apart and they were basically Physics 1, Physics 2 and Physics C lessons, it was all very theoretical.
  I entered Dulles and Vishnu became a Senior, I met him on facebook because I was looking for Robotics and he was the person that kept showing up. I asked him to teach me how electronics work and how to use hardware (I only knew how to do software up until this point). He spent a lot of time teaching me and convinced me to buy like $200-$300 worth of components (capacitors, resistors, transistors, etc).
</p>
</div>
</div>
  <div class="col"style=" padding: 30px;">
<div class="scard" >

<p class="lead text-justify">
  Mrs. Nguyen was our sponsor for that year. The "Robotics" club wasnt really active until second semester,  I recall the meetings were on Fridays, but we only ended up having 2 meetings the entire year.<br/> The first meeting, I walked in and Vishnu was standing at the front with Shreyas (he goes to MIT now) and there wera a bunch of other REALLY smart, and talented people. The first meeting was the Interest<br/> meeting and they were talking about how the club is gonna be focused around using Arduino and having small contests within the club. At that point FTC and FRC wasn't even in the air at this point nor was it in anyone's mind.
</p>
</div>
</div>
  <div class="col"style=" padding: 30px;">
<div class="scard">
<p class="lead text-justify">
  I recall this line very clearly, "We are going to actually use Physics to make sure everything we want to design works before building any of it, that means finding the ideal CoG, ideal voltage for the motors, etc". It was basically going to be a club where you join, theorize about robots, and then build maybe 1 or 2 small robots controlled by Arduinos and do small projects within the club.<br/> Basically it was CS club + Hardware to a degree. Then the second meeting I remember Vishnu taught us to use an LED and make it blink and then gave us a "homework" lesson to code a weird LED thingy, but we never had another meeting after that.
</p>
</div>
</div>
  <div class="col"style=" padding: 30px;">
<div class="scard">
<p class="lead text-justify">
At the end of that year, I asked him if I could take over the club since he's graduating. He was basically like "Oh yeah, sure, just talk to this guy named Kenneth, he's going to be a Junior and I think you and him will work well together"<br/> I met kenneth that summer, and we formulated a plan for the club next year (again, we didn't have FTC nor FRC in mind yet) and somewhere along here Austin joined and the plan was to keep using Arduinos and have it in Mrs.Nguyen's room. I remember as we were planning the interest meeting, we kept moving the date further and further since Mrs.Nguyen was busy.
</p>
</div>
</div>
  <div class="col"style=" padding: 30px;">
<div class="scard">
<p class="lead text-justify">
  At one point we received an email from a teacher named Brian Sonnier to ask us about the club. So one day afterschool we just met with him and then we started discussing FTC and how cool it would be to do that, and basically the entire plan for the club changed in an hour or two.<br/> I remember Mr. Sonnier was very scary at first and he was very strict and firm with us
  Eventually we were joking about doing FRC and Sonnier said "pfft yea right! its gonna be years before we do that!"
<br/>
<br/>
<strong>- Karim Karim, Dulles Robotics Alum, and Club Co-Founder</strong>

</p>
</div>
</div>
<div class="col"style=" padding: 30px;">
<div class="scard">
<p class="lead text-justify">
7494 Double stuff oreo!!

</p>
</div>
</div>
  <div class="col"style=" padding: 30px">
    <div class="scard" style="padding:0px; width:900px;">
      <?php
        include 'res/footer.php';
       ?>
    </div>
</div>


         </div>
       </div>

      <hr/>




<!-- Footer -->
<footer>

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
