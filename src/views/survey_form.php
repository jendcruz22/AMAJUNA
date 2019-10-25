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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Survey form for Amajuna</title>
  </head>
  <body>
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
                        <a class="nav-link" href="src/views/survey_form.php">Survey form</a>
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
    <br>
    <br>
    <br>
    <div class="container">
    <h1>Survey Form for Amajuna</h1>
    <form method="post" action="survey_form.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Email id</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email id">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Contact number</label>
        <input name="contact_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your contact number">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">What was your first impression when you entered the website?</label>
        <input name="impression" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your feedback">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">How did you first hear about us?</label>
        <input name="reference" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your feedback">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Is there anything missing on this page?</label>
        <input name="missing" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your feedback">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">How likely will you recommend it to friends?</label>
        <input name="recommendation" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your feedback">
    </div>
    <button type="submit" name="survey" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>