<?php
session_start();
error_reporting(0);
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit'])){
    $mob=$_GET['cnt'];
    $otp=$_POST['otp'];
    if($_SESSION['ootp'] == $otp)
    {
        session_unset($_SESSION['ootp']);
        echo "
        <script>
        alert('OTP is Verified');
        window.location='reset-password.php?cnt=".$mob."';
        </script>    
        ";
    }else{
        echo "
        <script>
        alert('OTP is Entered is Incorrect');
        window.location='enterotp.php';
        </script>    
        ";
    }


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patient Password Recovery | BCG COACH</title>

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>

<body class="login">
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <a href="../index.html"><img src="images/logo.png" alt="image">
                    <h2> Patient Password Recovery</h2>
                </a>
            </div>

            <div class="box-login">
                <form class="form-login" method="post">
                    <fieldset>
                        <legend>
                            Patient Password Recovery
                        </legend>
                        <p>
                            Please enter your OTP that is sent to your Registered Mobile Number<br />

                        </p>

                        <div class="form-group form-actions">
                            Enter One Time Password
                            <span class="input-icon">
                                <input type="num" class="form-control" name="otp" placeholder="Enter OTP">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>


                        <div class="form-actions">

                            <button type="submit" class="btn btn-primary pull-right" name="submit">
                                Continue <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                        <div class="new-account">
                            Already have an account?
                            <a href="user-login.php">
                                Log-in
                            </a>
                        </div>
                    </fieldset>
                </form>

                <div class="copyright">
                    &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> BCG COACH LAB</span>. <span>All rights reserved</span>
                </div>

            </div>

        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="assets/js/login.js"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            Login.init();
        });

    </script>

</body>
<!-- end: BODY -->

</html>
