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
  <ul class="nav navbar-nav navbar-right">
		<li> <a href="changepassword.php"> Change password</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
      </ul>
	</div>
</nav>  
	
  <br><br>
		<br><h1><center>Welcome to TCE Ride</center></h1><br><br>

<?php $var=$_SESSION["username"];
echo $var;?>

 <div class="row">
    <div class="col-md-6">
      <div class="thumbnail" style="padding-left: 100px;  padding-right: 100px;">
        <a href="registration_ss.php" target="_blank">
          <img src="https://scontent.fmaa8-1.fna.fbcdn.net/v/t1.0-1/c15.0.720.720a/p720x720/10696472_701974819884880_2158292596554739579_n.png?_nc_cat=104&_nc_ohc=9BXYX9KBqCMAQmwSqGUVdrMhQ_VQ9hJY8uxAvo4eBU8CP1N8b-IPHNU_w&_nc_ht=scontent.fmaa8-1.fna&oh=4c476b892da8697b436c7a23f5df4228&oe=5E70BD38" alt="Lights" style="width:100%">
          <div class="caption">
            <p><center><button type="button" class="btn btn-success btn-block btn-lg">Offer a ride</button></center></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail " style="padding-left: 100px;  padding-right: 100px;">
        <a href="reservation_ss.php" target="_blank">
          <img src="https://i.ebayimg.com/00/s/MzAwWDMwMA==/z/kGcAAOSwmnFdzKi-/$_2.JPG" alt="Nature" style="width:100%" >
          <div class="caption">
            <p><center><button type="button" class="btn btn-success btn-block btn-lg">Find a ride</button></center></p>
          </div>
        </a>
      </div>
    </div>	
	}
?>
	
	</div>
	
  </body>
  <footer class="page-footer blue">

  <div class="footer-copyright text-center ">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a>
  </div>

</footer>
 </html>