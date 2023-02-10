<?php
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: login.php");
    die();
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include 'connection.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $code = mysqli_real_escape_string($con, md5(rand()));

    if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $query = mysqli_query($con, "UPDATE users SET code='{$code}' WHERE email='{$email}'");

        if ($query) {        
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
                $mail->Body    = 'Here is the verification link <b><a href="http://localhost/mini/changepassword.php?reset='.$code.'">http://localhost/miniproject/changepassword.php?reset='.$code.'</a></b>';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            echo "</div>";        
            echo("<div class='alert alert-info'>We've send a verification link on your email address.</div>");
        }
    } else {
        echo("<div class='alert alert-danger'>$email - This email address do not found.</div>");
    }
}

?>







<!DOCTYPE html>
<html>
<head>
    <title>forgot-password</title>
    <link rel="stylesheet" href="style1.css">  
</head>

<body>
    <div class="container">
            <form method="post" action="">
            <h1 style="color:bule;font-size:20px; align:center;">Forgot Password</h1>   
            <div class="form-field">
            <input type="email" name="email" placeholder="Enter Your Email" required>
                <button name="submit" class="btn btn-info" type="submit">Send Reset Link</button>
            </div>

<p>
          <a href="login.php">
          <p style="text-align:right;">go back to login ?</p>
          </a>
</form>
</div>
</body>
</html>