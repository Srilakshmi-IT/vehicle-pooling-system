<!DOCTYPE html>
<html lang="en">
<head>
<title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

.backspace
{
margin-left: -324px;
}
</style>

</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	  </button>
	  </div>
	  
	  <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
		 <li><a href="index.php"><span class="glyphicon glyphicon-home"> Home
			&emsp;</span></a></li>
		 <li><a href="registration_ss.php"><span class="glyphicon glyphicon-user"> Owner
			&emsp;</span></a></li>
		 <li><a href="reservation_ss.php"><span class="glyphicon glyphicon-user"> Customer
			&emsp;</span></a></li>
		 
		 <li><a href="index.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
	</ul>
	</div>
	
	</div>
	</nav>
	<br><br>
	<center><h3>Forgot Password</h3></center><br><br>
	<div class="row">
	
	<div class="col-md-6" class="col-sm-6" class="col-lg-6" class="col-xs-6"><br><br><br>
	<div class="container">
	<div class="col">
				<div class="col-xs-12">
	<form method="post" action="forgotpassword.php">
	
	<div class="form-group row">
	<label for="email" class="col-sm-2 col-form-label" >Email:</label>
	<input type="text" id="email" name="email"class="col-sm-3 ">
	</div>
	<div class="form-group form-button">
	<div class="col-sm-7">
	<center><input type="submit" name="submit" value="submit" class="btn btn-success" class="form-submit"></center>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	</form>
	

	<?php 
	include("dbconnection.php");
	if(isset($_POST['submit']))
	{
	$email=$_POST['email'];
	$q="SELECT Password FROM users WHERE email='$email' ";
	$to=$_POST['email'];
	$sub="password";
	$res=mysqli_query($conn,$q);
	$r=mysqli_fetch_array($res);
	

	$message=$r[0];
	//echo "Your password is : " .$r[0];
	mail($to,$sub,$message);
	}
	?>
	</div>
	
	<br><br>
	<img class="img-responsive" width="400" height="300"src="https://tse1.mm.bing.net/th?id=OIP.jUY4HlNSteC9qT1-c3EDHQHaHY&pid=Api&rs=1&c=1&qlt=95&w=106&h=106">
	
	</div>
	
	<br><br>
	
	<footer class="page-footer blue">
<div class="footer-copyright text-center ">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a>
	
	</div>
</footer>
</body>
</html>