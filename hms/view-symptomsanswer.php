<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
  {
    $ID=$_GET['ID'];
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
    
   
 
      $query.=mysqli_query($con, "insert   tblviewreplies(PatientId,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13)value('$ID','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11','$Q12','$Q13')");
    if ($query) {
    echo '<script>alert("Answers Symbitted Successfully")</script>';
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
    <title>Users | Medical History</title>

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
                                <h1 class="mainTitle">Users | Medical History</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Users</span>
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
                                <h5 class="over-title margin-bottom-15">Users <span class="text-bold">Medical History</span></h5>
<?php
                               $ID=$_GET['ID'];
                               $ret=mysqli_query($con,"select * from tblviewreplies where PatientId='$ID'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  
                                    <?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?><tr align="center">
                                        <th colspan="8">Medical History</th>
                                    </tr>
                                    <tr>
                                        <th>#</th>
                                        <th>Blood Pressure</th>
                                        <th>Weight</th>
                                        <th>Blood Sugar</th>
                                        <th>Body Temprature</th>
                                        <th>Medical Prescription</th>
                                        <th>Visit Date</th>
                                    </tr>
                                 <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php  echo $row['q1'];?></td>
                                        <td><?php  echo $row['q2'];?></td>
                                        <td><?php  echo $row['q3'];?></td>
                                        <td><?php  echo $row['q4'];?></td>
                                        <td><?php  echo $row['q5'];?></td>
                                        <td><?php  echo $row['q6'];?></td>
                                    </tr>
                                    <?php $cnt=$cnt+1;} ?>
                                </table>

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