<?php
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
            <a class="navbar-brand" href="index.php">AMAJUNA</a>
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
                        <a class="nav-link" href="index.php?category=my_products">My Products</a>
                    </li>
                    <?php if ($_SESSION['type']=='seller') { 
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="src/views/upload.php">Sell </a>
                    </li>
                    ';
                    }
                    ?>
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
                    <a href="index.php?category=mobiles" class="list-group-item">Mobiles</a>
                    <a href="index.php?category=vehicles" class="list-group-item">Vehicles</a>
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

                <?php
                if(isset($_GET['category'])){
                    if($_GET['category']=='mobiles'){
                    $select_mobiles = 'SELECT p.*,m.* FROM products p, mobiles m WHERE p.product_id = m.p_id';
                    $result = mysqli_query($db,$select_mobiles);
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="public/images/'.$row['image_name'].'" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="src/views/prodoneplus.html">'.$row['title'].'</a>
                                    </h4>
                                    <h5>₹ '.$row['mrp'].'</h5>
                                    <p class="card-text">'.$row['description'].'</p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
                elseif($_GET['category']=='vehicles'){
                    $select_vehicles = 'SELECT * FROM products p, vehicles v WHERE p.product_id = v.p_id';
                    $result = mysqli_query($db,$select_vehicles);
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="public/images/'.$row['image_name'].'" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="src/views/productpage.php?product_id='.$row['product_id'].'">'.$row['title'].'</a>
                                    </h4>
                                    <h5>₹ '.$row['mrp'].'</h5>
                                    <p class="card-text">'.$row['description'].'</p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
                elseif($_GET['category']=='my_products'){
                    $select_my_products = 'SELECT * FROM products, users WHERE products.user_id = users.user_id and users.username = "'.$_SESSION['username'].'"';
                    $result = mysqli_query($db,$select_my_products);
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="public/images/'.$row['image_name'].'" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="src/views/productpage.php?product_id='.$row['product_id'].'">'.$row['title'].'</a>
                                    </h4>
                                    <h5>₹ '.$row['mrp'].'</h5>
                                    <p class="card-text">'.$row['description'].'</p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
            }
                else{
                    $select_all_products = 'SELECT * FROM products';
                    $result = mysqli_query($db,$select_all_products);
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="public/images/'.$row['image_name'].'" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="src/views/productpage.php?product_id='.$row['product_id'].'">'.$row['title'].'</a>
                                    </h4>
                                    <h5>₹ '.$row['mrp'].'</h5>
                                    <p class="card-text">'.$row['description'].'</p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }


                ?>

                    

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
