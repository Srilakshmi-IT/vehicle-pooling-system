<?php

$conn=mysqli_connect("localhost","root","ss");
mysqli_select_db($conn,"pooling");
if(!$conn) 
{
	die("Connection failed". mysqli_connect_error());
}

?>


