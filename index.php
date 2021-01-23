<?php

	session_start();
	
?>

<!DOCTYPE html>
<html lang="en">

  <head>
	<title>TCE Ride</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TCE ride.com</a>
    </div>
	</div>
</nav>
	<div class="container">
		<h1><center><br><br><br>Welcome to TCE Ride</center</h1>
	</div>
	<br>
	<div class="signin-content">
	<div class="signin-form">
<br><br><br><br>
	
<form method="POST" action="login.php">
<center>
<div class="col-sm-3 col-md-6 col-lg-5">
<center><h3 class="form-title"><span class="glyphicon glyphicon-user"></span>       User Login</h3></center>
	<br>
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username">
    </div>
  </div>
  <div class="form-group row">
    <label for="Password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
	<br>
      <center><input type="submit" name= "signin" class="btn btn-success" value="signin"></center>
    </div>
  </div>
 
  <a href="create.php">Don't have an account? Sign up!</a>
  <br>
  <a href="forgotpassword.php">Forgot password</a>
  </div>
   </center>
</form>

<div class="col-sm-9 col-md-6 col-lg-7">
<center>
<blockquote class="blockquote-reverse">
    <p>A Journey is best measured in friends, rather than miles.</p>
    <footer>Tim Cahill</footer>
  </blockquote>
<img class="img-responsive" src="https://qph.fs.quoracdn.net/main-qimg-4eca26cdc9a0c363842d6856862d1484" > 
</center>
</div>
</div>
	</div>
	
	
	
	
	<footer class="page-footer blue">

  <div class="footer-copyright text-center ">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a>
  </div>

</footer>


<?php
	
	include("dbconnection.php");
	if(isset($_POST['signin']))
	{
		$uname=$_POST['username'];
		$password=$_POST['password'];
		$check = " SELECT * FROM users WHERE username='$uname' AND password='$password' ";
		
		$run = mysqli_query($conn,$check);
		
		if(mysqli_num_rows($run))
		{
			
				echo "<script>window.open('choose.php','_self')</script>";
							
							$_SESSION['username']=$uname;
		}
		else 
		{
			echo "<script>alert('Username or Password invalid')</script>";
		}
	}
	
	?>
	</body>
</html>