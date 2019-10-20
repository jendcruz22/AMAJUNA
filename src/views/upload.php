<?php 
  include('server.php');

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
    <link href="../styles/upload_style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">AMAJUNA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Home</a>
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
                                <h3 class="login-heading mb-4">Upload product details here</h3>
                                <form method="post" action="upload.php">
                                    <input type="file" name="image" value="fileupload" id="fileupload"> <label for="fileupload"> Select a file to upload</label>
                                    <br>
                                    <div class="form-label-group">
                                        <input name="title" type="text" id="prodName" class="form-control" placeholder="Product Name" required autofocus>
                                        <label for="prodName">Product Title<Title></Title></label>
                                    </div>
                                    <div class="form-label-group">
                                        <input name="description" type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
                                        <label for="prod_desc">Product Description</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input name="mrp" type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
                                        <label for="prod_desc">Cost of the product</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input name="stock" type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
                                        <label for="prod_desc">Quantity in stock</label>
                                    </div>
                                    <div class="form-label-group">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Category
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a id="category_mobiles" class="dropdown-item" href="#" onclick="add_mobile_input();">Mobiles</a>
                                                <a id="category_vehicles" class="dropdown-item" href="#" onclick="add_vehicles_input();">Vehicles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="form_input1" class="form-label-group">
                                    </div>
                                    <div id="form_input2" class="form-label-group">
                                    </div>
                                    <div id="form_input3" class="form-label-group">
                                    </div>
                                    <div class="form-label-group">
                                        <button id="add_product_button" name="add_product" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">SELL</button>
                                    </div>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="../../index.php">Go Back to home page</a>
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

<!-- Bootstrap core JavaScript -->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../scripts/script.js"></script>



</body>

</html>

