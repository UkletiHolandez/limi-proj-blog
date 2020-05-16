<?php

    require_once('core/start.php');  
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <!--<link rel="apple-touch-icon" href="icon.png"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body>
 
    <header class="header-wrapper">
        <div class="container">
            <div class="header">
                <h2 class="logo">
                    <a href="index.php"><img src="public/images/logo.png" alt="logo"></a>
                </h2>
                <nav class="nav-bar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>

    <!-- Banner -->
    <section class="main-banner mb-5">
        <div class="container">
            <div>
                <h1>Limi School Blogger</h1>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software our customers can focus on their core business.</p>
            </div>

        </div>
    </section>

    <!-- Grid boxes -->
    <section>
        <div class="box-wrapper container">
            <div class="box">
                <h2>Focus on Systems</h2>
                <p>While our prices are competitive, it's the value that's unmatched.</p>
                <div><a href="#">Read More</a></div>
            </div>
            <div class="box">
                <h2>Plan of Action</h2>
                <p>While our prices are competitive, it's the value that's unmatched.</p>
                <div><a href="#">Read More</a></div>
            </div>
            <div class="box">
                <h2>Quality Compliance</h2>
                <p>While our prices are competitive, it's the value that's unmatched.</p>
                <div><a href="#">Read More</a></div>
            </div>
        </div>
    </section>

    <section>
        <div class="box-wrapper container">
            <div>
                <h2>Upcoming events</h2>
            </div>
            <div class="box">
                <img src="" alt="">
                <p>Rihanna, Eminem on stage</p>
                <p>Integrating technology and software solutions.</p>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
                
            </div>
            <div class="box">
                <img src="" alt="">
                <p>Dr. Dre on stage live</p>
                <p>Integrating technology and software solutions.</p>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
            </div>
            <div class="box">
                <img src="" alt="">
                <p>Macaroons live Party</p>
                <p>Integrating technology and software solutions.</p>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="box-wrapper container">
            <div>
                <h2>Latest Blogs</h2>
            </div>
            <div class="box">
                <img src="" alt="">
                <p>Communicating with you every step of the way</p>
                <p>July 02, 2014 | Tag: Technology | By: David John</p>
                <p>We combine continuing education and constant monitoring us with your project details if you are interested to ge of industry trends and innovations to provide the right IT solution at the right time. Contact us with your project details if you are interested to get our Web Solution or Software Development Services.</p>
                
            </div>
            <div class="box">
                <img src="" alt="">
                <p>Communicating with you every step of the way</p>
                <p>July 02, 2014 | Tag: Technology | By: David John</p>
                <p>We combine continuing education and constant monitoring us with your project details if you are interested to ge of industry trends and innovations to provide the right IT solution at the right time. Contact us with your project details if you are interested to get our Web Solution or Software Development Services.</p>
            </div>
        </div>
    </section>

    





    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="public/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <!-- <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script> -->
</body>
</html>
