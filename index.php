<?php include "includes/db.php";?>
<?php
if(isset($_POST['submit'])) {
    
    // $email = $_POST['email'];
    // $phone_Number = $_POST['phone_Number'];
    
    // if($email && $phone_Number) {
        
    //     echo $email;
    //     echo $phone_Number;
        
    // } else {
    //     echo "this fields cannot be blank";
    // }
    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     
    $connection = mysqli_connect('localhost', 'safeygwt_ade_codes', 'Zayb1010.', 'safeygwt_ade');
    if($connection) {
        //  echo $email;
         header("Location: welcome.php");
    } else {
        die("Database connection failed");
    }
    
    $query = "INSERT INTO client(name,email,subject,message) ";
    $query .= "VALUES ('$name', '$email', '$subject', '$message')";
    
   $result = mysqli_query($connection, $query);
    
    if(!$result) {
        
        die('Query FAILED' . mysqli_error());
        
    }
}

?>


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Ade Codes </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="images/dem.jpg">

    <!-- Favicon -->	
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
   <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    <!-- Pe Icon  css -->
    <link rel="stylesheet" type="text/css" href="css/mobrise.css">
    <!-- Megnific pop-up  css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!--Owl Slider-->
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <!-- Animate -->
    <link href="css/aos.css" rel="stylesheet">
    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--Template Color-->
    <link href="css/colors/default.css" rel="stylesheet">
    
  
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62949216b0d10b6f3e74b5f2/1g4a5la8u';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    

</head>
<body>
<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
    <div class="container">
        <!-- LOGO -->
        <a href="" class="navbar-brand logo">
            Ade Codes
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center">
                <li class="nav-item active">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#service" class="nav-link">services</a>
                </li>
<!--
                <li class="nav-item">
                    <a href="#resume" class="nav-link">Resume</a>
                </li>
-->
                <li class="nav-item">
                    <a href="#tech" class="nav-link">My Tech Stack</a>
                </li>
                
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="visualcontent/" class="nav-link">Graphics Portfolio</a>
                </li>
                 <li class="nav-item">
                    <a href="AI_car/" class="nav-link">Self-driving Car</a>
                </li>
                
            </ul>
            <button class="navbar-toggles">
                <i class="navbar-toggles-icon mbri-menu" onclick="openNav()"></i>
            </button>

            <div id="mySidenav" class="sidenav navbar-nav">
                <div class="home-center">
                    <div class="home-desc-center ">
                        <button class="closebtn" onclick="closeNav()">&times;</button>
                        <ul class="list-unstyled side-bar">
                            <li class="">
                                <a href="#home">Home</a>
                            </li>
                            <li class="">
                                <a href="#about">About</a>
                            </li>

                            <li class="">
                                <a href="#service">Services</a>
                            </li>

<!--
                            <li class="">
                                <a href="#resume">Resume</a>
                            </li>
-->

                            <li class="">
                                <a href="#tech">My Tech Stack</a>
                            </li>
                            <!--
                            <li class="">
                                <a href="#blog">Blog</a>
                            </li>
                            -->

                            <li class="">
                                <a href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="visualcontent/" class="nav-link">Graphics Portfolio</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->

        <!-- Home -->
        <section class="section bg-home" id="home">
            <div class="bg-overlay"></div>
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h4 class="home-title text-white" data-aos="fade-up"> Hello, I'm Adeola Mubarak </h4>
                                    <p class="home-sub-title pt-4" data-aos="fade-up">A full-stack Web Developer</p>

                                    <ul class="social-icons list-unstyled pt-5" data-aos="fade-up">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/AdeolaMubarak" target="_blank"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com/chessdeen" target="_blank"><i class="mdi mdi-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/Ade Codes" target="_blank"><i class="mdi mdi-linkedin"></i></a></li>
                                    </ul>
                                    <div class="mt-5">
                                        <a href="https://wa.me/2349036881496" target="_blank" class="btn btn-outline-white text-uppercase" data-aos="fade-up">Contact Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home end -->

        <!-- About -->
        <section class="section bg-light" id="about">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up">
                            <h2>About Me</h2>
                            <div class="under-line">
                                <div class="line-up">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">

                        <div class="about-content mx-auto text-center mt-3" data-aos="fade-up">
                            <img src="https://comarile.sirv.com/IMG_7491.JPG" alt="" class="img-fluid rounded-circle mx-auto d-block">

                            <h4 class="pt-5">I'm Adeola Mubarak </h4>
                            <!--
                            <p class="pt-3">Mubarak Adeola is a Software Developer and a Project Manager.</p> -->
                        </div>
                        <div class="text-center mt-5" data-aos="fade-up">
                            <a href="https://wa.me/2349036881496/" target="_blank" class="btn btn-custom m-3" data-aos="fade-up">Hire Me
                                <i class="mdi mdi-arrow-right-thick"></i>
                            </a>
