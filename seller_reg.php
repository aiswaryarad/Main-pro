<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: login.php");
        die();
    }
//Load Composer's autoloader
require 'vendor/autoload.php';
include 'connection.php';
$msg="";
if(isset($_POST['signup']))
  {
    // receiving the values entered and storing in the variables
    //data sanitization is done to prevent SQL injections
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phno=mysqli_real_escape_string($con,$_POST['phno']);
    $password=mysqli_real_escape_string($con,md5($_POST['password']));
    $password_2=mysqli_real_escape_string($con,md5($_POST['confirmpassword']));
    $brandname=mysqli_real_escape_string($con,$_POST['brandname']);
    $agreement=mysqli_real_escape_string($con,$_POST['agreement']);
    $code = mysqli_real_escape_string($con, md5(rand()));

    $certificate=$_FILES['certificate']['name'];
    $t=$_FILES['certificate']['tmp_name'];
    $f="certificate_upload/".$certificate;
    move_uploaded_file($t, $f);
        if(mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'")) > 0)
    
        {
           echo("This email address has been already exists");
        }
        else
        {
        if($password === $password_2)
        {
        $sql="INSERT INTO users (username,email,password,contact_no,role,status,code,) VALUES('$username','$email','$password','$phno',2,1,'$code')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $res=mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
            if($res){
            $row=mysqli_fetch_assoc($res);
            $user_id=$row['user_id'];
            move_uploaded_file($certificate,"certificate_upload/$certificate");
            $sql2="INSERT INTO seller (brandname,agreement,user_id,certificate) VALUES('$brandname','$agreement','$user_id','$certificate')";
            $result2 = mysqli_query($con, $sql2); 
            if ($result2) 
        {  
            echo "<div style='display: none;'>";
            //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'packquipo@gmail.com';                     //SMTP username
    $mail->Password   = 'Xfaygpjvdoitfkrh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('packquipo@gmail.com');
    $mail->addAddress($email);    


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'no reply';
    $mail->Body    = 'Here is the verification link <b><a href="http://localhost/mini/login.php?verification='.$code.'">http://localhost/miniproject/login.php?verification='.$code.'</a></b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
   $msg= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
echo "</div>";
    echo("<div class='alert alert-info'>We've send a verification link on your email address.</div>");
}
}   
}  
         else {
                        $msg="<div class='alert alert-danger'>Something wrong went.</div";
              }  
            
            }else{
                $msg="<div class='alert alert-danger'password and confirm password do not match</div>";
    }
 }
} 
      
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="sellstyle.css">  
</head>

<body>
    <div class="container">
        <form id="signup" class="form" method="POST" action="seller_reg.php" enctype="multipart/form-data"  required>
            <h1>Sign Up</h1>
            <div class="form-field">
                <label for="username">Owner Name:</label>
                <input type="text" name="username" id="username" autocomplete="off"required>
                <small></small>
            </div>

            <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" autocomplete="off"required>
                <small></small>
            </div>
            
            <div class="form-field">
                <label for="phno">Phone No:</label>
                <input type="text" name="phno" id="phno" autocomplete="off"required>
                <small></small>
            </div>
            <div class="form-field">
                <label for="brandname">Brand Name:</label>
                <input type="text" name="brandname" id="brandname" autocomplete="off"required>
                <small></small>
            </div>
            <div class="form-field">
                <label for="certificate">Brand Registration certificate:</label>
                <input type="file" name="certificate" id="certificate" value="" required>
                <small></small>
            </div>
            
            <div class="form-field">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" autocomplete="off"required>
                <small></small>
            </div>
            <div class="form-field">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirmpassword" id="confirm-password" autocomplete="off" required>
                <small></small>
            </div>

            <div class="">  
            <a href="">Read our trems and conditions</a></br>
            <input type="checkbox" id="agreement" name="agreement" value="agreed">
            <label for="agreement">I agreed your terms and conditions</label><br>
                <small></small>
            </div>
            <div class="form-field">
                <input type="submit" value="Sign up" name="signup" class="btn">
            </div>
            <p>
                Already having an account? <a href="login.php">Login Here!</a>
            </p>
        </form>
    </div>
    <script src="seller_reg.js"></script>
</body>
</html>