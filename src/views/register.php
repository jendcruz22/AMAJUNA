<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Amajuna</title>
  <link rel="stylesheet" type="text/css" href="../styles/style.css">

</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username;	 ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
	  </div>
	<div class="input-group">
		<div class="custom-control custom-switch">
			<input style="width:40px;float:left;" type="checkbox" class="custom-control-input" id="customSwitch1" name="type" value="seller">
			<label class="custom-control-label" for="customSwitch1">Are you a seller?</label>
		</div>
  	</div>
	<div class="input-group">
  	  <label>Contact number</label>
  	  <input type="text" name="contact_number">
  	</div>
	<div class="input-group">
  	  <label>Location</label>
  	  <input type="text" name="location">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>