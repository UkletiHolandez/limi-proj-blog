<?php

    require_once('core/start.php');  
    //session_start();
    //$db = Database::connect();

    if (Input::exists('post')) {
        // validate data
        // if validate -> login -> redirect
        Session::set('success', 'You are logged in');
        Redirect::to('index.php');
    }

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

    <section class="container-login-signup">
        <div class="login-wrapper">
            <div class="login-box">
                <div class="login-form">
                    <h2>Account Login</h2>
                    <div class="login-msg">
                        <?php include('public/templates/messages.php');?>
                    </div>
                    <form method="POST" action="">
                        <input type="text" placeholder="Email" name=email>
                        <input type="password" placeholder="Password" name="password">
                        <div class="login-options">
                            <div class="option-remember options-box">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                            <div class="option-forgot options-box">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <button class="login-btn">Login</button>
                    </form>
                    <div class="new-member">
                        <p>Are you new? <span><a href="signup.php">Sign Up</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>    
    <script src="public/js/main.js"></script>

</body>