<?php
session_start();

if (!isset($_SESSION['user_type'])) {
    header('Location: ../Access/login.php');
} else if ($_SESSION['user_type'] != 'iptmanager') {
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
                        style="background-image: url('../Images/avatar3.png');width:100px;height:100px;">
                    </div>
                    <h1 id="colorlib-logo">
                        <a href="index.php">
                            <label class="unameview">
                                <?php echo $_SESSION["user_name"] ?>
                            </label><br>
                            <label class="uemailview">
                                <?php echo $_SESSION["user_email"] ?>
                            </label>
                        </a>
                    </h1>
                </div>
                <hr>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="students">Students</a></li>
                            <li><a href="#" data-nav-section="experts">It Experts</a></li>
                            <li><a href="#" data-nav-section="contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <hr>
                <div class="text-center">
                    <label class="btnlogout btn"><a href="../Access/logout.php">Log out</a></label>
                </div>

                <div class="colorlib-footer dnone">
                    <p><small>&copy;
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </span> <span>Demo Images: <a href="https://unsplash.com/"
                                    target="_blank">Unsplash.com</a></span></small></p>
                    <ul>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-twitter2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                    </ul>
                </div>



            </aside>

            <div id="colorlib-main">
                <section class="colorlib-services" data-section="students">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <h2 class="colorlib-heading">Students</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Pending</span>
                            </div>
                        </div>

                        <div class="row row-pt-md">

                            <?php
                            include 'Controller/php/php_loadAllStudent.php';

                            foreach ($responseData as $response) {
                                if ($response['user_type'] == "student") {
                                    if($response['acc_status'] == "pending"){
                                        echo '
                                        <div class="col-md-4 text-center animate-box">
                                            <div class="services color-3">
                                                <span class="icon">
                                                    <i class="fab fa-connectdevelop"></i>
                                                </span>
                                                <div class="desc">
                                                <form action="Controller/php/php_ApproveRejectRemoveStd.php" method="POST">
                                                    <h5 class="unameview">'.$response['user_name'].'</h5>
                                                    <p style="font-size:10px;">'.$response['user_email'].'</p>
                                                    <p style="font-size:10px;">'.$response['user_nic'].'</p>
                                                    <input type="text" value="'.$response['user_email'].'" name="s_email" class="dnone">
                                                    <button class="btn actbtn aprove" type="submit" name="approve" >Approve</button>
                                                    <button class="btn actbtn reject" type="submit" name="reject" >Reject</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    }else{

                                    }
                                    
                                } else {
                                }
                            }
                            ?>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Approved</span>
                            </div>
                        </div>

                        <div class="row row-pt-md">
                            <?php
                            include 'Controller/php/php_loadAllStudent.php';

                            foreach ($responseData as $response) {
                                if ($response['user_type'] == "student") {
                                    if($response['acc_status'] == "approved"){
                                        echo '
                                        <div class="col-md-4 text-center animate-box">
                                            <div class="services color-1">
                                                <span class="icon">
                                                    <i class="fab fa-connectdevelop"></i>
                                                </span>
                                                <div class="desc">
                                                <form action="Controller/php/php_ApproveRejectRemoveStd.php" method="POST">
                                                    <h5 class="unameview">'.$response['user_name'].'</h5>
                                                    <p style="font-size:10px;">'.$response['user_email'].'</p>
                                                    <p style="font-size:10px;">'.$response['user_nic'].'</p>
                                                    <input type="text" value="'.$response['user_email'].'" name="s_email" class="dnone">
                                                    <button class="btn actbtn reject" type="submit" name="reject" >Remove</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    }
                                    else {
                                        
                                    }
                                    
                                } else {
                                }
                            }
                            ?>

                        </div>
                    </div>
                </section>

                <section class="colorlib-services" data-section="experts">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <h2 class="colorlib-heading">It Experts</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Pending</span>
                            </div>
                        </div>

                        <div class="row row-pt-md">

                            <?php
                            include 'Controller/php/php_loadAllStudent.php';

                            foreach ($responseData as $response) {
                                if ($response['user_type'] == "expert") {
                                    if($response['acc_status'] == "pending"){
                                        echo '
                                        <div class="col-md-4 text-center animate-box">
                                            <div class="services color-3">
                                                <span class="icon">
                                                    <i class="fab fa-connectdevelop"></i>
                                                </span>
                                                <div class="desc">
                                                <form action="Controller/php/php_ApproveRejectRemoveExp.php" method="POST">
                                                    <h5 class="unameview">'.$response['user_name'].'</h5>
                                                    <p style="font-size:10px;">'.$response['user_email'].'</p>
                                                    <p style="font-size:10px;">'.$response['user_nic'].'</p>
                                                    <input type="text" value="'.$response['user_email'].'" name="s_email" class="dnone">
                                                    <button class="btn actbtn aprove" type="submit" name="approve" >Approve</button>
                                                    <button class="btn actbtn reject" type="submit" name="reject" >Reject</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    }else{

                                    }
                                    
                                } else {
                                }
                            }
                            ?>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Approved</span>
                            </div>
                        </div>

                        <div class="row row-pt-md">
                            <?php
                            include 'Controller/php/php_loadAllStudent.php';

                            foreach ($responseData as $response) {
                                if ($response['user_type'] == "expert") {
                                    if($response['acc_status'] == "approved"){
                                        echo '
                                        <div class="col-md-4 text-center animate-box">
                                            <div class="services color-1">
                                                <span class="icon">
                                                    <i class="fab fa-connectdevelop"></i>
                                                </span>
                                                <div class="desc">
                                                <form action="Controller/php/php_ApproveRejectRemoveExp.php" method="POST">
                                                    <h5 class="unameview">'.$response['user_name'].'</h5>
                                                    <p style="font-size:10px;">'.$response['user_email'].'</p>
                                                    <p style="font-size:10px;">'.$response['user_nic'].'</p>
                                                    <input type="text" value="'.$response['user_email'].'" name="s_email" class="dnone">
                                                    <button class="btn actbtn reject" type="submit" name="reject" >Remove</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    }
                                    else {
                                        
                                    }
                                    
                                } else {
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
                            <div class="col-md-5">
                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                    data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-globe-outline"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="#">info@domain.com</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                    data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-map"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box"
                                    data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="tel://">+123 456 7890</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-md-push-1">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box"
                                        data-animate-effect="fadeInRight">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="" id="message" cols="30" rows="7" class="form-control"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-send-message"
                                                    value="Send Message">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
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
    <script src="Controller/js/main.js"></script>

</body>

</html>