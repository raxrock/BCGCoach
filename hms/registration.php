<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sq=$_POST['sq'];
$answer=md5($_POST['answer']);
$query=mysqli_query($con,"insert into users(fullName,address,city,gender,email,password,securityquestion,answer) values('$fname','$address','$city','$gender','$email','$password','$sq','$answer')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	//header('location:user-login.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Registration</title>

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

    <script type="text/javascript">
        function valid() {
            if (document.registration.password.value != document.registration.password_again.value) {
                alert("Password and Confirm Password Field do not match  !!");
                document.registration.password_again.focus();
                return false;
            }
            return true;
        }

    </script>




</head>

<body class="login">
    <!-- start: REGISTRATION -->
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <a href="../../bcg/index.php"><span><img src="images/logo.png" alt="image"></span>
                    <h2> Patient Registration</h2>
                </a>
            </div>
            <!-- start: REGISTER BOX -->
            <div class="box-register">
                <form name="registration" id="registration" method="post" onSubmit="return valid();">
                    <fieldset>
                        <legend>
                            Sign Up
                        </legend>
                        <p>
                            Enter your personal details below:
                        </p>
                        <div class="form-group">
                            Name
                            <input type="text" pattern="[a-zA-Z\s]+" title="Only Charecters are allowed / Enter Your Full name" class="form-control" name="full_name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            Address
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            City
                            <input type="text" pattern="[a-zA-Z].{3,}" title="Invalid City" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <label class="block">
                                Gender
                            </label>
                            <div class="clip-radio radio-primary">
                                <input type="radio" id="rg-female" name="gender" value="female" checked>
                                <label for="rg-female">
                                    Female
                                </label>
                                <input type="radio" id="rg-male" name="gender" value="male">
                                <label for="rg-male">
                                    Male
                                </label>

                            </div>
                        </div>
                        <p>
                            Enter your account details below:
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" name="email" id="email" onBlur="userAvailability()" placeholder="Email" required>
                                <i class="fa fa-envelope"></i> </span>
                            <span id="user-availability-status1" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" id="password" name="password" placeholder="Password" required>
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" id="password_again" name="password_again" placeholder="Password Again" required>
                                <i class="fa fa-lock"></i> </span>
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
                        <div class="form-group">
                            <div class="checkbox clip-check check-primary">
                                <input type="checkbox" id="agree" checked="true" required>
                                <label for="agree">
                                    I agree
                                </label>
                            </div>
                        </div>
                        <div class="form-actions">
                            <p>
                                Already have an account?
                                <a href="user-login.php">
                                    Log-in
                                </a>
                            </p>
                            <button type="submit" class="btn btn-primary pull-right" id="submit" onclick="myFunction()" name="submit">
                                Submit <i class="fa fa-arrow-circle-right"></i>
                            </button>
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

    <script>
        function userAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check_availability.php",
                data: 'email=' + $("#email").val(),
                type: "POST",
                success: function(data) {
                    $("#user-availability-status1").html(data);
                    $("#loaderIcon").hide();
                },
                error: function() {}
            });
        }

    </script>



    <script>
        function myFunction() {
            var x = document.getElementById("agree").required;

        }

    </script>
</body>
<!-- end: BODY -->

</html>
