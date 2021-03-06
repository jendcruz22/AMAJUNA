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

    <title>About</title>

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
            <a class="navbar-brand" href="#">AMAJUNA</a>
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
                    <?php if ($_SESSION['type']=='seller') { 
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="src/views/upload.php">Sell </a>
                    </li>
                    ';
                    }
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">
                            Contact us
                            <span class="sr-only">(current)</span>
                        </a>
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

    <br><center>
        <h1>Contact us</h1>
    
    </center>
    <div class="card-body"><center>
      <p class="card-text"><b>Hello, We are the founders of Amajuna. This is a web application made for our Sem 5 WDL/DBMS project. Our details are mentioned down below.</b></p>
      </center>
      <center><p class="card-text"><b>TE CMPN A1  Roll no: 19, 20  <b></p></center>

        <div class="card-group">
  <div class="card">
    
    <div class="card-body">
      <center><h5 class="card-title"><b>Sanket Dalvi</b></h5></center>
      <img class="card-img-top" src="../../public/images/sanky.jpg.jpg" alt="Card image cap">
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <center><h5 class="card-title"><b>Jenny Dcruz</b></h5></center>
      <img class="card-img-top" src="../../public/images/jen.jpg" alt="Card image cap">
    </div>
  </div>
</body>
