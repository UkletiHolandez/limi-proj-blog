<?php

    session_start();

    // autoloader
    spl_autoload_register(function($class) {        
        if (file_exists('classes/' . $class . '.php')) {
            require_once('classes/' . $class . '.php');
        } else {
            throw new Exception("Unable to load {$class}");
        }
        
    });

    

?>