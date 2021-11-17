<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobileno=$_POST['number'];
$dscrption=$_POST['message'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='thankyou.html'</script>";

}


?>



<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Timeline | BCG Coach </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style1.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive1.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">



</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->


    <!-- Start header -->

    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                   
                        <li><a class="nav-link active" href="#">Timeline</a></li>
                  

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner 

    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1>Welcome to BCG COACH</h1>
                                <p>Get a Quick information about BCG and uses.</p>
                                <a href="#about" class="btn">Know More </a>
                            </div>
                        </div>
                    </div>
                \
                    <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1>Beware of symptoms</h1>
                                <p>If you are feeling strange look it may be due to BCG Drug</p>
                                <a href="#sideeffects" class="btn">Know more</a>
                            </div>
                        </div>

                    </div>
                     <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1>Are You Afraid of the Treatement ?</h1>
                                <p>Treatment is simple, no need to panic !</p>
                                <a href="#appointment" class="btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- .pogoSlider
            </div>
        </div>
    </div>
   End Banner -->




    <!-- Start LOGINbnr 

    <div id="services" class="services-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>WELCOME TO BCG COACH</h2>
                        <p>Choose Your Services. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-12 col-md-12" align="center">
                    <div class="about-main-info" align="center">
                        <div class="col-lg-6 col-md-6 col-sm-12" align="center">

                            <a href="hms/user-login.php" class="new-btn-d br-2">Patient</a>
                            <a href="hms/doctor/" class="new-btn-d br-2">Doctor</a>
                            <a href="hms/stockist/user-login.php" class="new-btn-d br-2">Stockist</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

 End LOGINbnr -->

    <!-- Start About us -->



    <div id="about" class="about-box">
        <div class="about-a1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>Timeline </h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row align-items-center about-main-info">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2> What happens during treatment? </h2>
                                <p>A urinary catheter is inserted through your urethra and into your bladder. Then the BCG solution is injected into the catheter. The catheter is clamped off so the solution stays in your bladder. Some doctors may remove the catheter at this time.

