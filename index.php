<?php 
  session_start(); 

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
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Amajuna</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="src/styles/shop-homepage.css" rel="stylesheet">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="src/views/About.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="src/views/upload.php">Sell </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="src/views/contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                      <?php  if (isset($_SESSION['username'])) : ?>
                        <p> <a class="nav-link" href="index.php?logout='1'" style="color: #777">Logout</a> </p>
                      <?php endif ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-3">Categories</h1>
                <div class="list-group">
                    <a href="#" class="list-group-item">Mobiles</a>
                    <a href="#" class="list-group-item">Vehicles</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="public/images/jeepcomp.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="public/images/Iphone.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="public/images/ktmduke.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="public/images/onep7.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="src/views/prodoneplus.html">One Plus 7 Pro</a>
                                </h4>
                                <h5>Rs 48,999</h5>
                                <p class="card-text">
                                    OnePlus 7 Pro smartphone runs on Android v9.0 (Pie) operating system. The phone is powered by Octa core processor. It has 6 GB RAM and 128 GB internal storage. OnePlus 7 Pro smartphone has a Fluid AMOLED display.
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="public/images/rep.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Royal Enfield Bullet 500</a>
                                </h4>
                                <h5>Rs 2,32,316.00</h5>
                                <p class="card-text">The Bullet 500 is the same as the iconic Bullet 350, but with a bigger 499cc engine. The Bullet 500 is powered by a single-cylinder air-cooled 499cc mill producing 26.5bhp of power at 5,100rpm and 40.9Nm of torque at 3,800rpm.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="public/images/jag.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Jaguar I-PACE</a>
                                </h4>
                                <h5>Rs 58.00 Lakh</h5>
                                <p class="card-text">The Jaguar I-Pace has a WLTP-rated range of 292 miles (470 km) and an EPA-rated range of 234 miles (377 km). The car has a wade depth of 500 mm (20 in).</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="public/images/iphoneprod.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Iphone 6</a>
                                </h4>
                                <h5>Rs 27,000</h5>
                                <p class="card-text">The iPhone 6 and 6 Plus include larger 4.7 and 5.5 inches (120 and 140 mm) displays, a faster processor, upgraded cameras, improved LTE and Wi-Fi connectivity and support for a near field communications-based mobile payments offering.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Five</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Six</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
