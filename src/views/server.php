<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'amajuna');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $type = 'seller';
  if (!($_POST['type']=='seller')){
    $type = 'buyer';
  }
  $contact_number = mysqli_real_escape_string($db, $_POST['contact_number']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, type, contact_number, location) 
  			  VALUES('$username', '$email', '$password', '$type' , '$contact_number', '$location')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['email'] = $email;
  	$_SESSION['type'] = $type;
  	$_SESSION['contact_number'] = $contact_number;
  	$_SESSION['location'] = $location;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../../index.php');
  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_assoc($results);
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $row['email'];
      $_SESSION['type'] = $row['type'];
      $_SESSION['contact_number'] = $row['contact_number'];
      $_SESSION['location'] = $row['location'];
      $_SESSION['success'] = "You are now logged in";
      header('location: ../../index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

if (isset($_POST['add_product'])) {
  $username = $_SESSION['username'];
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $mrp = mysqli_real_escape_string($db, $_POST['mrp']);
  $mrp = (int)$mrp;
  $stock = mysqli_real_escape_string($db, $_POST['stock']);
  $stock = (int)$stock;
  $user_id_query = "SELECT * FROM users WHERE username='$username'";
  $user_result = mysqli_query($db, $user_id_query);
  $row = mysqli_fetch_assoc($user_result);
  $user_id = $row['user_id'];
  $date_of_posting = date("Y-m-d H:i:s"); 

  if (isset($_POST['image'])){
    $image_name = $_POST['image'];
  }else{
    $image_name = 'amajuna.png';
  }

  if (isset($_POST['ram']))
  {
    $ram = mysqli_real_escape_string($db, $_POST['ram']);
    $screen_size = mysqli_real_escape_string($db, $_POST['screen_size']);
    $brand = mysqli_real_escape_string($db, $_POST['brand']);
    $query = "INSERT INTO products (description, date_of_posting, mrp, title, stock, image_name, user_id) 
            VALUES('$description','$date_of_posting',$mrp,'$title',$stock, '$image_name', $user_id);
            INSERT INTO mobiles(p_id, screen_size, ram, brand) VALUES (LAST_INSERT_ID(),'$screen_size','$ram','$brand')";
    if(mysqli_multi_query($db, $query)){
      header('location: ../../index.php');
    }
  }elseif(isset($_POST['seating_capacity'])){
    $type_of_vehicle = mysqli_real_escape_string($db, $_POST['type_of_vehicle']);
    $seating_capacity = mysqli_real_escape_string($db, $_POST['seating_capacity']);
    $brand = mysqli_real_escape_string($db, $_POST['brand']);
    $query = "INSERT INTO products (description, date_of_posting, mrp, title, stock, image_name, user_id) 
            VALUES('$description','$date_of_posting',$mrp,'$title',$stock, '$image_name',$user_id);
            INSERT INTO vehicles(p_id, type_of_vehicle, seating_capacity, brand) VALUES (LAST_INSERT_ID(),'$type_of_vehicle','$seating_capacity','$brand')";
    if(mysqli_multi_query($db, $query)){
      header('location: ../../index.php');
    }
  }

}


?>