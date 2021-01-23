
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	  </button>
	  </div>
	  
	  <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
		 <li><a href="index.php">Home</a></li>
	</ul>
	</div>
	
	</div>
	</nav>

<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="container">
 <div class="signup-content">
       <div class="signup-form">
          <h2 class="form-title">Create an account</h2>
			<br>
			<div class="col">
				<div class="col-xs-12">
                     <form class="Account Creation " method="post" action="index.php">
							<div class="form-group row">
								
                                <label for="Full Name"class="col-sm-2 col-form-label">Full name :  </label>
								<div class="col=sm-10">
                                <input type="text"  id="full_name" name="full_name" autocomplete="off" required>
                           </div>
							</div>
						
							<div class="form-group row">
							
								<label class="col-sm-2 col-form-label"> Gender :  </label>

								<label class="radio-inline col-sm-2 col-form-label"> <input type="radio" class="col=sm-10" id="gender" name="gender" value="Male"/>Male</label>
								<label class="radio-inline col-sm-2 col-form-label"><input type="radio" class="col=sm-10" id="gender" name="gender" value="Female"/>Female</label>
								</div>
								
								<div class="form-group row">
								
								<label for="Age" class="col-sm-2 col-form-label">Age :  </label> 
								<div class="col=sm-10">
								<input type="number" id="age"  name="age" required>
								</div>
								</div>
								
							<div class="form-group row">
					
					<label for="Phone No" class="col-sm-2 col-form-label">Phone number : <i class="zmdi zmdi-phone"></i></label>
					<div class="col=sm-10">
					<input type="text"  id="mobile_no" name="mobile_no" autocomplete="off" required >
				</div></div>
				
								
							<div class="form-group row">
					
					<label for="User Name" class="col-sm-2 col-form-label">User name : <i class="zmdi zmdi-account material-icons-name"></i></label>
					<div class="col=sm-10">
					<input  type="text"  id="user_name" name="user_name" autocomplete="off" required>
				</div></div>
				
				
					
					<div class="form-group row">
					
					<label for="Enter Password" class="col-sm-2 col-form-label">Password : </label>
					<div class="col=sm-10">
					<input type="password"  id="password"  name="password" autocomplete="off" required>
				</div> </div>
				<div class="form-group row">
				
					<label for="Confirm Password" class="col-sm-2 col-form-label"> Confirm Password : <i class="zmdi zmdi-lock"></i></label>
					<div class="col=sm-10">
					<input type="password"  id="confirm_password" placeholder=" re-enter password" name="confirm_password" autocomplete="off" required>
				</div></div>
												
				<div class="form-group row">
					
					<label for="Enter Mail id" class="col-sm-2 col-form-label"> Email : <i class="zmdi zmdi-email"></i></label>
				<div class="col=sm-10">
					<input type="text" id="email" placeholder=" mail id with tce.edu" name="email" autocomplete="off" required>
				</div></div>
				
				
		
												
							
                            <!--<div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>-->
							
							<br>
                            <div class="form-group form-button">
							<a href="login.php"><input type="submit" class="btn btn-md btn-info" name="create" id="create" class="form-submit" value="Create" ></a>
                               
								<!--<input class="form-submit" type="reset" value="Reset" name="register" >-->						
                            </div>
							</div>
							</div>
                        </form>
                    </div>
                   

                </div>
            </div>
			

       
    </div>
	<img class="img-responsive" src="https://image.flaticon.com/icons/png/512/13/13732.png">
	</div>
</div>
<?php 
include("dbconnection.php");
if(isset($_POST['create']))
{
	$fullname=$_POST['full_name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$phone=$_POST['mobile_no'];
	$username=$_POST['user_name'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$email=$_POST['email'];



$SESSION['full_name']=$fullname;
$SESSION['gender']=$gender;
$SESSION['age']=$age;
$SESSION['mobile_no']=$phone;
$SESSION['username']=$username;
$SESSION['password']=$password;
$SESSION['email']=$email;


$check_email="select * from users where email='$email'";

$q=mysqli_query($conn,$check_email);
if(mysqli_num_rows($q)>0)
{
	echo "<script>alert('$email already exists,Please try another email id for account creation');</script>";
	exit();
}	


if($gender==' ')
{
	echo "<script>alert('Please select gender type');</script>";
	exit();
}

if($password!=$confirm_password)
{
	echo "<script>alert('Please give password correctly');</script>";
	exit();
}
if(!preg_match("/tce.edu/",$email))
{
	echo "<script>alert('Please give tce.edu mail id');</script>";
	exit();
}

/*if(preg_grep("tce.edu",$email)!=TRUE)
{
	echo "<script>alert('Please give tce.edu mail id');</script>";
	exit();
}*/




 $insert_user="insert into users (Fullname,Gender,Age,Phonenumber,username,password,email)
		VALUES ('$fullname','$gender','$age','$phone','$username','$password','$email')";  


      /*if ($conn->query($insert_user) === TRUE) {
    echo "<script>alert('Account created successfully');</script>";
	$_SESSION['email']=$email;
} else {
    echo "Error: " . $insert_user . "<br>" . $conn->error;
}*/
//$rs=mysqli_query($conn,$insert_user)or die("Could Not Perform the Query");
		
		if(mysqli_query($conn,$insert_user))  
        {  
	echo "<script>alert('Account created successfully');</script> ";
	echo "<script>window.open('login.php','_self');</script>";
//echo "Registration is successful";			  
	
 //echo '<script> window.alert("Registration is successful")</script>';
 //echo"<script>window.open('login.php','_self')</script>"; 



			$_SESSION['email']=$email;

	}

	
	
	
	
}

?>



<footer class="page-footer blue">

  <div class="footer-copyright text-center ">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a>
  </div>

</footer>
</body>
</html>