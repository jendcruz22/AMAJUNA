<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Amajuna</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../styles/formstyles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">AMAJUNA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Products</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="upload.php">
                            Sell now
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                      <?php  if (isset($_SESSION['username'])) : ?>
                        <p> <a class="nav-link" href="../../index.php?logout='1'" style="color: #777">Logout</a> </p>
                      <?php endif ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</br>
    <center>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4" align="center">Upload product details here</h3>
                                <form>
                                    <form action="upload.php"> <input type="file" name="fileupload" value="fileupload" id="fileupload"> <label for="fileupload"> Select a file to upload</label></form>
                                    </br>
                                    <div class="form-label-group">
                                        <input type="text" id="prodName" class="form-control" placeholder="Product Name" required autofocus>
                                        <label for="prodName">Product Name</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
                                        <label for="prod_desc">Last Name</label>
                                    </div>

                                    <input class="radio" type="radio" name="prodtype" value="Mobile" ><label>Mobile</label></br>

                                    <input class="radio" type="radio" name="prodtype" value="Vehicle"><label>Vehicle</label></br>

                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                        <label for="inputEmail">Email address</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="tel" id="inputPhone" class="form-control" placeholder="Phone Number" name="phone" pattern="[0-9]{2}-[0-9]{10}" required autofocus>
                                        <label for="inputPhone">Phone Number</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="text" id="Address" class="form-control" placeholder="Address" required autofocus>
                                        <label for="seller_add">Address</label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Display address to buyers</label>
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">SELL</button>
                                    <div class="text-center">
                                        <a class="small" href="index.php">Go Back to home page</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>

</html>

