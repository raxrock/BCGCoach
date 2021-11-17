<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
  {
    
    $vid=$_GET['viewid'];
    $bp=$_POST['bp'];
    $bs=$_POST['bs'];
    $weight=$_POST['weight'];
    $temp=$_POST['temp'];
    $pres=$_POST['pres'];
    $nvisit=$_POST['nvisit'];
    $ndose=$_POST['ndose'];
 
      $query.=mysqli_query($con, "insert   tblmedicalhistory(PatientID,BloodPressure,BloodSugar,Weight,Temperature,MedicalPres,nextvisit,nextdose)value('$vid','$bp','$bs','$weight','$temp','$pres','$nvisit','$ndose')");
    if ($query) {
    echo '<script>alert("Medicle history has been added.")</script>';
    echo "<script>window.location.href ='manage-patient.php'</script>";
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
    <title>Next Dose Medical History</title>

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
</head>

<body>
    <div id="app">
        <?php include('include/sidebar.php');?>
        <div class="app-content">
            <?php include('include/header.php');?>
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Upcoming Medication  | Medical History</h1>
                                The last data in the table is the recent data refreshed.
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Upcoming Medication</span>
                                </li>
                                <li class="active">
                                    <span>Medical History</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="over-title margin-bottom-15">Your <span class="text-bold">Next Medication is </span></h1> 
                                <?php
                               $vid=$_GET['viewid'];
                               $ret=mysqli_query($con,"select * from tblpatient where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
                                <table border="1" class="table table-bordered">
                               
                                    
                                   

                                    <?php }?>
                                </table>
                                <?php  

$ret=mysqli_query($con,"select * from tblmedicalhistory  where PatientID='$vid'");



 ?>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                 
                                  
                                    <?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
                                    <tr>
                                        
                                        
                                        <td><center><h1><?php  echo $row['nextdose'];?></h1> on <h1><?php  echo $row['nextvisit'];?></h1></center></td>
                                    </tr>
                                    <?php $cnt=$cnt+1;} ?>
                                </table>

                                <!--  Fetch symptoms answers 
                                     <?php  

                                $ret=mysqli_query($con, "select * from tblmedicalhistory  where pId='$vid'");



 ?>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr align="center">
                                        <th colspan="14">Medical History</th>
                                    </tr>
                                    <tr>
                                        <th>#</th>
                                        <th>Are you receiving BCG ?</th>
                                        <th>When was the last dose of BCG recived ?</th>
                                        <th>Are you having any symptoms ?</th>
                                        <th>When did your symptoms start ?</th>
                                        <th>Are you having pain on passing urine?</th>
                                        <th>How many times do you wake up to pass urine after sleeping ?</th>
                                        <th>How many times do you pass urine in a day ?</th>
                                        <th>How urgently do you have to rust to pass to urine ?</th>
                                        <th> Do you have blood in urine?</th>
                                        <th> Are you having fever?</th>
                                        <th>  Do you have any rashes on your body ?</th>
                                        <th>Did you visit any doctor for these symptoms ?</th>
                                        <th>Were you admitted for these symptoms ?</th>
                                     
                                   </tr>
                                    <?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php  echo $row['q1'];?></td>
                                        <td><?php  echo $row['q2'];?></td>
                                         <td><?php  echo $row['q3'];?></td>
                                         <td><?php  echo $row['q4'];?></td>
                                         <td><?php  echo $row['q5'];?></td>
                                         <td><?php  echo $row['q6'];?></td>
                                         <td><?php  echo $row['q7'];?></td>
                                         <td><?php  echo $row['q8'];?></td>
                                         <td><?php  echo $row['q9'];?></td>
                                         <td><?php  echo $row['q10'];?></td>
                                         <td><?php  echo $row['q11'];?></td>
                                         <td><?php  echo $row['q12'];?></td>
                                        <td><?php  echo $row['q13'];?></td>
                                    </tr>
                                    <?php $cnt=$cnt+1;} ?>     
                                </table>
                                  -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start: FOOTER -->
    <?php include('include/footer.php');?>
    <!-- end: FOOTER -->

    <!-- start: SETTINGS -->
    <?php include('include/setting.php');?>

    <!-- end: SETTINGS -->

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

    </script>
    <!-- end: JavaScript Event Handlers for this page -->
    <!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>
