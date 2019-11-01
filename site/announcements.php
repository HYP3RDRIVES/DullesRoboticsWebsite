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
    document.getElementById('nav-bar-announ').setAttribute('class', 'active dropdown-item');
  </script>
  <!-- Main Page -->
  <div class="container">
    <div class="row" id="resources-title-row">
      <h1 class="display-3">Announcements & Blog</h1>
    </div>
    <hr class="style14">
    <div class="row" id="all-sections-container">
      <div class="col-md-4 d-none d-md-block">
        <div class="sticky-div" style="position:sticky; top:20px;">


        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-8" id="scrollspy-info">


      <div data-spy="scroll" data-target="#list-announ" data-offset="0" class="scrollspy-example">
        <h4 id="list-item-1" class="display-4">General Announcements & Blog</h4>
        <br>
        <h3>FTC Houston SW League Scrimmage</h3>
        <hr class="style2">
        <p class="small lead">18 Oct 2019</p>
        <hr class="style12">
        <p class="lead"> Don't forget to log this contest! <br />Rookie members: what did you learn? What did you do? How did you feel? <br />Members that taught the workshops: What did you teach, etc. Also reflect on the contest! What went well and
          what can be improved upon?
          <br />Also, a BIG shoutout for <strong>Jacob, Erica, and Danielle</strong> for coming in and nailing us an outreach event as well as a good rep with the Missouri City Library!


        </p>

        <div id="imagecarousel" class="carousel slide carousel-fade" data-ride="carousel" style="width: 480px; height: 299px; overflow:hidden;" interval="600">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="indxcrop" style="width:580px; padding-right:40px;">
                <img class="d-block w-100 " src="https://drc.aspencdn.me/photos/bigred.jpg" alt="Second slide" style="width:580px; ">
              </div>
            </div>
            <div class="carousel-item ">
              <div class="indxcrop" style="width:580px; padding-right:40px;">
                <img class="d-block w-100 " src="https://drc.aspencdn.me/photos/rohan.jpg" alt="Second slide" style="width:580px; ">
              </div>
            </div>
            <div class="carousel-item">
              <div class="indxcrop" style="width:580px; padding-right:40px;">
                <img class="d-block w-100 " src="https://drc.aspencdn.me/photos/10581.jpg" alt="Third slide" style="width: 480px; height: 299px;">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#imagecarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#imagecarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <hr />
        <h3>Upcoming Competitions</h3>
        <hr class="style2">
        <p class="small lead">18 Oct 2019</p>
        <hr class="style12">
        <p class="lead">

          Oct 26 - FTC SW League Scrimmage <br />
          Nov 16 - FTC SW League Match<br />
          Dec 14 - FTC SW League Match<br />
        </p>
        <p>
          Also, new members, if you don't get your dues in, you will NOT be participating at the comp.
          Veterans, get your dues in asap. Thank you!


        </p>

        <h3>Forms need to be filled out!</h3>
        <hr class="style2">
        <p class="small lead">24 Sept 2019</p>
        <hr class="style12">
        <p class="lead">
          Everyone is required to fill out these forms; complete them and return them to Sonnier ASAP. Leave the team number blank.<br /> If you are unable to print them, Sonnier has plenty printed out already; all you have to do is ask.
          <a class="btn btn-primary" href="files/roboforms.pdf">View forms</a>

        </p>
        <h3>Workshops start</h3>
        <hr class="style2">
        <p class="small lead">16 Sept 2019</p>
        <hr class="style12">
        <p class="lead">
          Workshops start tommorow, Sept 16. Signup here: <a class="btn btn-primary" href"https://www.signupgenius.com/go/30E0849AEAA23A0F85-robotics. ">Workshop Signup</a>
              <br/>
              P.S. Pay your dues!  <a class=" btn btn-dark" href="https://fortbendisd.revtrak.net/FBISD-Schools-1082/High-School/DHS/dhs-robotics/#/list" target="_blank" id="noticont">Pay Dues</a>
        </p>
        <h3>Robotics is now an SNHS approved club!</h3>
        <hr class="style2">
        <p class="small lead">15 Sept 2019</p>
        <hr class="style12">
        <p class="lead">
          Good news! Robotics is now a SNHS-approved Science club! What that means is:
          <br />a. We won't be short of volunteers for any events!
          <br />b. We will be able to earn SNHS points for running our contests and doing community outreach!
          <br />(Excess SNHS points can be transfered to YES hours)
        </p>
        <h3>General meeting</h3>
        <hr class="style2">
        <p class="small lead">23 Aug 2019</p>
        <hr class="style12">
        <p class="lead">
          General meeting on 3rd Sept.
        </p>

        <h3>Parent Meeting</h3>
        <hr class="style2">
        <p class="small lead">23 Aug 2019</p>
        <hr class="style12">
        <p class="lead">
          Parent meeting on the <strong>4th of September</strong> at 5:30 PM, before open house.
        </p>
        <h3>General meeting</h3>
        <hr class="style2">
        <p class="small lead">23 Aug 2019</p>
        <hr class="style12">
        <p class="lead">
          General meeting on 3rd Sept.
        </p>

        <h3>Interest Meetings</h3>
        <hr class="style2">
        <p class="small lead">19 Aug 2019</p>
        <hr class="style12">
        <p class="lead">
          Interest meetings are on Aug 23rd, and Aug 27th in Room G102 (behind the cafeteria) at 3 P.M.
        </p>
        <hr class="style3">
        <br>
        <h3>New Website!</h3>
        <hr class="style2">
        <p class="small lead">9 Aug 2019</p>
        <hr class="style12">
        <p class="lead">
          As you can probably tell, we have completely overhauled our site, including switching from HTML & Javascript/CoffeeScript to PHP, as well as changing the look and feel to a more modern one. This should allow for a better user experience,
          and is also more efficient.
          <ul class="list-group-flush">

          </ul>
        </p>
        <hr class="style3">
        <hr class="style18">


      </div>
    </div>
  </div>
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
