<?php
session_start();
//error_reporting(0);
include("include/config.php");
// Code for updating Password
if(isset($_POST['change']))
{
$name=$_SESSION['fullname'];
$email=$_SESSION['email'];
$newpassword=md5($_POST['password']);
$query=mysqli_query($con,"update users set password='$newpassword' where fullName='$name' and email='$email'");
if ($query) {
echo "<script>alert('Password successfully updated.');</script>";
echo "<script>window.location.href ='user-login.php'</script>";
}

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patient Reset Password | BCG COACH</title>

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
                <a href="../index.php"><img src="images/logo.png" alt="image">
                    <h2> Patient Reset Password</h2>
                </a>
            </div>

            <div class="box-login">
                <form class="form-login" name="passwordreset" method="post" onSubmit="return valid();">
                    <fieldset>
                        <legend>
                            Patient Reset Password
                        </legend>
                        <p>
                            Please set your new password.<br />
                            <span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
                        </p>

                        <div class="form-group">
                            New Password
                            <span class="input-icon">
                                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" id="password" name="password" placeholder="Password" required>
                                <i class="fa fa-lock"></i> </span>
                        </div>




                        <div class="form-actions">

                            <button type="submit" class="btn btn-primary pull-right" name="change">
                                Change <i class="fa fa-arrow-circle-right"></i>
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