<!--                            <a href="" class="btn btn-custom " data-aos="fade-up">Download My CV</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About end -->

        <!-- services -->
        <section class="section" id="service">
          <div class="bg-gradiant-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up">
                            <h2 class="text-light">My Services</h2>
                            <div class="under-line">
                                <div class="line-up">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-boxed" data-aos="fade-up">
                            <img src="images/icons/Dialpad.png" alt="service-icon-img" class="service-icon" data-aos="fade-up">
                            <div class="service-body text-light">
                                <div class=""></div>
                                <h5>Web development</h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="service-boxed" data-aos="fade-up">
                            <img src="images/icons/Target.png" alt="service-icon-img" class="service-icon" data-aos="fade-up">
                            <div class="service-body text-light">
                                <h5>Web Designing</h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="service-boxed" data-aos="fade-up">
                            <img src="images/icons/Movie.png" alt="service-icon-img" class="service-icon" data-aos="fade-up">
                            <div class="service-body text-light">
                                <h5> Project Management </h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-boxed" data-aos="fade-up">
                            <img src="images/icons/Send.png" alt="service-icon-img" class="service-icon" data-aos="fade-up">
                            <div class="service-body text-light">
                                <h5>Business Development</h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="service-boxed" data-aos="fade-up">
                            <img src="images/icons/Stats.png" alt="service-icon-img" class="service-icon" data-aos="fade-up">
                            <div class="service-body text-light">
                                <h5>Business Branding</h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                        <!--
                    <div class="col-lg-4">
                        <div class="service-boxed" data-aos="fade-up">
                            <img src="static/images/icons/Settings.png" alt="service-icon-img" class="service-icon" data-aos="fade-up">
                            <div class="service-body text-light">
                                <h5>Content creation</h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                  -->
                </div>
            </div>
        </section>
        <!-- Services end -->

        <!--fun fact -->
        
        <section class="pt-5 pb-5 bg-custom">
            <div class="container">
                <div class="row justify-content-center" id="counter" data-aos="fade-up">
                    <div class="col-lg-3 text-white text-center pt-3 pb-3" data-aos="fade-up">
                        <div class="counter-icon">
                            <i class="mdi mdi-timer"></i>
                        </div>
                        <h1 class="counter-value" data-count="Uncountable">Uncountable</h1>
                        <h5 class="counter-name">Happy Clients</h5>
                    </div>

                    <div class="col-lg-3 text-white text-center pt-3 pb-3" data-aos="fade-up">
                        <div class="counter-icon">
                            <i class="mdi mdi-briefcase"></i>
                        </div>
                        <h1 class="counter-value" data-count="10">10</h1>
                        <h5 class="counter-name">Cups Of Coffee</h5>
                    </div>

                    <div class="col-lg-3 text-white text-center pt-3 pb-3" data-aos="fade-up">
                        <div class="counter-icon">
                            <i class="mdi mdi-account-multiple"></i>
                        </div>
                        <h1 class="counter-value" data-count="Lost Count">Lost Count</h1>
                        <h5 class="counter-name">Successful Projects</h5>
                    </div>

                    <div class="col-lg-3 text-white text-center pt-3 pb-3" data-aos="fade-up">
                        <div class="counter-icon">
                            <i class="mdi mdi-trophy"></i>
                        </div>
                        <h1 class="counter-value" data-count="0">0</h1>
                        <h5 class="counter-name">Awards Won</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact end-->

        <!-- Resume -->
<!--
        <section class="section" id="resume">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up">
                            <h2>Education</h2>
                            <div class="under-line">
                                <div class="line-up">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-page">
                    <div class="timeline-item">
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-6">
                                <div class="duration date-label-left">2013 - 2019</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="event event-description-right">
                                    <h4>B.tech in Agricultural Economics (Lautech)</h4>
                                    <p class="timeline-subtitle"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
