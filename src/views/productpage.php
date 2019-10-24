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

            <?php
    $get_product = 'SELECT * FROM products, users WHERE products.user_id = users.user_id and products.product_id = '.intval($_GET['product_id']);
    $result = mysqli_query($db,$get_product);
    while($row = mysqli_fetch_assoc($result)){
        echo '
        
        <div class="col-lg-9">

        <div class="card mt-4">
            <img class="card-img-top img-fluid" src="../../public/images/'.$row['image_name'].'" alt="">
            <div class="card-body">
                <h3 class="card-title">One Plus Pro</h3>
                <h4>Rs '.$row['mrp'].'</h4>
                <p class="card-text">
                    <b>Technical Details</b><p>
'.$row['description'].'</p>
                    
            </div>
            </br>
            <h5>  Owners information</h5>
            <p class="card-text"><b>Username: '.$row['username'].'</b>
                <pre>
Phone number: '.$row['contact_number'].'
Address: '.$row['location'].'
            </pre>
        </div>
       </br>

    </div>
        ';
    
    }

?>


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
