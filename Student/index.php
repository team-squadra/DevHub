<?php
session_start();

if (!isset($_SESSION['user_type'])) {
    header('Location: ../Access/login.php');
} else if ($_SESSION['user_type'] != 'student') {
    header('Location: ../index.php');
} else {
}
include("Controller/php/php_loadStudentData.php");
foreach ($responseData as $response) {
    $student_profile_pic = $response['profile_pic'];
    $student_description = $response['description'];
    $student_gender = $response['gender'];
    $student_dob = $response['dob'];
    $student_phone_number = $response['phone_number'];
    $student_address = $response['address'];
    $student_git = $response['git'];
    $student_linkedin = $response['linkedin'];
    $student_stack_overflow = $response['stack_overflow'];

    $student_php = $response['php'];
    $student_css = $response['css'];
    $student_javascript = $response['javascript'];
    $student_c_sharp = $response['c_sharp'];
    $student_c_2plus = $response['c_2plus'];
    $student_java = $response['java'];
    $student_node_js = $response['node_js'];
    $student_react_js = $response['react_js'];
    $student_python = $response['python'];
    $student_ruby = $response['ruby'];
    $student_visual_studio = $response['visual_studio'];
    $student_eclipse = $response['eclipse'];
    $student_netbeans = $response['netbeans'];
    $student_atom = $response['atom'];
    $student_vs_code = $response['vs_code'];
    $student_qt_creator = $response['qt_creator'];
    $student_pycharm = $response['pycharm'];
    $student_intelliJ_idea = $response['intelliJ_idea'];
    $student_code_blocks = $response['code_blocks'];
    $student_rubymine = $response['rubymine'];
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
                        style="background-image: url(data:image/png;base64,<?php echo $student_profile_pic; ?>);width:100px;height:100px;">
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
                            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                            <li><a href="#" data-nav-section="about">About Me</a></li>
                            <li><a href="#" data-nav-section="skills">Skills</a></li>
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
                <section id="colorlib-hero" class="js-fullheight" data-section="home">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <?php
                            include 'Controller/php/php_loadAllStudent.php';

                            foreach ($responseData as $response) {
                                if ($response['name'] != $_SESSION['user_name']) {
                                    echo '
                                <li style="background-image: url(../images/bg_1.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                <div class="desc profilecard">
                                                
                                                <table>
                                                    <tr>
                                                        <td style="width:100%"><div class="profilecardimg" style="background-image: url(data:image/png;base64,' . $response['profile_pic'] . ');"></div></td>
                                                    </tr>
                                                    <tr style="width:100%">
                                                        <td>
                                                        <div>
                                                            <div class="profilecarddetail">
                                                                <h4 class="prouname">' . $response['name'] . '</h4>
                                                                <h6 class="proudetail" style="color:gray;">' . $response['email'] . '</h6>
                                                                <p class="proudetail">' . $response['description'] . '</p><br>
                                                                ';

                                    $php = $response['php'];
                                    if ($php != 0) {
                                        if (0 < $php &&  $php <= 25) {
                                            echo '<label class="prodetailtag clrweak">php</label>';
                                        } else if (25 < $php &&  $php <= 50) {
                                            echo '<label class="prodetailtag clrgood">php</label>';
                                        } else if (50 < $php &&  $php <= 75) {
                                            echo '<label class="prodetailtag clrstrong">php</label>';
                                        } else if (75 < $php &&  $php <= 100) {
                                            echo '<label class="prodetailtag clrexpert">php</label>';
                                        }
                                    }

                                    $javascript = $response['javascript'];
                                    if ($javascript != 0) {
                                        if (0 < $javascript &&  $javascript <= 25) {
                                            echo '<label class="prodetailtag clrweak">javascript</label>';
                                        } else if (25 < $javascript &&  $javascript <= 50) {
                                            echo '<label class="prodetailtag clrgood">javascript</label>';
                                        } else if (50 < $javascript &&  $javascript <= 75) {
                                            echo '<label class="prodetailtag clrstrong">javascript</label>';
                                        } else if (75 < $javascript &&  $javascript <= 100) {
                                            echo '<label class="prodetailtag clrexpert">javascript</label>';
                                        }
                                    }

                                    $c_sharp = $response['c_sharp'];
                                    if ($c_sharp != 0) {
                                        if (0 < $c_sharp &&  $c_sharp <= 25) {
                                            echo '<label class="prodetailtag clrweak">C#</label>';
                                        } else if (25 < $c_sharp &&  $c_sharp <= 50) {
                                            echo '<label class="prodetailtag clrgood">C#</label>';
                                        } else if (50 < $c_sharp &&  $c_sharp <= 75) {
                                            echo '<label class="prodetailtag clrstrong">C#</label>';
                                        } else if (75 < $c_sharp &&  $c_sharp <= 100) {
                                            echo '<label class="prodetailtag clrexpert">C#</label>';
                                        }
                                    }

                                    $c_2plus = $response['c_2plus'];
                                    if ($c_2plus != 0) {
                                        if (0 < $c_2plus &&  $c_2plus <= 25) {
                                            echo '<label class="prodetailtag clrweak">C++</label>';
                                        } else if (25 < $c_2plus &&  $c_2plus <= 50) {
                                            echo '<label class="prodetailtag clrgood">C++</label>';
                                        } else if (50 < $c_2plus &&  $c_2plus <= 75) {
                                            echo '<label class="prodetailtag clrstrong">C++</label>';
                                        } else if (75 < $c_2plus &&  $c_2plus <= 100) {
                                            echo '<label class="prodetailtag clrexpert">C++</label>';
                                        }
                                    }

                                    $java = $response['java'];
                                    if ($java != 0) {
                                        if (0 < $java &&  $java <= 25) {
                                            echo '<label class="prodetailtag clrweak">java</label>';
                                        } else if (25 < $java &&  $java <= 50) {
                                            echo '<label class="prodetailtag clrgood">java</label>';
                                        } else if (50 < $java &&  $java <= 75) {
                                            echo '<label class="prodetailtag clrstrong">java</label>';
                                        } else if (75 < $java &&  $java <= 100) {
                                            echo '<label class="prodetailtag clrexpert">java</label>';
                                        }
                                    }

                                    $node_js = $response['node_js'];
                                    if ($node_js != 0) {
                                        if (0 < $node_js &&  $node_js <= 25) {
                                            echo '<label class="prodetailtag clrweak">node js</label>';
                                        } else if (25 < $node_js &&  $node_js <= 50) {
                                            echo '<label class="prodetailtag clrgood">node js</label>';
                                        } else if (50 < $node_js &&  $node_js <= 75) {
                                            echo '<label class="prodetailtag clrstrong">node js</label>';
                                        } else if (75 < $node_js &&  $node_js <= 100) {
                                            echo '<label class="prodetailtag clrexpert">node js</label>';
                                        }
                                    }

                                    $react_js = $response['react_js'];
                                    if ($react_js != 0) {
                                        if (0 < $react_js &&  $react_js <= 25) {
                                            echo '<label class="prodetailtag clrweak">react js</label>';
                                        } else if (25 < $react_js &&  $react_js <= 50) {
                                            echo '<label class="prodetailtag clrgood">react js</label>';
                                        } else if (50 < $react_js &&  $react_js <= 75) {
                                            echo '<label class="prodetailtag clrstrong">react js</label>';
                                        } else if (75 < $react_js &&  $react_js <= 100) {
                                            echo '<label class="prodetailtag clrexpert">react js</label>';
                                        }
                                    }

                                    $python = $response['python'];
                                    if ($python != 0) {
                                        if (0 < $python &&  $python <= 25) {
                                            echo '<label class="prodetailtag clrweak">python</label>';
                                        } else if (25 < $python &&  $python <= 50) {
                                            echo '<label class="prodetailtag clrgood">python</label>';
                                        } else if (50 < $python &&  $python <= 75) {
                                            echo '<label class="prodetailtag clrstrong">python</label>';
                                        } else if (75 < $python &&  $python <= 100) {
                                            echo '<label class="prodetailtag clrexpert">python</label>';
                                        }
                                    }

                                    echo '<hr>';

                                    $visual_studio = $response['visual_studio'];
                                    if ($visual_studio != 0) {
                                        echo '<label class="prodetailtag clride">Visual studio</label>';
                                    }

                                    $eclipse = $response['eclipse'];
                                    if ($eclipse != 0) {
                                        echo '<label class="prodetailtag clride">Eclipse</label>';
                                    }

                                    $netbeans = $response['netbeans'];
                                    if ($netbeans != 0) {
                                        echo '<label class="prodetailtag clride">Netbeans</label>';
                                    }

                                    $atom = $response['atom'];
                                    if ($atom != 0) {
                                        echo '<label class="prodetailtag clride">Atom</label>';
                                    }

                                    $vs_code = $response['vs_code'];
                                    if ($vs_code != 0) {
                                        echo '<label class="prodetailtag clride">Vs code</label>';
                                    }

                                    $qt_creator = $response['qt_creator'];
                                    if ($qt_creator != 0) {
                                        echo '<label class="prodetailtag clride">Qt creator</label>';
                                    }

                                    $pycharm = $response['pycharm'];
                                    if ($pycharm != 0) {
                                        echo '<label class="prodetailtag clride">Pycharm</label>';
                                    }

                                    $intelliJ_idea = $response['intelliJ_idea'];
                                    if ($intelliJ_idea != 0) {
                                        echo '<label class="prodetailtag clride">IntelliJ IDEA</label>';
                                    }

                                    $code_blocks = $response['code_blocks'];
                                    if ($code_blocks != 0) {
                                        echo '<label class="prodetailtag clride">Code::Blocks</label>';
                                    }

                                    $rubymine = $response['rubymine'];
                                    if ($rubymine != 0) {
                                        echo '<label class="prodetailtag clride">RubyMine</label>';
                                    }



                                    echo '
                                                            </div>
                                                        </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                ';
                                } else {
                                }
                            }
                            ?>

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
                                            <span class="heading-meta">About Me</span>
                                            <h2 class="colorlib-heading animate-box">My Profile</h2>

                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="profilecardimg"
                                                            style="background-image: url(data:image/png;base64,<?php echo $student_profile_pic; ?>);width:100px;height:100px;">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label
                                                            class="prouname"><?php echo $_SESSION["user_name"] ?></label><br>
                                                        <label class="proudetail"
                                                            style="color: gray;"><?php echo $_SESSION["user_email"] ?></label><br>
                                                        <button class="btn btn-primary btn-send-message"
                                                            id="switch_div_btn" onclick="switch_div(1)"
                                                            style="margin-bottom: 20px;">update
                                                            profile</button>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="row dnone" id="pro_data_input">
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box"
                                                            data-animate-effect="fadeInRight">
                                                            <button class="btn btn-primary btn-send-message"
                                                                onclick="switch_div(0)" style="margin-bottom: 10px;"><i
                                                                    class="fas fa-times"></i></button>
                                                            <form action="Controller/php/php_updateProfile.php"
                                                                method="POST" enctype="multipart/form-data">

                                                                <div class="form-group" title="About me">
                                                                    <textarea id="message" cols="30" rows="7"
                                                                        name="description" class="form-control"
                                                                        placeholder="Message"><?php echo $student_description; ?></textarea>
                                                                </div>
                                                                <div class="form-group" title="Address">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Address" name="address"
                                                                        value="<?php echo $student_address; ?>">
                                                                </div>
                                                                <div class="form-group" title="Phone Number">
                                                                    <input type="number" maxlength="10"
                                                                        name="phone_number" class="form-control"
                                                                        placeholder="Phone Number"
                                                                        value="<?php echo $student_phone_number; ?>">
                                                                </div>
                                                                <div class="form-group" title="Date of birth">
                                                                    <input type="date" class="form-control" name="dob"
                                                                        placeholder="D.O.B"
                                                                        value="<?php echo $student_dob; ?>">
                                                                </div>
                                                                <div class="form-group" title="Gender">
                                                                    <select name="gender" class="form-control">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <table>
                                                                        <tr>
                                                                            <td><i class="fab fa-github proicon"></i>
                                                                            </td>
                                                                            <td><input type="text" class="form-control"
                                                                                    placeholder="git" name="git"
                                                                                    value="<?php echo $student_git; ?>">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="form-group">
                                                                    <table>
                                                                        <tr>
                                                                            <td><i class="fab fa-linkedin proicon"></i>
                                                                            </td>
                                                                            <td><input type="text" class="form-control"
                                                                                    placeholder="linkedin"
                                                                                    name="linkedin"
                                                                                    value="<?php echo $student_linkedin; ?>">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="form-group">
                                                                    <table>
                                                                        <tr>
                                                                            <td><i
                                                                                    class="fab fa-stack-overflow proicon"></i>
                                                                            </td>
                                                                            <td><input type="text" class="form-control"
                                                                                    placeholder="stack_overflow"
                                                                                    name="stack_overflow"
                                                                                    value="<?php echo $student_stack_overflow; ?>">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="form-group dnone"
                                                                    title="Current profile pic">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Image" name="cimage"
                                                                        value="<?php echo $student_profile_pic; ?>">
                                                                </div>
                                                                <div class="form-group" title="new profile pic">
                                                                    <label class="custom-file-upload">
                                                                        <center>
                                                                            <input name="nimage" id="nimage_id"
                                                                                type="file" accept=".png, .jpg, .jpeg"
                                                                                onchange="get_img_name()"
                                                                                style="display: none;">
                                                                            <i class="fas fa-upload dnone"></i>
                                                                            <i id="img_input_val">Update Profile
                                                                                Picture</i>
                                                                        </center>
                                                                    </label>
                                                                </div>

                                                                <div class="dnone">
                                                                    <input type="number"
                                                                        value="<?php echo $student_php; ?>" name="php">
                                                                    <input type="number"
                                                                        value="<?php echo $student_css; ?>" name="css">
                                                                    <input type="number"
                                                                        value="<?php echo $student_javascript; ?>"
                                                                        name="javascript">
                                                                    <input type="number"
                                                                        value="<?php echo $student_c_sharp; ?>"
                                                                        name="c_sharp">
                                                                    <input type="number"
                                                                        value="<?php echo $student_c_2plus; ?>"
                                                                        name="c_2plus">
                                                                    <input type="number"
                                                                        value="<?php echo $student_java; ?>"
                                                                        name="java">
                                                                    <input type="number"
                                                                        value="<?php echo $student_node_js; ?>"
                                                                        name="node_js">
                                                                    <input type="number"
                                                                        value="<?php echo $student_react_js; ?>"
                                                                        name="react_js">
                                                                    <input type="number"
                                                                        value="<?php echo $student_python; ?>"
                                                                        name="python">
                                                                    <input type="number"
                                                                        value="<?php echo $student_ruby; ?>"
                                                                        name="ruby">

                                                                    <input type="number"
                                                                        value="<?php echo $student_visual_studio; ?>"
                                                                        name="visual_studio">
                                                                    <input type="number"
                                                                        value="<?php echo $student_eclipse; ?>"
                                                                        name="eclipse">
                                                                    <input type="number"
                                                                        value="<?php echo $student_netbeans; ?>"
                                                                        name="netbeans">
                                                                    <input type="number"
                                                                        value="<?php echo $student_atom; ?>"
                                                                        name="atom">
                                                                    <input type="number"
                                                                        value="<?php echo $student_vs_code; ?>"
                                                                        name="vs_code">
                                                                    <input type="number"
                                                                        value="<?php echo $student_qt_creator; ?>"
                                                                        name="qt_creator">
                                                                    <input type="number"
                                                                        value="<?php echo $student_pycharm; ?>"
                                                                        name="pycharm">
                                                                    <input type="number"
                                                                        value="<?php echo $student_intelliJ_idea; ?>"
                                                                        name="intelliJ_idea">
                                                                    <input type="number"
                                                                        value="<?php echo $student_code_blocks; ?>"
                                                                        name="code_blocks">
                                                                    <input type="number"
                                                                        value="<?php echo $student_rubymine; ?>"
                                                                        name="rubymine">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" name="updatepro"
                                                                        class="btn btn-primary btn-send-message"
                                                                        value="update profile">
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="pro_data_view">
                                                <p><?php echo $student_description; ?></p>
                                                <p><?php echo $student_address; ?></p>
                                                <p><?php echo $student_phone_number; ?></p>
                                                <p><?php echo $student_dob; ?></p>
                                                <p><?php echo $student_gender; ?></p>
                                                <p>
                                                    <label style="font-size: 25px;">
                                                        <a href="<?php echo $student_git; ?>"
                                                            title="<?php echo $student_git; ?>" target="_blank"
                                                            style="margin-right: 10px;">
                                                            <i class="fab fa-github"></i>
                                                        </a>
                                                        <a href="<?php echo $student_linkedin; ?>"
                                                            title="<?php echo $student_linkedin; ?>" target="_blank"
                                                            style="margin-right: 10px;">
                                                            <i class="fab fa-linkedin"></i>
                                                        </a>
                                                        <a href="<?php echo $student_stack_overflow; ?>"
                                                            title="<?php echo $student_stack_overflow; ?>"
                                                            target="_blank">
                                                            <i class="fab fa-stack-overflow"></i>
                                                        </a>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-skills" data-section="skills">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                                data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Specialty</span>
                                <h2 class="colorlib-heading animate-box">My Skills</h2>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <p class="proudetail" style="color: gray;font-size:15px;">Languages</p>
                                <hr>
                            </div>

                            <?php
                            $lan_count = 0;
                            //php/////////////////////////////////////////////////////////////////////////
                            if ($student_php != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Php</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_php && $student_php <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_php && $student_php <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_php && $student_php <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_php && $student_php <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_php . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_php . '%">
                                        <span>' . $student_php . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            //////////////////////////////////////////////////////

                            //css/////////////////////////////////////////////////////////////////////////
                            if ($student_css != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Css</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_css && $student_css <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_css && $student_css <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_css && $student_css <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_css && $student_css <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_css . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_css . '%">
                                        <span>' . $student_css . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            //////////////////////////////////////////////////////

                            //javascript/////////////////////////////////////////////////////////////////////////
                            if ($student_javascript != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Javascript</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_javascript && $student_javascript <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_javascript && $student_javascript <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_javascript && $student_javascript <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_javascript && $student_javascript <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_javascript . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_javascript . '%">
                                        <span>' . $student_javascript . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            //////////////////////////////////////////////////////

                            //c_sharp/////////////////////////////////////////////////////////////////////////
                            if ($student_c_sharp != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>C#</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_c_sharp && $student_c_sharp <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_c_sharp && $student_c_sharp <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_c_sharp && $student_c_sharp <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_c_sharp && $student_c_sharp <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_c_sharp . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_c_sharp . '%">
                                        <span>' . $student_c_sharp . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            //////////////////////////////////////////////////////

                            //c_2plus/////////////////////////////////////////////////////////////////////////
                            if ($student_c_2plus != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>C++</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_c_2plus && $student_c_2plus <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_c_2plus && $student_c_2plus <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_c_2plus && $student_c_2plus <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_c_2plus && $student_c_2plus <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_c_2plus . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_c_2plus . '%">
                                        <span>' . $student_c_2plus . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            //////////////////////////////////////////////////////

                            //java/////////////////////////////////////////////////////////////////////////
                            if ($student_java != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Java</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_java && $student_java <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_java && $student_java <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_java && $student_java <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_java && $student_java <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_java . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_java . '%">
                                        <span>' . $student_java . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            //////////////////////////////////////////////////////

                            //node_js/////////////////////////////////////////////////////////////////////////
                            if ($student_node_js != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Node JS</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_node_js && $student_node_js <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_node_js && $student_node_js <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_node_js && $student_node_js <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_node_js && $student_node_js <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_node_js . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_node_js . '%">
                                        <span>' . $student_node_js . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            //////////////////////////////////////////////////////

                            //react_js/////////////////////////////////////////////////////////////////////////
                            if ($student_react_js != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>React Js</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_react_js && $student_react_js <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_react_js && $student_react_js <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_react_js && $student_react_js <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_react_js && $student_react_js <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_react_js . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_react_js . '%">
                                        <span>' . $student_react_js . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            //////////////////////////////////////////////////////

                            //python/////////////////////////////////////////////////////////////////////////
                            if ($student_python != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Python</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_python && $student_python <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_python && $student_python <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_python && $student_python <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_python && $student_python <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_python . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_python . '%">
                                        <span>' . $student_python . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            //////////////////////////////////////////////////////

                            //ruby/////////////////////////////////////////////////////////////////////////
                            if ($student_ruby != 0) {
                                echo '
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Ruby</h3>
                                    <div class="progress">
                            ';
                                $clr_val = 0;
                                if (0 < $student_ruby && $student_ruby <= 25) {
                                    $clr_val = 2;
                                } else if (25 < $student_ruby && $student_ruby <= 50) {
                                    $clr_val = 3;
                                } else if (50 < $student_ruby && $student_ruby <= 75) {
                                    $clr_val = 5;
                                } else if (75 < $student_ruby && $student_ruby <= 100) {
                                    $clr_val = 1;
                                }
                                if ($clr_val != 0) {
                                    echo '
                                        <div class="progress-bar color-' . $clr_val . '" role="progressbar" aria-valuenow="' . $student_ruby . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $student_ruby . '%">
                                        <span>' . $student_ruby . '%</span>
                                        </div>
                            ';
                                    $lan_count++;
                                }
                                echo '
                                    </div>
                                </div>
                            </div>
                            ';
                            }
                            if ($lan_count == 0) {
                                echo '
                                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <img src="../images/lang.jpg" alt="" style="width: 100px;height:100px;">
                                </div>
                                ';
                            }
                            //////////////////////////////////////////////////////
                            ?>

                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft"
                                style="margin-top: 50px;">
                                <p class="proudetail" style="color: gray;font-size:15px;">IDEs</p>
                                <hr>
                            </div>

                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <?php
                                $ide_count = 0;
                                if ($student_visual_studio != 0) {
                                    echo '<label class="prodetailtag clride">Visual studio</label>';
                                    $ide_count++;
                                }

                                if ($student_eclipse != 0) {
                                    echo '<label class="prodetailtag clride">Eclipse</label>';
                                    $ide_count++;
                                }

                                if ($student_netbeans != 0) {
                                    echo '<label class="prodetailtag clride">Netbeans</label>';
                                    $ide_count++;
                                }

                                if ($student_atom != 0) {
                                    echo '<label class="prodetailtag clride">Atom</label>';
                                    $ide_count++;
                                }

                                if ($student_vs_code != 0) {
                                    echo '<label class="prodetailtag clride">Vs code</label>';
                                    $ide_count++;
                                }

                                if ($student_qt_creator != 0) {
                                    echo '<label class="prodetailtag clride">Qt creator</label>';
                                    $ide_count++;
                                }

                                if ($student_pycharm != 0) {
                                    echo '<label class="prodetailtag clride">Pycharm</label>';
                                    $ide_count++;
                                }

                                if ($student_intelliJ_idea != 0) {
                                    echo '<label class="prodetailtag clride">IntelliJ IDEA</label>';
                                    $ide_count++;
                                }

                                if ($student_code_blocks != 0) {
                                    echo '<label class="prodetailtag clride">Code::Blocks</label>';
                                    $ide_count++;
                                }

                                if ($student_rubymine != 0) {
                                    echo '<label class="prodetailtag clride">RubyMine</label>';
                                    $ide_count++;
                                }
                                if ($ide_count == 0) {
                                    echo '<img src="../images/ide.jpg" alt="" style="width: auto;height:100px;">';
                                }
                                ?>
                            </div>


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