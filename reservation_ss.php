<?php

	session_start();
	
?>
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
	<div class="container">
	<center> <label for="Td"><h2>Find your ride</h2></label></center>
		<form class="form-inline" method="post" action="reservation_ss.php">
		
	<div class="row">
	<div class= "col-md-7" class="col-sm-7" class="col-lg-7" class="col-xs-8"><br><br><br><br><br><br>
			<div class="form-group">
				<label for="From">From : </label>
				<input type="text" id="from_area" name="from_area">
			</div>
			&emsp;
			<div class="form-group">
				<label for="To">To : </label>
				<input type="text" id="to_area" name="to_area">
			</div>
			<div class="form-group">
				&emsp;&emsp;
				<input class="btn btn-md btn-info" name="filter"id="filter" value="Filter" class="form-submit" class="glyphicon glyphicon-filter"type="submit"/>
				<!--<button type="button" class="btn btn-md btn-info" >Filter
				<span class="glyphicon glyphicon-filter"></span></button>-->
			</div>
			<br><br><br><br>
			</div>
			<img class="img-responsive" width="280px" height="200px" src="https://www.pinclipart.com/picdir/big/495-4956265_servicing-car-registration-icon-clipart.png">
  
			</div>
			</form>
	<br>
	<br>
	
	
	
	
	
	<?php 
	include("dbconnection.php");
	$gdate=getdate();		//getting date
	$d=$gdate['mday'];
	$m=$gdate['mon'];
	$y=$gdate['year'];
	$cdate=$y."-".$m."-".$d; //Current formatted date
	$f="SELECT from_area,to_area,vehicle_type,seats,travel_date,start_time,allowed_gender,vehicle_number, Additional_info,fare,email FROM owner WHERE travel_date='$cdate' ";
	$res=mysqli_query($conn,$f);
	if(mysqli_num_rows($res)===0)
	{
		echo "Not available";
	}
	$i=1;
	while($r=mysqli_fetch_array($res))
	{
		 
	?>
	<center><h3><b>Available Vehicles of today (<?php echo $cdate;?>)</b></h3></center><br><br>
	<table class="table table-bordered table-responsive" id="Td1">
	<thead>
	<tr style="border-color:black;"> 
		<th>S.No</th>
		<th>From</th>
		<th>To</th>
		<th>Type</th>
		<th>Number of seats</th>
		<th>Traveldate</th>
		<th>Startingtime</th>
		<th>Vehicle number</th>
		<th>Allowed Gendertype</th>
		<th>Additional info</th>
		<th>Fare</th>
		<!--<th>Email</th>-->
		<th>Book</th>
		</tr>
		</thead>
	<tbody style="border-color:black;">
		
	<tr>
	 <td><?php echo $i++; ?></td>
	 <td><?php echo $r["from_area"]; ?></td>
	 <td><?php echo $r["to_area"]; ?></td>
	  <td><?php echo $r["vehicle_type"]; ?></td>
	  <td><?php echo $r["seats"]; ?></td>
	  <td><?php echo $r["travel_date"]; ?></td>
	 <td><?php echo $r["start_time"];?></td>
	  <td><?php echo $r["vehicle_number"]; $_SESSION['vno']=$r["vehicle_number"];?></td>
	  
	  <td><?php echo $r["allowed_gender"]; ?></td>
	   <td><?php echo $r["Additional_info"]; ?></td>
	  <td><?php echo $r["fare"]; ?></td>
	  <!--<td><?php echo $r["email"];?></td>-->
	   <td><a href="book.php" >Book</td>
	   
	</tr>
	<?php 
	
	}
	?>
	</tbody>
	</table>
	
	
	
	
	<center><h3><b>Your Search Results</b></h3></center><br><br>
	<table class="table table-bordered table-responsive"  style="background-color:skyblue; id="Td">
	<thead>
	<tr style="border-color:black;"> 
		<th>S.No</th>
		<th>From</th>
		<th>To</th>
		<th>Type</th>
		<th>Number of seats</th>
		<th>Gender type</th>
		<th>Vehicle number</th>
		<th>Date</th>
		<th>Starting time</th>
		<th>Additional info</th>
		<th>Fare</th>
		<!--<th>Email</th>-->
		<th>Book</th>
		</tr>
	</thead>
	
	<tbody style="border-color:black;">
	
<!--<script>alert('Before clicking book Please note down the owners email');</script>-->
	
	<?php 
	include("dbconnection.php");
	if(isset($_POST['filter']))
	{
		$fromc=$_POST['from_area'];
		$toc=$_POST['to_area'];
		$q="SELECT from_area,to_area,vehicle_type,seats,allowed_gender,vehicle_number,travel_date,start_time,Additional_info,fare,email
		FROM owner WHERE from_area='$fromc' AND to_area='$toc' ";
		$val=mysqli_query($conn,$q);
		
		if( mysqli_num_rows($val)===0)
		{
			echo "No results found";
		}
	$i=1;
	
	while($r=mysqli_fetch_array($val))
	{
	?>
	<tr>
	
	 <td><?php echo $i++; ?></td>
	 <td><?php echo $r["from_area"]; ?></td>
	 <td><?php echo $r["to_area"]; ?></td>
	 <td><?php echo $r["vehicle_type"]; ?></td>
	 
	 <td><?php echo $r["seats"]; ?></td>
	 <td><?php echo $r["allowed_gender"]; ?></td>
	 <td><?php echo $r["vehicle_number"]; ?></td>
	 <td><?php echo $r["travel_date"]; ?></td>
	 <td><?php echo $r["start_time"];?></td>
	  <td><?php echo $r["Additional_info"]; ?></td>
	  <td><?php echo $r["fare"]; ?></td>
	  <!--<td><?php echo $r["email"];?></td>-->
	  
	  <td><a href="book.php" >Book</td>
	</tr>
	<?php
	}
	
		}
	?>

	</tbody>
	</table>
		
	
	</div>
	<br><br><br>
	<footer class="page-footer blue">
<div class="footer-copyright text-center ">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a>
	
	</div>
</footer>
</body>
</html>