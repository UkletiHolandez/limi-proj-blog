<?php

    require_once('core/start.php');  
    //session_start();

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

    <script src="https://kit.fontawesome.com/ccf2869940.js" crossorigin="anonymous"></script>
        
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body>
    <!-- Header -->
    <?php include('public/templates/header.php'); ?>

    <!-- Banner -->
    <?php include('public/templates/banner.php'); ?>

    <!-- Grid boxes -->
    <section class="container mb-5">
        <div class="box-wrapper">
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

    <!-- Events -->
    <section class="container mb-5">
        <h2 class="title">Upcoming events</h2>
        <div class="box-wrapper events">
            <div class="box">
                <img src="public/images/event/1.jpg" alt="alt-img">
                <h3>Rihanna, Eminem on stage</h3>
                <span>Integrating technology and software solutions.</span>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
                
            </div>
            <div class="box">
                <img src="public/images/event/2.jpg" alt="alt-img">
                <h3>Dr. Dre on stage live</h3>
                <span>Integrating technology and software solutions.</span>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
            </div>
            <div class="box">
                <img src="public/images/event/3.jpg" alt="alt-img">
                <h3>Macaroons live Party</h3>
                <span>Integrating technology and software solutions.</span>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
            </div>
        </div>
    </section>

    <!-- Latest Blogs -->
    <section class="container mb-5">
        <h2 class="title">Latest Blogs</h2>
        <div class="box-wrapper blog">
            <div class="box">
                <img src="public/images/blog/1.jpg" alt="">
                <h3>Communicating with you every step of the way</h3>
                <span>July 02, 2014 | Tag: Technology | By: David John</span>
                <p>We combine continuing education and constant monitoring us with your project details if you are interested to ge of industry trends and innovations to provide the right IT solution at the right time. Contact us with your project details if you are interested to get our Web Solution or Software Development Services.</p>
            </div>
            <div class="box">
                <img src="public/images/blog/2.jpg" alt="">
                <h3>Communicating with you every step of the way</h3>
                <span>July 02, 2014 | Tag: Technology | By: David John</span>
                <p>We combine continuing education and constant monitoring us with your project details if you are interested to ge of industry trends and innovations to provide the right IT solution at the right time. Contact us with your project details if you are interested to get our Web Solution or Software Development Services.</p>
            </div>
        </div>

        <div class="blog-btn">
            <a href="">see more</a>
        </div>
    </section>

    <!-- Subscribe -->
    <section class="subscribe mb-5">
        <div class="container">
            <div class="subscribe-form">
                <h3 class="subscribe-title">Subscribe Here for Updates</h3>
                <form class="form-inline" action="" method="POST">
                    <label for="form-email"></label>
                    <input type="text" class="form-email" id="form-email" name="email" placeholder="Email...">
                    <input class="btn-subscribe" type="submit" name="subscribe" value="Subscribe">
                </form>
            </div>
        </div>
    </section>

    <!-- Executive -->
    <section class="container mb-5">
        <h2 class="title">Executing Team</h2>
        <div class="box-wrapper executive">
            <div class="box">
                <img src="public/images/team/1.jpg" alt="alt-img">
                <h3>Adam Miser</h3>
                <span>CEO</span>
                <a href="mailto:executive.member@blogger.com">executive.member@blogger.com</a> 
            </div>
            <div class="box">
                <img src="public/images/team/2.jpg" alt="alt-img">
                <h3>Adam Miser</h3>
                <span>CEO</span>
                <a href="mailto:executive.member@blogger.com">executive.member@blogger.com</a> 
            </div>
            <div class="box">
                <img src="public/images/team/1.jpg" alt="alt-img">
                <h3>Adam Miser</h3>
                <span>CEO</span>
                <a href="mailto:executive.member@blogger.com">executive.member@blogger.com</a> 
            </div>
            <div class="box">
                <img src="public/images/team/2.jpg" alt="alt-img">
                <h3>Adam Miser</h3>
                <span>CEO</span>
                <a href="mailto:executive.member@blogger.com">executive.member@blogger.com</a> 
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('public/templates/footer.php'); ?>
 
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
