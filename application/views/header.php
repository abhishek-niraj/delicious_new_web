<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<title>D'Delicious</title>
<style>
  .navbar {
    background-color: #F52F07 !important;
  }

  .logo_text {
    font-family: Cursive;
    color: white;
  }

  .text {
    color: white;
  }

  .main_banner {
    padding-bottom: 3%;
  }

  .author_picture {
    border-radius: 100%;

  }

  .logo {
    /* background-color: black; */
    border-radius: 100%;

  }

  .main_footer {
    background-color: #F52F07;
    max-width: 100%;
  }

  .carousel-img {
    max-width: 1600px;
    height: 500px;
    top: 0px;
    /* left: 0px; */
    display: block;
    position: relative;
    z-index: 1
  }

  .slick-prev,
  .slick-next {
    display: none !important;
  }

  @media screen and (max-width: 1260px) {
    .slick-slider-img {
      max-width: 250px !important;
      height: 250px !important;

    }

    .category_banner {
      height: 138px !important;
    }
  }

  .slick-slider-img {
    width: 300px;
    height: 300px;
    padding: 5%;
    border-radius: 20%;
  }

  .category-card {
    border-style: none !important;
    max-width: 216px;


  }

  .category_banner {
    height: 167px;
    max-width: 216px;
    text-align: center;
    border-radius: 20% !important;
  }




  .card_container {
    padding: 20px;
  }

  .fixed-top {
    position: relative !important;
  }

  #my-video {
    width: 250px !important;
    height: 350px !important;
  }

  .video_row {
    background-color: rgb(239, 239, 240);
    margin-bottom: 1%;

  }

  #image {

    position: absolute;
    height: 271px;
    width: 271px;

    /* z-index: 1; */
  }

  body {
    overflow-x: hidden;
  }

  #map {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100%;
    right: 0;
    height: 700px
  }

  a {
    text-decoration: none !important;
    color: inherit !important;
  }

  #main_banner {
    width: 100%;
    margin-bottom: 3%;

  }

  .video_zoom {
    width: 100%;
  }

  .zomato {
    height: 450px;
    width: 100%;
    margin-bottom: 5%;
  }

  .grey_background {
    background-color: rgb(239, 239, 240);
  }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="assets/slick_slider/slick/slick.css">
<link rel="stylesheet" href="assets/slick_slider/slick/slick-theme.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!-- <script src="assets/slick_slider/slick/jquery.min.js"></script> -->
<script type="text/javascript" src="assets/slick_slider/slick/slick.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">

<body>
  <nav class="navbar   navbar-expand-lg navbar_colour fixed-top">
    <div class="container" style="max-width:100%;background-color:#F52F07;">

      <div class="col-1">
      </div>
      <div class="col-1">

        <a class="navbar-brand" href="#">
          <a href="<?php echo base_url() ?>"> <img src="assets/img/logo.png" alt="Bootstrap" class="logo" width="60" height="60">

          </a>
      </div>
      <div class="col-5">
        <h4 class="logo_text">D'Delecious Delivering Pizza With Happiness</h4>
      </div>
      <div class="col-1  text">
        Contact US
      </div>
      <div class="col-1 text">
        <a href="<?php echo base_url('stores-url'); ?>">
          Our Stores
        </a>
      </div>
      <div class="col-1 text">


        Complaints </div>
      <div class="col-1 text">
        About Us </div>
    </div>
  </nav>
  </div>
</body>

</html>