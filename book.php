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


<nav class="navbar navbar-default">
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
	
	<center> <label for="Td"><h2>Confirm your reservation</h2></label></center>
	<br>
	<br>
	<br>
	<form class="form-inline" method="post" action="book.php">
		
	<div class="row">
	<div class= "col-md-7" class="col-sm-7" class="col-lg-7" class="col-xs-8">
	
	<!--<div class="form-group"
	<label for="email"  class="col-sm-5 col-form-label" >Enter Owner's email</label>
	<input type="text" name="email" id="email" />
	</div>-->
	&emsp; &emsp;
<!--
	<div class="form-group">
	<label for="confirm" ></label>
	<input  class="btn btn-md btn-info" name="confirm"id="confirm" value="confirm" class="form-submit" type="submit" />
	</div>
	-->
	</div>
	</div>
	
	</form>
	
	<br><br>
	<table class="table table-bordered table-responsive" style="border-color:black;" id="Td">
	<thead>
	<tr style="border-color:black;"> 
		<th>S.No</th>
		
		<th>From</th>
		<th>To</th>
		<th>Date</th>
		<th>Starting time</th>
		<th>Type</th>
		<th>Number of seats</th>
		<th>Allowed Gender type</th>
		<th>Vehicle number</th>
		<th>Additional info</th>
		<th>Fare</th>
		<th>Email</th>
		<th>Name of the Owner</th>
		<th>Phone number</th>
		<th>Gender</th>
		
		</tr>
	</thead>
	
	<tbody style="border-color:black;">
	<?php 
	include("dbconnection.php");
	//if(isset($_POST['confirm']))
	//{
	
		/*$q="SELECT from_area,to_area,vehicle_type,seats,allowed_gender,vehicle_number,Additional_info,fare 
		FROM owner WHERE email='$email'";
		
		$q="SELECT Fullname,Gender,Phonenumber FROM users WHERE email='$email'";
		
		$val=mysqli_multi_query($conn,$q);*/
		
		/*if( mysqli_num_rows($val)===0)
		{
			echo "No results found";
		}*/
		
		//$em=$_POST['email'];
		$vno=$_SESSION['vno'];
		//echo $vno;
		
		
		$q="SELECT from_area,to_area,travel_date,start_time,vehicle_type,seats,
		allowed_gender,vehicle_number,
		Additional_info,fare,email FROM owner WHERE vehicle_number='$vno' ";
		

		
		
		$val = $conn->query($q);
		
		//$r=mysqli_fetch_array($val);
		
		
		
		//echo $r["from_area"];
		
	$i=1;
	$r=mysqli_fetch_array($val)
	
	//$em=$r['email'];
	?>
	<td><?php echo $i++; ?></td>
	 <td><?php echo $r["from_area"]; ?></td>
	 <td><?php echo $r["to_area"]; ?></td>
	 <td><?php echo $r["travel_date"];?></td>
	 <td><?php echo $r["start_time"];?></td>
	 <td><?php echo $r["vehicle_type"]; ?></td>
	 <td><?php echo $r["seats"]; ?></td>
	 <td><?php echo $r["allowed_gender"]; ?></td>
	 <td><?php echo $r["vehicle_number"]; ?></td>
	 
	 <td><?php echo $r["Additional_info"];?></td>
	  <td><?php echo $r["fare"]; ?></td>
	  <td><?php   echo $r["email"]; ?></td>
		
		</tr>
	<?php
	//}
	

	
	//$q1="SELECT Fullname,Phonenumber,Gender FROM users WHERE email='$em'";
	//$val1=$conn->query($q1);
		//$j=1;
		//while($row=mysqli_fetch_array($val1))
		//{
//?>
	 <!--<td><?php echo $j++; ?></td>-->
	  
	<!-- <td><?php echo $row["Fullname"]; ?></td>
	 <td><?php echo $row["Phonenumber"]; ?></td>
	  <td><?php echo $row["Gender"]; ?></td>-->
		
		/*<?php 
		}
		?>*/
	</tbody>
	</table>
		
	

	
	</div>
	
	<br><br><br>
<footer class="page-footer blue">

  <div class="footer-copyright text-center "><span class="backspace">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a></span>
  </div>

</footer>	
</body>


</html>
	
	
	
	
	
			
			
			