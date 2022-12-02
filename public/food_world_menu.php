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
    <title>Delicious Finds</title>


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
    <script>
      window.history.forward();
        function noBack() {
            window.history.forward();
        }
      </script>
    <style>
      .carousel-indicators {
  top: 0;
}
.carousel-indicators [data-bs-target] {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-box-flex: 0;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 25px;
  height: 4px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #FFB30E;
  background-clip: padding-box;
  border: 0;
  border-top: 0 solid transparent;
  border-bottom: 0 solid transparent;
  opacity: 0.5 !important;
  -webkit-transition: opacity 0.6s ease;
  -o-transition: opacity 0.6s ease;
  transition: opacity 0.6s ease;
}
.carousel-item {
  height: auto;
  width: 100%;
}
.carousel-indicators .active {
  opacity: 1 !important;
}
.menu{
  width: 80%;
}
.menu-items{
  background-image: url('../public/assets/img/gallery/menu_background.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  width: 100vw;
  height: auto;
}
.row *{
  color: #fff;
}
.menu-col img{
  width: 8rem;
  height: 8rem;
  border-radius: .5rem;
}
.menu-col p{
  font-size: larger;
  cursor: pointer;  
}
.menu-col p:hover{
  text-decoration: underline;
}
.carousel .carousel-indicators li {
  position: none;
  width: fit-content;
  height: fit-content;
  text-indent: 0;
  font-size: 1rem;
  font-weight: bold ;
  color: #fff;
  background-color: #FFB30E;
  margin: 2rem;
  padding: .5rem;
  border-radius: 10px;
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
      <section class="py-3 overflow-hidden bg-primary" id="home">
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <div class="menu py-5 text-md-start text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light text-center">Menu</h1></i>
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false">
              <ul class="carousel-indicators ">
                <li type="button"  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">Sandwiches</li>
                <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">Burgers</li>
                <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">Desserts</li>
              </ul>
              <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="menu-items w-100 pt-7 d-flex align-items-center justify-content-center">
                  <div class="row  w-100 align-items-center justify-content-center">
                    <h1 style="text-align: center;">Sandwiches</h1>
                    <div class="row py-4" id="sandwich"></div>
                  </div>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="menu-items w-100 pt-7 d-flex align-items-center justify-content-center">
                    <div class="row  w-100 align-items-center justify-content-center">
                      <h1 style="text-align: center;">Burgers</h1>
                      <div class="row py-4" id="burger"></div>
                    </div>
                  </div>               
                </div>
                <div class="carousel-item">
                <div class="menu-items w-100 pt-7 d-flex align-items-center justify-content-center">
                  <div class="row  w-100 align-items-center justify-content-center">
                      <h1 style="text-align: center;">Desserts</h1>
                      <div class="row py-4" id="dessert"></div>
                    </div>
                  </div>                
                </div>
                
              </div>            
            </div>
              </div>
          </div>
      </section>

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
<script src="Menu.js"></script>
<script>
  for (i = 0; i < sandwich.length; i++) {
              document.querySelector("#sandwich").innerHTML += `
              <div class="menu-col d-flex justify-content-between align-items-center flex-column col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0 h-100">
                <img class="" src="${sandwich[i].image}"><p>${sandwich[i].name}</p>
              </div>`
              
            };
  for (i = 0; i < burger.length; i++) {
              document.querySelector("#burger").innerHTML += `
              <div class="menu-col d-flex justify-content-between align-items-center flex-column col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0 h-100">
              <img class="img-fluid" src="${burger[i].image}"><p>${burger[i].name}</p>
              </div>`
              
            };
  for (i = 0; i < dessert.length; i++) {
              document.querySelector("#dessert").innerHTML += `
              <div class="menu-col d-flex justify-content-between align-items-center flex-column col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0 h-100">
              <img class="img-fluid" src="${dessert[i].image}"><p>${dessert[i].name}</p>
              </div>`
              
            };

</script>