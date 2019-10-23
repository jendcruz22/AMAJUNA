﻿<?php
  session_start(); 
  $db = mysqli_connect('localhost', 'root', '', 'amajuna');
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: src/views/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: src/views/login.php');
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
    <link href="../styles/shop-homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
<?php
    $get_product = 'SELECT * FROM products, users WHERE products.user_id = users.user_id and products.product_id = '.intval($_GET['product_id']);
    $result = mysqli_query($db,$get_product);
    while($row = mysqli_fetch_assoc($result)){
        // var_dump($);
        echo '
        
        <div class="col-lg-9">

        <div class="card mt-4">
            <img class="card-img-top img-fluid" src="../../public/images/'.$row['image_name'].'" alt="">
            <div class="card-body">
                <h3 class="card-title">One Plus Pro</h3>
                <h4>Rs '.$row['mrp'].'</h4>
                <p class="card-text">
                    <b>Technical Details</b><pre>
'.$row['description'].'</pre>
                    
            </div>
            </br>
            <h5>  Owners information</h5>
            <p class="card-text"><b>  Jenny Dcruz</b>
                <pre>
Phone number: 9737273348
Address: IC Colony, Mumbai 400 103
            </pre>
        </div>
       </br>

    </div>
        ';
    
    }

?>
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
                        <a class="nav-link" href="home.html">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="About.html">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="product.html">
                            Products
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4">Product Details</h1>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div class="card mt-4">
                    <img class="card-img-top img-fluid" src="../../public/images/onep7prod.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">One Plus Pro</h3>
                        <h4>Rs 48,999</h4>
                        <p class="card-text">
                            <b>Technical Details</b><pre>
OS	Android 9 Pie OxygenOS
RAM	6 GB
Item Weight	204 g
Product Dimensions	16.3 x 0.9 x 7.6 cm
Batteries:	1 Lithium ion batteries required. (included)
Item model number	GM1911
Wireless communication technologies	Bluetooth;
WiFi Hotspot
Special features:   Dual Sim, 
                    Front Camera, 
                    Touchscreen, 
                    USB, 
                    In-display Fingerprint sensor, 
                    Accelerometer, 
                    Electronic compass, 
                    Gyroscope,  
                    Ambient light sensor,   
                    Proximity sensor, 
                    Sensor core, 
                    Laser sensor
Display technology:	pixel density of 515 PPI and Aspect Ratio 19.5:9
Form factor	Touchscreen Phone
Weight	204 Grams
Colour	Mirror Grey
Battery Power Rating	4000
                                                </pre>
                            
                    </div>
                    </br>
                    <h5>  Owners information</h5>
                    <p class="card-text"><b>  Jenny Dcruz</b>
                        <pre>
 Phone number: 9737273348
 Address: IC Colony, Mumbai 400 103
                    </pre>
                </div>
               </br>

            </div>
            <!-- /.col-lg-9 -->

        </div>

    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>