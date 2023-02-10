<?php
$con=mysqli_connect("localhost","root","","registration");
if($con==false)
{
  die("ERROR:COULD NOT CONNECT.".mysqli_connect_error());
}
echo "connect successfully.Host info:".mysqli_get_host_info($con);
$name=$_GET["nm"];
$college=$_GET["col"];
$Branch=$_GET["branch"];
$email=$_GET["email"];
$phone_no=$_GET["pnum"];
$check=$_GET["c1"];
$ch="";
foreach ($check as $value) 
 {
$ch.= $value.","; 
 }
$sql2="insert into students values('$name','$college','$Branch','$email','$phone_no','$ch')";

if($con->query($sql2)==true)
{
    echo"You have successfully Registerd";
    
}
else
{
    echo "ERROR: could not able to execute sql".$con->error;
}
?>