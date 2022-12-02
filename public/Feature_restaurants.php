<?php
session_start()

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Featured Restaurants</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <!-- <link rel="manifest" href="assets/img/favicons/manifest.json"> -->
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
     <style>
      .button p a{
        font-weight: bold;
      }
      .button p a:hover{
        color: #ff9100;
        text-decoration: underline;
      }
      section{
        margin-top: 4rem;
        padding: 0;
      }
    </style>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index_login.php#restaurants"><img class="d-inline-block" src="assets/img/gallery/logo.svg" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">Dilicious Finds</span></a>
        </div>
      </nav>
      <section class="overflow-hidden bg-primary mb-5 py-3" id="home">
        <div class="container">
          <div class="row flex-center">
            <div class="col-lg-7 mx-auto text-center">
              <h5 class="fw-bold fs-3 fs-lg-6 lh-sm text-white text-uppercase" id="restaurants">Featured Restaurants</h5>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="row gx-2" id="restaurant"></div>

      </div>

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <!-- <script src="assets/js/theme.js"></script> -->

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>
<script src="restaurants_page.js"></script>
<script>
  for (i = 0; i < Restaurants.length; i++) {
    document.querySelector("#restaurant").innerHTML += `
                <a href="food_world_menu.php"
                <div class='col-sm-6 col-md-4 col-lg-3 h-100 mb-5'>
                <div class='card card-span h-100 text-white rounded-3'>
                <img class='img-fluid rounded-3 h-100' src=${Restaurants[i].image}>
                <div class='card-img-overlay ps-0'>
                <span class='badge bg-danger p-2 ms-3'><i class='fas fa-tag me-2 fs-0'></i><span class='fs-0'>${Restaurants[i].off} off</span></span><span class='badge bg-primary ms-2 me-1 p-2'><i class='fas fa-clock me-1 fs-0'></i><span class='fs-0'>${Restaurants[i].deliver}</span></span>
                </div>
                <div class='card-body ps-0'>
                <div class='d-flex align-items-center mb-3'>
                <img class='img-fluid' src=${Restaurants[i].Restaurant_image}>
                <div class='flex-1 ms-3'>
                <h5 class='mb-0 fw-bold text-1000'>${Restaurants[i].Restaurant_name}</h5><span class='text-primary fs--1 me-1'><i class='fas fa-star'></i></span><span class='mb-0 text-primary'>${Restaurants[i].rating}</span>
                </div>
                </div>
                <span class='badge bg-soft-${Restaurants[i].availability_colour} p-2'><span class='fw-bold fs-1 text-${Restaurants[i].availability_colour}  '>${Restaurants[i].availability}</span></span>
                </div>
                </div>
                </div>
                </a>`
  };
</script>