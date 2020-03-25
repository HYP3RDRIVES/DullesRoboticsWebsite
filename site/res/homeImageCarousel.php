
<div id="imagecarousel" class="carousel slide carousel-fade" data-ride="carousel" interval="600">

  <div class="carousel-inner" role="listbox">

    <ol class="carousel-indicators" style="bottom:50px;">
      <li data-target="#imagecarousel" data-slide-to="0" class="active" style="width:90%;"></li>
      <li data-target="#imagecarousel" data-slide-to="1" style="width:90%;"></li>
      <li data-target="#imagecarousel" data-slide-to="2" style="width:90%;"></li>

    </ol>
    <a class="carousel-indicators dnbtn" onclick="downer()"><img src="/img/down.svg" style="cursor:pointer;"></img></a>
    <!-- FRC 2020 icon, put this wtih FRC 2020 pictures

    <img class="animated fadeInDown" src="/img/frc-2020icon.svg">

  -->

  <!--  <script>
    x = document.createElement('div');
    if (largePayLoad){
      x.setAttribute("class, fill carousel-image");
      x.style = "background-image: url('https://drc.aspencdn.me/photos/txchadrive.webp');";
    }
    elseif (reduceLoad){
      x.style = "background-image: url('https://drc.aspencdn.me/photos/txchadrive.webp');";
    }
  </script> -->
    <!-- <ol class="carousel-indicators" style="bottom:70px;"><i class="fas fa-arrow-circle-down" style="font-size:40px;"></i></ol> -->
    <div class="carousel-item active" style=" height: 100vh;">
      <!--  <img class="d-block w-100 indxcrop" src="https://drc.aspencdn.me/photos/txchadrive.jpg" alt="Third slide" > -->
      <div class="fill carousel-image" style="background-image: url('/img/txchadrive.jpg'); background-attachment: fixed;"></div>

      <div class="imgtxt-container">
        <div class="carousel-caption">

          <h2 class="display-2 c-header animated fadeInDown" style="font-size:100px;">Dulles Robotics </h2>
          <p class="p-carousel-caption animated fadeInUp hidden-xs">FIT Channelview Finalist Alliance - FRC #7494</p>


        </div>

      </div>
    </div>
    <div class="carousel-item" style="height: 100vh;">
        <div class="fill carousel-image" style="background-image: url('/img/stateRAS.jpg'); background-attachment: fixed;"></div>
      <div class="imgtxt-container">
        <div class="carousel-caption">
          <h2 class="display-2 c-header animated fadeInDown" style="font-size:100px;">Dulles Robotics </h2>
          <p class="p-carousel-caption animated fadeInUp hidden-xs">FIT DCMP Rookie All Stars - FRC #7494</p>
        </div>
      </div>
    </div>

    <div class="carousel-item" style="height: 100vh;">
      <!-- <img class="d-block w-100 " src="https://drc.aspencdn.me/photos/txpasdrive.jpg" alt="Third slide" > -->
        <div class="fill carousel-image" style="background-image: url('/img/txpasdrive.jpg'); background-attachment: fixed;"></div>

      <div class="imgtxt-container">
        <div class="carousel-caption">
          <h2 class="display-2 c-header animated fadeInDown" style="font-size:100px;">Dulles Robotics </h2>
          <p class="p-carousel-caption animated fadeInUp hidden-xs">FIT Pasadena Event Rookie All Stars - FRC #7494</p>
        </div>
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
  <div class="carousel-caption">

  </div>
</div>
<script>
function downer(){
  document.getElementById('#indxone').scrollIntoView({behavior: "smooth", block: "start"});
}
</script>
<!-- Preloads the images from the CDN for faster display on the carousel -->
