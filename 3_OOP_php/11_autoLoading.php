<?php

    // memanggil diluar class
    spl_autoload_register(function ($class_name){
        // include atau require
        include $class_name .'.php';
    });

?>