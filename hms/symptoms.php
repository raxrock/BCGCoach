<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
  {
    $pid=$_SESSION['id'];
    $Q1=$_POST['q1'];
    $Q2=$_POST['q2'];
    $Q3=$_POST['q3'];
    $Q4=$_POST['q4'];
    $Q5=$_POST['q5'];
    $Q6=$_POST['q6'];
    $Q7=$_POST['q7'];
    $Q8=$_POST['q8'];
    $Q9=$_POST['q9'];
    $Q10=$_POST['q10'];
    $Q11=$_POST['q11'];
    $Q12=$_POST['q12'];
    $Q13=$_POST['q13'];
    
   
 
      $query.=mysqli_query($con, "insert   tblviewreplies(PatientID,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13)value('$pid','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11','$Q12','$Q13')");
    if ($query) {
    echo '<script>alert("You are Classified as Non-Alarming and You are safe!")</script>';
    echo "<script>window.location.href ='dashboard.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patient | Symptoms Tracker </title>

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

    <script type="text/javascript">
        function valid() {
            if (document.sym.q6.value == "morethan3") {
                alert(" As per Our Coach You are classified to Alarming. Please Consult Your Doctor soon !!");
                return false;
            } else if (document.sym.q7.value == ">15") {
                alert(" As per Our Coach You are classified to Alarming. Please Consult Your Doctor soon !!");
                return false;
            } else if (document.sym.q8.value == "severe") {
                alert(" As per Our Coach You are classified to Alarming. Please Consult Your Doctor soon !!");
                return false;
            } else if (document.sym.q9.value == "yes") {
                alert(" As per Our Coach You are classified to Alarming. Please Consult Your Doctor soon !!");
                return false;
            } else if (document.sym.q10.value == ">102F") {
                alert(" As per Our Coach You are classified to Alarming. Please Consult Your Doctor soon !!");
                return false;
            } else if (document.sym.q11.value == "yes") {
                alert(" As per Our Coach You are classified to Alarming. Please Consult Your Doctor soon !!");
                return false;
            } else if (document.sym.q13.value == "yes") {
                alert(" As per Our Coach You are classified to Alarming. Please Consult Your Doctor soon !!");
                return false;
            }
        }

    </script>



</head>

<body>
    <div id="app">
        <?php include('include/sidebar.php');?>
        <div class="app-content">

            <?php include('include/header.php');?>

            <!-- end: TOP NAVBAR -->
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Patient | Symptoms</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Patient</span>
                                </li>
                                <li class="active">
                                    <span>Symptoms</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <!-- end: PAGE TITLE -->
                    <!-- start: BASIC EXAMPLE -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row margin-top-30">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Answer these questions correctly</h5>
                                            </div>
                                            <div class="panel-body">
                                                <p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
                                                    <?php echo htmlentities($_SESSION['msg1']="");?></p>
                                                <form role="form" name="sym" method="post" onSubmit="return valid();">




                                                    <div class="form-group">
                                                        <label for="q1">
                                                            1) Are you receiving BCG ?
                                                        </label><br>
                                                        <input type="radio" name="q1" value="yes" checked required="true"> YES
                                                        <input type="radio" name="q1" value="no" required="true"> NO
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q2">
                                                            2) When was the last dose of BCG recived ?
                                                        </label><br>
                                                        <input class="form-control datepicker" name="q2" required="required" data-date-format="dd-mm-yyyy">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q3">
                                                            3) Are you having any symptoms ?
                                                        </label><br>
                                                        <input type="radio" name="q3" value="yes" checked required="true"> YES
                                                        <input type="radio" name="q3" value="no" required="true"> NO
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q4">
                                                            4) When did your symptoms start ?
                                                        </label><br>
                                                        <input type="radio" name="q4" value="Less than 48hrs" checked required="true"> Less than 48hrs
                                                        <input type="radio" name="q4" value="More than 48hrs" required="true"> More than 48hrs
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q5">
                                                            5) Are you having pain on passing urine?
                                                        </label><br>
                                                        <input type="radio" name="q5" value="yes" checked required="true"> YES
                                                        <input type="radio" name="q5" value="no" required="true"> NO
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q6">
                                                            6) How many times do you wake up to pass urine after sleeping ?

                                                        </label><br>
                                                        <input type="radio" name="q6" value="1" checked required="true">1
                                                        <input type="radio" name="q6" value="2" required="true"> 2
                                                        <input type="radio" name="q6" value="3" required="true"> 3
                                                        <input type="radio" name="q6" value="morethan3" required="true"> More than 3 times.
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q7">
                                                            7) How many times do you pass urine in a day ?
                                                        </label><br>
                                                        <input type="radio" name="q7" value="<10" checked required="true"> Less than 10 times
                                                        <input type="radio" name="q7" value="10-15" checked required="true"> 10 to 15 times
                                                        <input type="radio" name="q7" value=">15" checked required="true"> More than 15 times
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q8">
                                                            8) How urgently do you have to rust to pass to urine ?
                                                        </label><br>
                                                        <input type="radio" name="q8" value="mild" checked required="true"> MILD : Can hold the urine , Complete the task and go to bathroom.<br>
                                                        <input type="radio" name="q8" value="moderate" required="true"> MODERATE : Can hold the urine, but have to go to bathroom without completing the task.<br>
                                                        <input type="radio" name="q8" value="severe" required="true"> SEVERE : Cannot hold the urine have torush to bathroom everytime.<br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q9">
                                                            9) Do you have blood in urine?
                                                        </label><br>
                                                        <input type="radio" name="q9" value="yes" checked required="true"> YES
                                                        <input type="radio" name="q9" value="no" required="true"> NO

                                                    </div>


                                                    <div class="form-group">
                                                        <label for="q10">
                                                            10) Are you having fever?

                                                        </label><br>
                                                        <input type="radio" name="q10" value="100F-102F" checked required="true"> YES, 100F to 102F
                                                        <input type="radio" name="q10" value="<100F" required="true"> NO, less than 100F
                                                        <input type="radio" name="q10" value=">102F" required="true"> High Fever, More than 102F


                                                    </div>


                                                    <div class="form-group">
                                                        <label for="q11">
                                                            11) Do you have any rashes on your body ?
                                                        </label><br>
                                                        <input type="radio" name="q11" value="yes" checked required="true"> YES
                                                        <input type="radio" name="q11" value="no" required="true"> NO
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q12">
                                                            12) Did you visit any doctor for these symptoms ?
                                                        </label><br>
                                                        <input type="radio" name="q12" value="yes" checked required="true"> YES
                                                        <input type="radio" name="q12" value="no" required="true"> NO
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="q13">
                                                            13) Were you admitted for these symptoms ?
                                                        </label><br>
                                                        <input type="radio" name="q13" value="yes" checked required="true"> YES
                                                        <input type="radio" name="q13" value="no" required="true"> NO
                                                    </div>


                                                    <button type="submit" name="submit" class="btn btn-o btn-primary">
                                                        Submit
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- end: BASIC EXAMPLE -->




                </div>

                <!-- end: SELECT BOXES -->

            </div>
        </div>
        <!-- start: FOOTER -->
        <?php include('include/footer.php');?>
        <!-- end: FOOTER -->

        <!-- start: SETTINGS -->
        <?php include('include/setting.php');?>

        <!-- end: SETTINGS -->
    </div>
    <!-- start: MAIN JAVASCRIPTS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
    <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="vendor/autosize/autosize.min.js"></script>
    <script src="vendor/selectFx/classie.js"></script>
    <script src="vendor/selectFx/selectFx.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: CLIP-TWO JAVASCRIPTS -->
    <script src="assets/js/main.js"></script>
    <!-- start: JavaScript Event Handlers for this page -->
    <script src="assets/js/form-elements.js"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            FormElements.init();
        });

        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            startDate: "-15d",
            endDate: "-1d"
        });

    </script>
    <script type="text/javascript">
        $('#timepicker1').timepicker();

    </script>
    <!-- end: JavaScript Event Handlers for this page -->
    <!-- end: CLIP-TWO JAVASCRIPTS -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</body>

</html>