You have to hold the medicine in your bladder. You’ll be instructed to lie on your back and to roll from side to side to make sure the solution reaches your entire bladder.

                                    After about two hours, the catheter is unclamped so the fluid can be drained. If the catheter was already removed, you’ll be asked to empty your bladder at this time.</p>
                              
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="about-m">
                                    <ul id="banner">
                                        <li>
                                            <img src="images/about-img-3.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="images/about-img-33.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="images/about-img-333.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About us -->
  <div id="services" class="services-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Know More </h2>
                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-12 col-md-12" align="center">
                    <div class="about-main-info" align="center">
                        <div class="col-lg-6 col-md-6 col-sm-12" align="center">

                            <a href="sideeffects.html" class="new-btn-d br-2">Side Effects</a>
                            <a href="treatment.php" class="new-btn-d br-2">Treatment</a>
                            <a href="index.php" class="new-btn-d br-2">About BCG</a>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!-- Start Services 
    <div id="sideeffects" class="services-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Side Effects</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row align-items-center about-main-info">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2> What are the common side effects ? </h2>
                            <p>Fever, Chills, Cough, Body aches, Joint pain, Weakness, or other Flu symptoms</p>
                            <p>Vomiting, Stomach pain, Jaundice (yellowing of your skin or eyes)
                            </p>
                            <p>Pain or Burning when you urinate, more frequent or Urgent Urinating</p>
                            <p> Urine leakage or Incontinence.</p>
                            <p> Diarrhea, Constipation</p>
                            <p> Tissue particles in your urine (NOT BLOOD)</p>
                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="about-m">
                                <ul id="banner">
                                    <li>
                                        <img src="images/about-img-01.jpg" alt="hello">
                                    </li>
                                    <li>
                                        <img src="images/about-img-02.jpg" alt="hell">
                                    </li>
                                    <li>
                                        <img src="images/about-img-03.jpg" alt="he">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Services 

    <!-- Start Appointment 
    <div id="appointment" class="appointment-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Treatment</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row align-items-center about-main-info">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2> How BCG is used for treatment ? </h2>

                            <p>BCG is injected directly into the bladder using a catheter inserted into the urethra (the tube for passing urine out of your bladder).
                            </p>
                            <p>BCG is usually given once every week for 6 weeks, and then given every 3 to 6 months for up to 2 years. Follow your doctor's instructions about your specific dosing schedule.</p>
                            <p> Call your doctor right away if you have a fever after receiving BCG, especially if the fever lasts for several hours or longer.</p>

                         
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="about-m">
                                <ul id="banner2">
                                    <li>
                                        <img src="images/about-img-04.jpg" alt="hello">
                                    </li>
                               
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Appointment
    <!-- Start Gallery 
    <div id="gallery" class="gallery-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Timeline</h2>
                        <p>Before,During,After the Treatment. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row align-items-center about-main-info">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Are you about to recive the BCG ? Here are some information to know . </h2>

                            <p>Restrict your fluid intake, caffeinated beverages and use of diuretics (water pills) 4 hours prior to procedure if possible.
                            </p>
                            <p>After BCG is placed into the bladder, you will need hold the medicine in your bladder as long as possible up to 2 hours. During that time you may be encouraged to lie down or stay relaxed.</p>
                            <p>For at least 6 hours after you are treated with BCG, your urine will still contain some of the medication and the bacteria it is made from. To prevent the spread of this bacteria, use a toilet rather than a urinal, and sit on the toilet while urinating.</p>

                        <!--    <a href="#" class="new-btn-d br-2">Read More</a> 
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="about-m">
                                <ul id="banner">
                                    <li>
                                        <img src="images/about-img-01.jpg" alt="hello">
                                    </li>
                                    <li>
                                        <img src="images/about-img-02.jpg" alt="hell">
                                    </li>
                                    <li>
                                        <img src="images/about-img-03.jpg" alt="he">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Team -->
    <div id="team" class="team-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>FAQ</h2>
                        <p>Frequently asked Questions</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <div>
                                <h1>Will a tuberculosis (PPD) test be positive after BCG treatment ? <br>
                                </h1>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">YES</h3>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <div>
                                <h1>Is it OK to recive BCG treatment if i test positive for tuberculosis(TB) ? <br>
                                </h1>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">YES</h3>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <div>
                                <h1>Is it OK to be around pregnant women after i receive BCG treatment ? <br>
                                </h1>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">YES</h3>

                        </div>
                    </div>
                </div>


            </div>

        </div>
      
    </div>

    <!-- End Team -->

    <!-- Start Blog -->

    <!-- End Blog -->

    <!-- Start Contact -->
    <div id="contact" class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Contact us</h2>
                        <p>Any Queries Regarding BCG Treatments? </p>
                        <p> Drop a Message . Our Coach will reply ASAP !</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xs-12">
                <div class="contact-block">
                    <form name="contactus" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" class="form-control" name="email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your number" class="form-control" name="number" required data-error="Please enter your number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" name="submit" type="submit">Send Message</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- End Contact -->

        <!-- Start Subscribe -->
        <div class="subscribe-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="subscribe-inner text-center clearfix">
                            <h2>About This Website</h2>
                            <p>This website allows you to know about the BCG Drug and the treatment procedures and medications.
                                Do not relay on this webiste if any critical situation occurs.
                                Visit Your Doctor immediately</p>
                            <p> Health is the real wealth and not pieces of gold and silver.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->

        <!-- Start Footer -->
        <footer class="footer-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">BCG COACH LAB</a> Design By : <a href="hms/admin/">CURIOUZ TECH LABS</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

        <!-- ALL JS FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.pogo-slider.min.js"></script>
        <script src="js/slider-index.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/form-validator.min.js"></script>
        <script src="js/contact-form-script.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/images-loded.min.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>
