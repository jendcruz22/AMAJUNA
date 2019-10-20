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
                    <li class="nav-item active">
                        <a class="nav-link" href="About.php">
                            About us
                            <span class="sr-only">(current)</span>
                        </a>
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
    <br><center>
    <h1>AMAJUNA</h1>
    <br>
</center>
        <table role="presentation" border="0" cellpadding="0" align="center" width="100%" style="max-width:400px; min-width:1000px; margin: auto; border: 1px solid black; background: rgba(255,255,255,0.5);">

            <tr>
                <th>
                    <br><font size="5" color="black">
                        <center>
                            Amajuna, is a second hand product selling system which allows vendors or common people to sell and buy second hand products at reasonable prices. The simplicity and effectiveness of this systems provides great advantages to organizations. These systems allow easy management of second hand products.
                            </br><br><font size="5" color="black">Tourista, a one place travel guide for all your dream destinations.<br>Travel to every end world and live life to the fullest!</br></br></font>
                            <a href="../../index.php"><font color="black" size="4">Back to the main page</font></a>
                        </center>
                </th>
            </tr>
        </table>
</body>

</html>