-->
					<!--
                    <div class="timeline-item">
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-6">
                                <div class="event event-description-left">
                                    <h4>Master In Business Adminstration, European University of lefke North-cyprus Turkey</h4>
                                    <p class="timeline-subtitle"> </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="duration duration-right ">2014 - 2015</div>
                            </div>
                        </div>
                    </div>
					-->
<!--
                    <div class="timeline-item">
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-6">
                                <div class="duration date-label-left"> 2018 - ∞</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="event event-description-right">
                                    <h4>Full Stack Web Developer, Udacity</h4>
                                    <p class="timeline-subtitle"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
-->
        <!-- Resume end -->

        <!-- Experience -->
        <!--
        <section class="section pt-0">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up">
                            <h2>Experience </h2>
                            <div class="under-line">
                                <div class="line-up">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-page">
                    <div class="timeline-item">
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-6">
                                <div class="duration date-label-left">2008 - 2012</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="event event-description-right">
                                    <h4>Senior Graphic Designer</h4>
                                    <p class="timeline-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-6">
                                <div class="event event-description-left">
                                    <h4>Web developer</h4>
                                    <p class="timeline-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="duration duration-right ">2012 - 2014</div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-6">
                                <div class="duration date-label-left"> 2014 - 2016</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="event event-description-right">
                                    <h4>Freelancer</h4>
                                    <p class="timeline-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      -->
        <!-- Expirience end -->



        <!-- Portfolio -->

        <section id="tech" class="pt-5 pb-5 bg-custom">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up">
                            <h2>My Tech Stack</h2>
                            <div class="under-line">
                                <div class="line-up">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- portfolio menu -->

                <div class="row justify-content-center mt-4" data-aos="fade-up">
                    <ul class="col container-filter categories-filter mb-0" id="filter">
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".adobe">Adobe Photoshop</a></li>
<!--                        <li><a class="categories" data-filter=".python">python</a></li>-->
                        <li><a class="categories" data-filter=".php">Php</a></li>
                        <li><a class="categories" data-filter=".web">Web App</a></li>
                    </ul>
                </div>

                <!-- End portfolio  -->

            </div>

            <!-- Gallery -->

            <div class="container">
                <div class="row justify-content-center nf-col-3 mt-5 projects-wrapper">

                    <div class="col-lg-4 nf-item p-0 php" data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/laraimg.png" title="LARAVEL">
                                <img class="rounded-circle img-responsive" src="images/portfolio/laraimg.png" alt="1" style="height: 100px;"/>
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">Php framework</h5>
                                        <p class="text-white">laravel</p>
                                        <i class="mbri-right text-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 nf-item p-0 adobe" data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/photoshop.png" title="Adobe Photoshop">
                                <img class="rounded-circle img-responsive mfp-fade" src="images/portfolio/photoshop.png" alt="2" style="height: 100px;"/>
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">Adobe Photoshop</h5>
                                        <p class="text-white">Graphic Design</p>
                                        <i class="mbri-right "></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>



                    <div class="col-lg-4 nf-item p-0 react" data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/ec2.png" title="Consequat massa">
                                <img class="rounded-circle img-responsive mfp-fade" src="images/portfolio/React.png" alt="2" style="height: 100px;"/>
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">React JS</h5>
                                        <p class="text-white">React JavaScript</p>
                                        <i class="mbri-right "></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


<!--
                    <div class="col-lg-4 nf-item p-0 amazon" data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/lightsail.png" title="Consequat massa">
                                <img class="rounded-circle img-responsive mfp-fade" src="images/portfolio/lightsail.png" alt="2" style="height: 100px;"/>
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">amazon services</h5>
                                        <p class="text-white">lightsail</p>
                                        <i class="mbri-right "></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
-->

<!--
                    <div class="col-lg-4 nf-item p-0 python" data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/django.png" title="Quisque rutrum">
                                <img class="rounded-circle img-responsive" src="images/portfolio/django.png" alt="4" style="height: 100px;" />
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">python framework</h5>
                                        <p class="text-white">django</p>
                                        <i class="mbri-right text-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>`
-->

