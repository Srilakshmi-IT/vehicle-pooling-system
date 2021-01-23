<!DOCTYPE html>
<html lang="en">
<head>
<title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	  </button>
	  </div>
	  
	  <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
		 <li><a href="login.php"><span class="glyphicon glyphicon-home"> Home
			&emsp;</span></a></li>
		 <li><a href="registration_ss.php"><span class="glyphicon glyphicon-user"> Owner
			&emsp;</span></a></li>
		 <li><a href="reservation_ss.php"><span class="glyphicon glyphicon-user"> Customer
			&emsp;</span></a></li>
		 
		 <li><a href="login.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
	</ul>
	</div>
	
	</div>
	</nav>
	<br><br>
	
	
	
	<center> <label for="Td"><h2>Change Password</h2></label></center>
	<br>
	<br>
	<br>
	
	<div class="row">
	
	<div class="col-md-8" class="col-sm-8" class="col-lg-8" class="col-xs-8"><br><br><br>
	<div class="container">
	<div class="col">
				<div class="col-xs-12">
	
	<form method="post" action="changepassword.php" >
	
	<div class="form-group-row">
	<label for="email" class="col-sm-5 col-form-label">Email:</label>
	<input type="text" name="email" class="col-sm-4" id="email" required/>
	</div>
	<br><br>
	
	<div class="form-group-row">
	<label for="new password" class="col-sm-5 col-form-label">New Password:</label>
	<input type="password" class="col-sm-4" id="newpassword" name="newpassword" required/>
	</div>
	<br><br>
	<div class="form-group-row">
	<label for="confirm password" class="col-sm-5 col-form-label">Confirm Password:</label>
	<input type="password" class="col-sm-4" id="confirmpassword" name="confirmpassword" required/>
	</div>
	<br><br>
	<div class="form-group form-button">
	<div class="col-sm-7">
	<center><input type="submit" name="submit" value="submit" class="btn btn-success" class="form-submit"></center>
	</div>
	</div>
	
	</div></div></div>
	</form>
	<?php 
	include("dbconnection.php");
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		
		$new=$_POST['newpassword'];
		$confp=$_POST['confirmpassword'];
		
		
		if($new == $confp)
		{
			
			mysqli_query($conn,"UPDATE users SET password='$new' WHERE users.email='$email' ");
			echo "<script>alert('Password changed successfully');</script>";
		}
		if($new != $confp)
		{
			echo "<script>alert('Please give password correctly');</script>";
		}
		
	}
	
	
	?>
	</div>
	
	<br><br>
	<img class="img-responsive" width="400" height="300"src="https://tse1.mm.bing.net/th?id=OIP.jUY4HlNSteC9qT1-c3EDHQHaHY&pid=Api&rs=1&c=1&qlt=95&w=106&h=106">
	
	</div>
	<br><br><br><br>
	<footer class="page-footer blue">

  <div class="footer-copyright text-center "><span class="backspace">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a></span>
  </div>

</footer>
</body>
</html>
	
	