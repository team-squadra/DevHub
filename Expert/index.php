<?php
session_start();

if (!isset($_SESSION['user_type'])) {
    header('Location: ../Access/login.php');
} else if ($_SESSION['user_type'] != 'expert') {
    header('Location: ../index.php');
} else {
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/logo/logo.png" />
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
    <!--===============================================================================================-->
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!--===============================================================================================-->
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!--===============================================================================================-->
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--===============================================================================================-->
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!--===============================================================================================-->
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <!--===============================================================================================-->
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--===============================================================================================-->
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <!--===============================================================================================-->
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!--===============================================================================================-->
    <!-- fontawsom icons JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <!--===============================================================================================-->
    
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    <!--===============================================================================================-->
</head>

<body>
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <div class="author-img"
                        style="background-image: url(../images/logo/logo_gray.png);width:100px;height:100px;">
                    </div>
                    <h1 id="colorlib-logo">
                        <a href="index.php">
                            <label class="unameview">
                                <?php echo $_SESSION["user_name"]?>
                            </label><br>
                            <label class="uemailview">
                                <?php echo $_SESSION["user_email"]?>
                            </label>
                        </a>
                    </h1>
                </div>
                <hr>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                            <li><a href="#" data-nav-section="about">About</a></li>
                            <li><a href="#" data-nav-section="services">Services</a></li>
                            <li><a href="#" data-nav-section="contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <hr>
                <div class="text-center">
                    <label class="btn"><a href="../Access/logout.php">Log out</a></label>
                </div>

            </aside>

            <div id="colorlib-main">
                <section id="colorlib-hero" class="js-fullheight" data-section="home">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url(images/img_bg_1.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div
                                            class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                <div class="desc">
                                                    <h1>Hi! <br>I'm Jackson</h1>
                                                    <h2>100% html5 bootstrap templates Made by <a
                                                            href="https://colorlib.com/"
                                                            target="_blank">colorlib.com</a></h2>
                                                    <p><a class="btn btn-primary btn-learn">Download CV <i
                                                                class="icon-download4"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="colorlib-about" data-section="about">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="col-md-12">
                                        <div class="about-desc">
                                            <span class="heading-meta">About Us</span>
                                            <h2 class="colorlib-heading">Who Am I?</h2>
                                            <?php 
                                            include 'Controllers/get_expert_details.php';

                                            foreach($responseData AS $response) {

                                                $description = $response['description'];

                                                if($description == ""){
                                                    echo'No description to show';
                                                }
                                                else{
                                                    echo'
                                                        <p>'.$description.'</p>
                                                    ';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <section class="colorlib-services" data-section="services">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">What I do?</span>
                                <h2 class="colorlib-heading">Here are some of my expertise</h2>
                            </div>
                        </div>
                        <div class="row row-pt-md">
                            <?php 
                                include 'Controllers/get_students.php';

                                foreach($responseData AS $response) {

                                    $name = $response['name'];
                                    $description = $response['description'];
                                    $profile_pic = $response['profile_pic'];
                                    if($profile_pic == ""){
                                        echo'No image records';
                                    }
                                    else{
                                        echo'
                                            <div class="col-md-4 text-center animate-box">
                                                <div class="services color-1">
                                                    <span class="icon">
                                                        <div class="author-img-services"
                                                            style="background-image: url(data:image/png;base64,' . $profile_pic . ');width:100px;height:100px;">
                                                        </div>
                                                    </span>
                                                    <div class="desc">
                                                        <h3>'.$name.'</h3>
                                                        <p>'.$description.'</p>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                            ?>                       
                        </div>
                    </div>
                </section>

                <section class="colorlib-contact" data-section="contact">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Get in Touch</span>
                                <h2 class="colorlib-heading">Contact</h2>
                            </div>
                        </div>
                        <div class="row">
                            <?php 
                                include 'Controllers/get_expert_details.php';
                                foreach($responseData AS $response) {

                                    $phone_number = $response['phone_number'];
                                    $email = $response['email'];
                                    $company = $response['company'];
                                    
                                    if($email == ""){
                                        echo'No Contact Details to show';
                                    }
                                    else{
                                        echo'
                                                                                    
                                            <div class="col-md-5">
                                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                                    data-animate-effect="fadeInLeft">
                                                    <div class="colorlib-icon">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                    <div class="colorlib-text">
                                                        <p><a href="#">'.$email.'</a></p>
                                                    </div>
                                                </div>
                
                                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                                    data-animate-effect="fadeInLeft">
                                                    <div class="colorlib-icon">
                                                        <i class="far fa-building"></i>
                                                    </div>
                                                    <div class="colorlib-text">
                                                        <p>'.$company.'</p>
                                                    </div>
                                                </div>
                
                                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                                    data-animate-effect="fadeInLeft">
                                                    <div class="colorlib-icon">
                                                        <i class="fas fa-mobile-alt"></i>
                                                    </div>
                                                    <div class="colorlib-text">
                                                        <p><a href="tel://">'.$phone_number.'</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                        ';
                                    }
                                }
                            ?>

                        </div>
                    </div>
                </section>

            </div><!-- end:colorlib-main -->
        </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>


    <!-- MAIN JS -->
    <script src="js/main.js"></script>

</body>

</html>