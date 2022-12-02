<?php
session_start();

if (!isset($_SESSION['myuser'])) {
  echo "<script>alert('Your are logout')</script>";
  header('location:index.php');
}

include('connectivity.php');
$query = "SELECT * FROM register WHERE username = '$_SESSION[myuser]'";
$execute = mysqli_query($connect, $query);

foreach ($execute as $image) {
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="assets/css/theme.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <style>
    .subscribe input::-webkit-input-placeholder {
      color: #fff !important;
      opacity: 1;
    }

    .subscribe .input-box-icon {
      top: 40%;
    }

    .img-responsive {
      width: 3rem;
      margin-right: 1rem;
    }

    .btn-outline-success {
      color: #79B93C;
      border-color: #79B93C;
    }
    .btn-outline-danger {
color: #F17228;
border-color: #F17228;
}
tbody tr td{
    vertical-align: bottom;
}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top " data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand d-inline-flex" href="index_login.php#popularitem"><img class="d-inline-block" src="assets/img/gallery/logo.svg" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">Dilicious Finds</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
          <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
            <p class="mb-0 fw-bold text-lg-center">Deliver to: <i class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Current Location </span></p>
          </div>
          <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0 align-items-center">
            <div class="input-group-icon pe-2 mt-2"><i class="fas fa-search input-box-icon text-primary" style="top: 40%;"></i>
              <input class="form-control border-0 input-box bg-100" type="search" placeholder="Search Food" aria-label="Search" />
            </div>
            <div class="dropdown">
              <a class="btn btn-success dropdown-toggle px-3" data-bs-toggle="dropdown"><?php echo "<img class='img-responsive rounded-circle' src='$image[image]'>"; ?><span class="name_user" style="font-size: large; text-transform: capitalize;"><?php echo $_SESSION['myuser'] ?></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </div>
            <div class="mx-3">
              <?php
                if(isset($_SESSION['cart'])){
                  $count=count($_SESSION['cart']);
                }
                else{
                    $count=0;
                  };
              ?>
              <a class="btn btn-success d-flex align-items-center" href="mycart.php" style="padding: 1.2rem 2rem;"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i> (<?php echo $count; ?>)</a>
            </div>
          </form>
        </div>
      </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-9">
            <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        $total=0;
                        if(isset($_SESSION['cart'])){

                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                                $totalprice=$value['Price']*$value['Quantity'];
                                $total= $total + $totalprice;
                                echo"
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]</td>
                                    <td>$value[Quantity]</td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                                </tr>
                                ";
                            }                        
                        }

                    ?>                                    
                </tbody>
            </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                  <table style="width: 100%;">
                  <thead>
                    <tr style="border-bottom: 1px solid black;">
                        <center><h3>Order Details</h3></center>
                    </tr>
                  </thead>
                  <tbody >
                    <?php
                    if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                      $totalprice=$value['Price']*$value['Quantity'];
                    echo "
                    <tr style='border-bottom: 1px solid black;'>
                    <td><p>$value[Item_Name]</p><td>
                    <td style='text-align: right;'><p>$totalprice</p><td>
                    </tr>
                    ";
                    }
                  }
                    ?>
                  </tbody>
                  </table>
                    <h4 style="text-align: right; border-top: 2px solid black;">Total: <?php echo $total ?></h4>
                    <br>
                    <form>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cash On Delivery
                        </label>
                        </div>                        
                        <button class="btn btn-primary btn-block">Make Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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