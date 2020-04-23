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
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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

    <!-- button -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <?php 
                        include 'Controllers/get_expert_details.php';

                        foreach($responseData AS $response) {

                            $profile_pic = $response['profile_pic'];
                            $profession = $response['profession'];
                            $company = $response['company'];
                            $name = $_SESSION["user_name"];
                            
                            if($profile_pic == ""){
                                echo'
                                <div class="author-img"
                                    style="background-image: url(../images/logo/logo_gray.png);width:100px;height:100px;">
                                </div>
                                ';
                            }
                            else{
                                echo'
                                <div class="author-img"
                                    style="background-image: url(data:image/png;base64,' . $profile_pic . ');width:100px;height:100px;">
                                </div>
                                <h1 id="colorlib-logo">
                                    <a href="index.php">
                                        <label class="unameview">
                                            '.$name.'
                                        </label><br>
                                        <label class="uemailview">
                                            '.$profession.' in '.$company.'
                                        </label>
                                    </a>
                                </h1>
                                ';
                            }
                        }
                    ?>

                </div>
                <hr>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                            <li><a href="#" data-nav-section="about">About</a></li>
                            <li><a href="#" data-nav-section="services">Student list</a></li>
                            <li><a href="#" data-nav-section="contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <hr>
                <div class="text-center">
                    <label class="btnlogout btn"><a href="../Access/logout.php">Log out</a></label>
                </div>

            </aside>

            <div id="colorlib-main">
                <section id="colorlib-hero" class="js-fullheight" data-section="home">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url(images/istockphoto.jpg">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div
                                            class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                <div class="desc">
                                                    <h1>Recruit! <br>New trainee</h1>
                                                    <h2>
                                                        Let's start to Recruit trainees for your job opptunity.
                                                    </h2>
                                                    <p>
                                                        <a href="#" data-nav-section="about" class="btn btn-primary btn-learn">Explore</a>
                                                    </p>
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
                                            <h2 class="colorlib-heading">
                                                Who Am I?
                                                <button type="button" class="btn btn-primary btn-send-message" data-toggle="modal" data-target="#myModal">Edit Profile</button> 
                                            </h2>
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
                                include 'Controllers/indexfunctions.php';

                                foreach($responseData AS $response) {

                                    $name = $response['name'];
                                    $description = $response['description'];
                                    $profile_pic = $response['profile_pic'];

                                    $set_description = setdescription($description);
                                    $word_count= countwords($description);

                                    if($description == ""){
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
                                                        <p> No description ...</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <label class="btn">
                                                            <a href="#">View</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
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
                                                        <p>'.$set_description.' ...</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <label class="btn">
                                                            <a href="#">View</a>
                                                        </label>
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
                                    
                                    if($company == ""){
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

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>       
            <div class="modal-body">
                <form action="Controllers/update_expert.php" method="post" enctype="multipart/form-data">
                <?php 
                    include 'Controllers/get_expert_details.php';

                        foreach($responseData AS $response) {

                        $name = $response['name'];
                        $gender = $response['gender'];
                        $phone_number = $response['phone_number'];
                        $dob = $response['dob'];
                        $description = $response['description'];
                        $company = $response['company'];
                        $profession = $response['profession'];
                        $company_id = $response['company_id'];

                        if($description == ""){
                            echo'No description to show';
                        }
                        else{
                            echo'
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input type="text" class="form-control" value= '.$name.' id="name" name="name">
                                    </div>
                                </div>
                                <!--  col-md-6   -->
        
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control" value='.$gender.' id="gender" name="gender">
                                    </div>
                                </div>
                                <!--  col-md-6   -->
                            </div>
        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="phone_number">Phone number</label>
                                    <input type="text" class="form-control" value='.$phone_number.' id="phone_number" name="phone_number">
                                    </div>
        
        
                                </div>
                                <!--  col-md-6   -->
        
                                <div class="col-md-6">
        
                                    <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="tel" class="form-control" value='.$dob.'  id="dob" name="dob">
                                    </div>
                                </div>
                            <!--  col-md-6   -->
                            </div>
                            <!--  row   -->
                            <div class="row">
                                <div class="col-md-6">
        
                                    <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" value='.$description.' id="description" name="description">
                                    </div>
                                </div>
                                <!--  col-md-6   -->
        
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="company">Company name</label>
                                    <input type="text" class="form-control" value='.$company.' id="company" name="company">
                                    </div>
        
                                </div>
                                <!--  col-md-6   -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
        
                                    <div class="form-group">
                                    <label for="profession">Profession</label>
                                    <input type="text" class="form-control" value='.$profession.' id="profession" name="profession">
                                    </div>
                                </div>
                                <!--  col-md-6   -->
        
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="company_id">Company id</label>
                                    <input type="text" class="form-control" value='.$company_id.' id="company_id" name="company_id">
                                    </div>
        
                                </div>
                                <!--  col-md-6   -->
                            </div>
                            ';
                        }
                    }
                ?>                 
                    
                    <p>Custom file:</p>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="imagefile" name="imagefile">
                        <label class="custom-file-label" for="imagefile">Choose file</label>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
        </div>
    </div>

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