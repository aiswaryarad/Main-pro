<?php
session_start(); // starting the session, necessary for using session variables
// declaring and hoisting the variables
$username = "";
$email    = "";
$phno     = "";
$code     = "";
$errors = array(); 
$_SESSION['success'] = "";
$con=mysqli_connect("localhost","root","","packaquipomin");    
if($con===false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}
// registration code
?>