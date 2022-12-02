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
      .button p a{
        font-weight: bold;
      }
      .button p a:hover{
        color: #ff9100;
        text-decoration: underline;
      }
    </style>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.php"><img class="d-inline-block" src="assets/img/gallery/logo.svg" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">Dilicious Finds</span></a>
        </div>
      </nav>
      <section class="py-5 overflow-hidden bg-primary" id="home">
        <div class="container">
          <div class="row flex-center">
            <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light text-center">Login Here</h1>
              <center><div class="card w-xxl-75 mt-4">
                <div class="card-body">
                      <form class="row gx-2 gy-2 align-items-center justify-content-center" method="post">
                        <div class="col-12">
                          <div class="input-group-icon"><i class="fas fa-user text-danger input-box-icon fs-2"></i>
                            <label class="visually-hidden-focusable" for="inputDelivery">User Name: </label>
                            <input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text" placeholder="Username" name="username"/>
                          </div>
                          <div class="input-group-icon"><i class="fas fa-key text-danger input-box-icon fs-2"></i>
                            <label class="visually-hidden-focusable" for="inputDelivery">Password: </label>
                            <input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="password" placeholder="Password" name="password" />
                          </div>
                        </div>
                        <div class="d-grid gap-3 col-sm-auto button">
                          <button class="btn btn-danger" type="submit" name="btnlogin">Login</button>
                          <p>Forget Account? <a href="Register.php">Free Sign Up for Delicious Finds</a></p>
                        </div>
                        <?php

                        if(isset($_POST['btnlogin'])){

                        $username = $_POST['username'];
                        $password = $_POST['password'];


                        include('connectivity.php');
                        $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";

                        $execute = mysqli_query($connect,$query);

                           if(mysqli_num_rows($execute)){
                              $_SESSION['myuser'] = $username;
                              header("location:index_login.php");
                           }
                           else{
                              echo "<script> alert('Incorrect Username and password. Kindly register yourself first')</script>";
                            }
                        }

                        ?>
                      </form>
                  </div>
                </div></center>
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
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>