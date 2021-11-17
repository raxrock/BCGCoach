<?php
session_start();
error_reporting(0);
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit'])){
$name=$_POST['fullname'];
$email=$_POST['email'];
    $sq=$_POST['sq'];
    $answer=md5($_POST['answer']);
$query=mysqli_query($con,"select id from  users where fullName='$name'and email='$email' and securityquestion='$sq' and answer='$answer'");
$row=mysqli_num_rows($query);
if($row>0){

$_SESSION['fullname']=$name;
$_SESSION['email']=$email;
header('location:reset-password.php');
} else {
echo "<script>alert('Invalid details. Please try with valid details');</script>";
echo "<script>window.location.href ='forgot-password.php'</script>";


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
                <a href="../index.php"><img src="images/logo.png" alt="image">
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
                            Please enter your Email and password to recover your password.<br />

                        </p>

                        <div class="form-group form-actions">
                            
                                <input type="text" class="form-control" name="fullname" placeholder="Registred Full Name">
                                
                        </div>

                        <div class="form-group">
                            
                                <input type="email" class="form-control" name="email" placeholder="Registred Email">
                                
                        </div>
                        <p>
                            Choose a security question and type the answer below. This data will be used for your password recovery
                        </p>
                        <div class="form-group">
                            <label for="sq"> </label>
                            <select name="sq" id="sq">
                                <option value="Nick Name">What is your nickname?</option>
                                <option value="Birth Place">Where were you born?</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" pattern="[a-zA-Z\s]+" class="form-control" name="answer" placeholder="Answer" required>
                        </div>
                        <div class="form-actions">

                            <button type="submit" class="btn btn-primary pull-right" name="submit">
                                Reset <i class="fa fa-arrow-circle-right"></i>
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
