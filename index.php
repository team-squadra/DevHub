<!DOCTYPE html>
<html lang="en">

<head>
    <title>DevHub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/logo/logo.png" />
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--===============================================================================================-->
</head>

<style>
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .bg {
        /* The image used */
        background-image: url("images/bg_1.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .centered {
        align-items: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .progress {
        border-radius: 5px;
        width: 100%;
        height: 4px;
        position: relative;
        background: #03A9F4;
    }

    .progress::before {
        position: absolute;
        content: "";
        width: 0%;
        height: 4px;
        top: 0;
        left: 0;
        background-color: #FFC107;
        animation: wait 1s infinite;
        -webkit-animation: wait 1s infinite;
        -moz-animation: wait 1s infinite;
    }

    @keyframes wait {
        10% {
            width: 10%
        }

        30% {
            width: 30%
        }

        50% {
            width: 50%
        }

        70% {
            width: 70%
        }

        100% {
            width: 100%
        }
    }

    .title {
        font-family: 'Poppins', sans-serif;
        font-size: 30px;
        line-height: 1.2;
        width: 200px;
        padding: 50px;
    }
</style>

<body class="bg">
    <div id="loading_div" style="width: 100%; height: 100%;">
        <div class="centered">
            <div class="title">
                <center>
                    <img src="images/logo/logo.png" style="width: 30px;height :30px;"><br>
                    <label style="color:Gray;">DevHub</label>
                </center>
            </div>
            <div class="progress"></div>
        </div>
    </div>
</body>


</html>