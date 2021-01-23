
<!DOCTYPE Html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery/.min.js></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.js"></script>
<title>Registration</title>
<style>
<!--li
{
padding-left: 20px;
padding-right: 20px;
}-->
.backspace
{
margin-left: -324px;
}
</style>
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mytab">
			 </button>
		</div>
		<div class="collapse navbar-collapse" id="mytab">
			<ul class="nav navbar-nav navbar-right">
			<li class="active">
				<li><a href="index.php">Home </a></li>
				<li><a href="registration_ss.php"><span class="glyphicon glyphicon-user"> Owner </a></li>
				<li><a href="reservation_ss.php"><span class="glyphicon glyphicon-user"> Customer </a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-log-out"> LogOut</span></a></li>
				</ul>
			</div>
	</nav>
</div>
<!--<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="#">fr</a></li>
</ul>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#">Car</a>
</div>
</div>-->
<div class="row">
<form method="post" action="registration_ss.php">
<div class="col-md-7" class="col-sm-7" class="col-lg-7" class="col-xs-7"><br><br><br>
<div class="container">

<center><h4><label><span class="backspace"> Registration-fill your vehicle details</span></label></h4></center><br><br>
<div class="form-group row">
<label for="vehicle" class="col-sm-5 col-form-label"name="vtype" >Choose Vehicle-type : </label>
<select name="vtype">
<option value="Car">Car </option>
<option value="Bike">Bike </option>
<option value="Van">Van </option> 
<option value="Van">Auto </option>
</select>
</div>
<div class="form-group row">
<label for="vno" class="col-sm-5 col-form-label" >Vehicle Number ( in Number plate ): </label>
<input type="text" class="col-sm-4 " id="vno" name="vno" placeholder="Enter valid vehicle number"required/>
</div>
<div class="form-group row">
<label for="seats" class="col-sm-5 col-form-label" >Available seats : </label>
<input type="number" id="seats" name="seats" class="col-sm-4 " placeholder="Enter the number of seats available" required/>
</div>
<div class="form-group row">
<label for="from_area" class="col-sm-5 col-form-label" >From (Location):</label>
<input type="text" id="from_area" name="from_area" class="col-sm-4" placeholder="Location where you start your travel" required/>
</div>
<div class="form-group row">
<label for="to_area" class="col-sm-5 col-form-label" >To (Location):</label>
<input type="text" id="to_area" name="to_area" class="col-sm-4 " placeholder="Location where you end your travel" required/>
</div>
<div class="form-group row">
<label for="date" class="col-sm-5 col-form-label" >Date</label>
<input type="text" id="date" name="date" class="col-sm-4 " placeholder="Kindly give date in yyyy-mm-dd format" required/>
</div>



<div class="form-group row">
<label for="stime" class="col-sm-5 col-form-label" >Starting time (in format => [hrs:mins:AM/PM] ):</label>
<input type="time" id="stime" name="stime" class="col-sm-4 " required/>
</div>
<div class="form-group row">
<label class="col-sm-5 col-form-label">Allowed gender-type : </label>
<label><input type="radio" name="r" id="r" value="Male" required/> Male &emsp;</label>
<label><input type="radio" name="r" id="r" value="Female" required/> Female &emsp;</label>
<label><input type="radio" name="r" id="r" value="Any-type" required/> Any-type </label>
</div>
<div class="form-group row">
<label for="additional info" class="col-sm-5 col-form-label" >Additional Info:</label>
<input type="textarea" id="additional_info" name="additional_info "class="col-sm-4 ">
</div>

<div class="form-group row">
<label for="email" class="col-sm-5 col-form-label" >Email:</label>
<input type="text" id="email" name="email"class="col-sm-4 ">
</div>

<div class="form-group row">
<label for="fare" class="col-sm-5 col-form-label" >Fare:</label>
<input type="text" id="fare" name="fare"class="col-sm-4 ">
</div>


<br>
<br>



<center><span class="backspace"><label><input type="submit" name="upload" value="Upload details" class="btn btn-success" class="form-submit"></label></span></center>
</div>
<br>
</div></form>
<br><br>
<img class="img-responsive" width="500px" height="500px" src="https://cdn3.iconfinder.com/data/icons/traffic-jam/512/traffic-transport-transportation-car-jam-congestion-07-512.png">

</div>

<br>

<?php 

include("dbconnection.php");
if(isset($_POST['upload']))
{
	$vtype=$_POST['vtype'];
	$vehicleno=$_POST['vno'];
	$seats=$_POST['seats'];
	$fromarea=$_POST['from_area'];
	$toarea=$_POST['to_area'];
	$stime=$_POST['stime'];
	$date=$_POST['date'];
	$allowed_gender=$_POST['r'];
	$additional_info=$_POST['additional_info'];
	$fare=$_POST['fare'];
	$email=$_POST['email'];
	//$uid=$_POST['uid'];
	
	
	
	
	if(empty($vehicleno))
	 {
		 echo"<script>alert('Vehicle Number is missing');</script>";
	 }
	 
	 else if(empty($seats))
	 {
		 echo"<script>alert('Number of seats available must be mentioned!');</script>";
	 }
	 else if(empty($fromarea))
	 {
		 echo"<script>alert('\'From\' location is missing!');</script>";
	 }
	 
	 else if(empty($toarea))
	 {
		 echo"<script>alert('\'To\'  location is missing!');</script>";
	 }
	 
	 else if(empty($stime))
	 {
		 echo"<script>alert('Kindly mention the time !');</script>";
	 }
	
	
	else 
	{
	$insert_details="INSERT INTO owner (vehicle_type,vehicle_number,seats,from_area,to_area,travel_date,start_time,allowed_gender,Additional_info,Fare,email)
VALUES ('$vtype','$vehicleno','$seats','$fromarea','$toarea','$date','$stime','$allowed_gender','$additional_info','$fare','$email')";
	//$insert_details="SELECT Fullname,Phonenumber FROM users";
	
	
	
	
	if(mysqli_query($conn,$insert_details))
	{
		//echo "<script>alert('Ride offered');</script> ";
		echo"<script>alert('Ride details updated');</script>";
		$_SESSION[email]=$email;
	//if(mysqli_query($conn,$insert_details))
	//{
	
    //echo "<script>alert('Ride offered');</script>";
	}
	
	else 
	{
	echo "Error : " .$insert_details  .$conn->error;
	}
	}
	/*$SESSION['vtype']=$type;
	$SESSION['vno']=$vehicleno;
	$SESSION['seats']=$seats;
	$SESSION['from']=$from;
	$SESSION['to']=$to;
	$SESSION['stime']=$stime;
	$SESSION['allowed_gender']=$allowed_gender;
	$SESSION['additional_info']=$additional_info;*/
	
/*if (mysqli_query($conn,$insert))
{
	
	echo "<script>alert('Ride offered');</script>";
		echo "<script>window.open('index.php','_self');</script>";

	//$_SESSION[email]=$email;
	
}*/


	
}
?>

<footer class="page-footer blue">

  <div class="footer-copyright text-center "><span class="backspace">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a></span>
  </div>

</footer>
</body>
</html>