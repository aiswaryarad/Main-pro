<?php

$msg = "";

include 'connection.php';

if (isset($_GET['reset'])) {
    if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE code='{$_GET['reset']}'")) > 0) {
        if (isset($_POST['signup'])) {
            $password = mysqli_real_escape_string($con, md5($_POST['password']));
            $confirm_password = mysqli_real_escape_string($con, md5($_POST['confirmpassword']));

            if ($password === $confirm_password) {
                $query = mysqli_query($con, "UPDATE users SET password='{$password}', code='' WHERE code='{$_GET['reset']}'");

                if ($query) {
                    header("Location: login.php");
                }
            } else {
                echo("<div class='alert alert-danger'>Password and Confirm Password do not match.</div>");
            }
        }
    } else {
        echo("<div class='alert alert-danger'>Reset Link do not match.</div>");
    }
} else {
    header("Location: forgotpassword.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style1.css">  
</head>

<body>
    <div class="container">
        <form id="signup" class="form" method="POST">
            <h1>Change Password</h1>

            <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" autocomplete="off"required>
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

            <div class="form-field">
                <input type="submit" value="Change Password" name="signup" class="btn">
            </div>
            <p>
                Back to<a href="login.php">Login !</a>
            </p>
        </form>
    </div>
    <script src="register.js"></script>
</body>
</html>