<!--
                    <div class="col-lg-4 nf-item p-0 python" data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/flaskk.png" title="Tellus eget ">
                                <img class="rounded-circle img-responsive" src="images/portfolio/flaskk.png" alt="4" style="height: 100px;"/>
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">python framework</h5>
                                        <p class="text-white">flask</p>
                                        <i class="mbri-right text-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
-->

                    <div class="col-lg-4 nf-item p-0 web" data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/html5.png" title="HTML 5">
                                <img class="rounded-circle img-responsive" src="images/portfolio/html5.png" alt="5" style="height: 100px;"/>
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">html</h5>
                                        <p class="text-white">html</p>
                                        <i class="mbri-right text-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 nf-item p-0 web" data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/css3.png" title="CSS 3">
                                <img class="rounded-circle img-responsive" src="images/portfolio/css3.png" alt="5" style="height: 100px;"/>
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">CSS</h5>
                                        <p class="text-white">CSS</p>
                                        <i class="mbri-right text-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>





                    <div class="col-lg-4 nf-item p-0 web html css" data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/js.jpg" title="JAVASCRIPT">
                                <img class="rounded-circle img-responsive" src="images/portfolio/js.jpg" alt="6" style="height: 100px;"/>
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">Javascript</h5>
                                        <p class="text-white">Javascript</p>
                                        <i class="mbri-right text-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 nf-item p-0 " data-aos="fade-up">
                        <div class="gallary-box m-2 text-center">
                            <a class="mfp-image" href="images/portfolio/gthub.png" title="GITHUB">
                                <img class="rounded-circle img-responsive mfp-fade" src="images/portfolio/gthub.png" alt="2" style="height: 100px;"/>
                                <div class="item-effect">
                                    <div class="item-caption">
                                        <h5 class="text-light">Git</h5>
                                        <p class="text-white">github</p>
                                        <i class="mbri-right "></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>
            </div>

            <!-- End  Gallary -->

        </section>

        <!-- End portfolio -->

        <!-- Testimonial slider-->
        
        
        
        <!--<section class="section bg-testi">-->
        <!--    <div class="bg-gradiant-overlay"></div>-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-12">-->
        <!--                <div class="section-title text-center" data-aos="fade-up">-->
        <!--                    <h2 class="text-light">Happy Clients</h2>-->
        <!--                    <div class="under-line text-light">-->
        <!--                        <div class="line-up">-->
        <!--                            <div class="dot"></div>-->
        <!--                            <div class="dot"></div>-->
        <!--                            <div class="dot"></div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-12">-->
        <!--                <div id="testi" class="owl-carousel pt-3">-->
        <!--                    <div class="text-center testi-box">-->
        <!--                        <img src="images/testimonial/logo.png" alt="" class="img-fluid rounded-circle mx-auto d-block ">-->
        <!--                        <div class="text-center">-->
        <!--                            <p class="testi-client-name"> - <a href="#" target="_blank"> Philip Ilori Foundation </a></p>-->
        <!--                        </div>-->
        <!--                        <blockquote>-->
        <!--                            <p class="user-review text-light  mt-3"> <i class="mbri-quote-left">  </i> &nbsp; A Non Governmental Organization for the less priviledge &nbsp; <i class="mbri-quote-right"></i> </p>-->
        <!--                        </blockquote>-->
        <!--                    </div>-->

        <!--                    <div class="text-center testi-box">-->
        <!--                        <img src="images/testimonial/Cover.jpg" alt="" class="img-fluid rounded-circle mx-auto d-block" data-aos="fade-up">-->
        <!--                        <div class="text-center">-->
        <!--                            <p class="testi-client-name"> - <a href="#" target="_blank"> Mo Revelation </a></p>-->
        <!--                        </div>-->
        <!--                        <blockquote>-->
        <!--                            <p class="user-review text-light  mt-3"> <i class="mbri-quote-left">  </i> &nbsp; Cakes, Confectioneries and Surprise package. &nbsp; <i class="mbri-quote-right"></i> </p>-->
        <!--                        </blockquote>-->
        <!--                    </div>-->
                            
        <!--                    <div class="text-center testi-box">-->
        <!--                        <img src="images/testimonial/zmartbwai.png" alt="" class="img-fluid rounded-circle mx-auto d-block" data-aos="fade-up">-->
        <!--                        <div class="text-center">-->
        <!--                            <p class="testi-client-name"> - <a href="https://zmartbwai.world" target="_blank"> Zmartbwai World </a></p>-->
        <!--                        </div>-->
        <!--                        <blockquote>-->
        <!--                            <p class="user-review text-light  mt-3"> <i class="mbri-quote-left">  </i> &nbsp; Afrobeat Artiste Website. &nbsp; <i class="mbri-quote-right"></i> </p>-->
        <!--                        </blockquote>-->
        <!--                    </div>-->

                        

        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        
        <!-- testimonial end 


        <!-- blog -->
        <!--
        <section class="section" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up">
                            <h2>Recent News</h2>
                            <div class="under-line text-light">
                                <div class="line-up">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4  mt-3">
                        <div class="blog-box" data-aos="fade-up">
                            <figure>
                                <img src="static/images/blog/blog-1.jpg" alt="" class="img-fluid">
                            </figure>

                            <div class="blog-contant p-4">
                                <a href="#">
                                    <h3>Aliquem erat Volupat</h3>
                                </a>
                                <p class="text-muted blog-link pt-2">
                                    <span class="link-admin"><a href="#" class="link-admin"><i class="mdi mdi-account"></i>&nbsp; by admin</a> </span>
                                    <span class="link-admin ml-2"><i class="mdi mdi-calendar"></i>&nbsp; <a href="#"> November 19, 2017</a></span>
                                </p>
                                <div class="post-desce">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
                                </div>
                                <div class="pt-3">
                                    <a href="#" class="btn-sm btn-custom" data-aos="fade-up">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4  mt-3">
                        <div class="blog-box" data-aos="fade-up">
                            <figure>
                                <img src="static/images/blog/blog-2.jpg" alt="" class="img-fluid">
                            </figure>

                            <div class="blog-contant p-4">
                                <a href="#">
                                    <h3>Aliquem erat Volupat</h3>
                                </a>
                                <p class="text-muted blog-link pt-2">
                                    <span class="link-admin"><a href="#" class="link-admin"><i class="mdi mdi-account"></i>&nbsp; by admin</a> </span>
                                    <span class="link-admin ml-2"><i class="mdi mdi-calendar"></i>&nbsp; <a href="#"> November 19, 2017</a></span>
                                </p>
                                <div class="post-desce">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
                                </div>
                                <div class="pt-3">
                                    <a href="#" class="btn-sm btn-custom" data-aos="fade-up">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4  mt-3">
                        <div class="blog-box" data-aos="fade-up">
                            <figure>
                                <img src="static/images/blog/blog-3.jpg" alt="" class="img-fluid">
                            </figure>

                            <div class="blog-contant p-4">
                                <a href="#">
                                    <h3>Aliquem erat Volupat</h3>
                                </a>
                                <p class="text-muted blog-link pt-2">
                                    <span class="link-admin"><a href="#" class="link-admin"><i class="mdi mdi-account"></i>&nbsp; by admin</a> </span>
                                    <span class="link-admin ml-2"><i class="mdi mdi-calendar"></i>&nbsp; <a href="#"> November 19, 2017</a></span>
                                </p>
                                <div class="post-desce">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
                                </div>
                                <div class="pt-3">
                                    <a href="#" class="btn-sm btn-custom" data-aos="fade-up">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         -->
        <!-- blog end -->

        <section class="section bg-light" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up">
                            <h2>Get In Touch</h2>
                            <div class="under-line text-light">
                                <div class="line-up">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-4 ml-auto text-center">
                        <i class="fa fa-phone fa-3x sr-contact" data-sr-id="2" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <p>+234 903 688 1496</p>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact" data-sr-id="3" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <p>
                            <a href="mailto:hello@Ade Codes.codes">hello@ade.codes</a>
                        </p>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="section bg-light" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up">
                            <h2>Leave Us A Message</h2>
                            <div class="under-line text-light">
                                <div class="line-up">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-form mt-4" data-aos="fade-up">
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="your name...">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input name="email" type="email" class="form-control" placeholder="your email...">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input name="subject" type="text" class="form-control" placeholder="your Subject.." />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" rows="5" class="form-control" placeholder="your message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <input type="submit" name="submit" class="btn btn-custom text-uppercase" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- contact end -->

<!-- Footer start -->
<?php include "includes/footer.php";?>
