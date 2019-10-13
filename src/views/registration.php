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
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Register here</h3>
                                <form method="post">

                                    <div class="form-label-group">
                                        <input type="text" id="inputFName" class="form-control" placeholder="First Name" required autofocus>
                                        <label for="inputFName">First Name</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="text" id="inputLName" class="form-control" placeholder="Last Name" required autofocus>
                                        <label for="inputLName">Last Name</label>
                                    </div>

                                    <input class="radio" type="radio" id="customertypebuyer" name="customertype" value="Buyer" checked><label>Buyer</label></br>

                                    <input class="radio" type="radio" id="customertypeseller" name="customertype" value="Seller"><label>Seller</label></br>

                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                        <label for="inputEmail">Email address</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="number" id="inputPhone" class="form-control" placeholder="Phone Number" name="phone" pattern="[0-9]{2}-[0-9]{10}" required autofocus>
                                        <label for="inputPhone">Phone Number</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                        <label for="inputPassword">Password</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="confirmPassword" class="form-control" placeholder=" Confirm Password" required>
                                        <label for="confirmPassword"> Confirm Password</label>
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>
                                    <div class="text-center">
                                        <a class="small" href="login.html">Go Back to the Login Page</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "amajuna";
    $conn = mysqli_connect($dbServername ,$dbUsername,$dbPassword,$dbName);
    if(isset($_POST['submit'])){
    $a= $_POST['inputFName'];
    $b= $_POST['inputLName'];
    $c= $_POST['customertypebuyer'];
    $d= $_POST['customertypeseller'];
    $e= $_POST['inputEmail'];
    $f= $_POST['inputPhone'];
    $g= $_POST['inputPassword'];
    $h= $_POST['confirmPassword'];
    $query="INSERT INTO user(fname,lname,type,email,pno,pwd,cpwd) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."')";
    $result=mysqli_query($conn,$query);
    echo "Data Successfully inserted";
}

