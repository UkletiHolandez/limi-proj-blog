<?php

    require_once('core/start.php');  
    //session_start();
    //$db = Database::connect();

    if (Input::exists('post')) {
        // validate data
        // if validate -> registration -> redirect
        Session::set('success', 'You have been registered. You can now login.');
        Redirect::to('login.php');
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
        <div class="signup-wrapper">
            <div class="signup-box">
                <div class="signup-form">
                    <h2>Sign Up</h2>
                    <form method="POST" action="">
                        <input type="text" placeholder="First Name" name="first-name">
                        <input type="text" placeholder="Last Name" name="last-name">
                        <input type="text" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" name="password">
                        <input type="password" placeholder="Confirm Password" name="confirm-password">
                        <div class="signup-options">
                            <input type="checkbox" id="terms-conds" name="terms-conds">
                            <label for="terms-conds">I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
                        </div>
                        <button class="signup-btn">Sign Up</button>
                    </form>
                    <div class="already-member">
                        <p>Are you already a member? <span><a href="login.php">Log in</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>    
    <script src="public/js/main.js"></script>

</body>