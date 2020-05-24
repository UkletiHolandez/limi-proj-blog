<?php

    session_start();

    // autoloader
    spl_autoload_register(function($class) {        
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '//classes//' . $class . '.php')) {
            require_once($_SERVER['DOCUMENT_ROOT'] . '//classes//' . $class . '.php');
        } else {
            throw new Exception("Unable to load {$class}");
        }
        
    });

    

?>