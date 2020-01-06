<?php

    // host, user, password, database

    $link = mysqli_connect('localhost','root','','sekolah');

    if(!$link){
        die('database error '.mysqli_connect_error());
    }

    //membuat database dengan query mysql

    $query = "DROF DATABASE sekolah_koding";

    if(mysqli_query($link,$query)){
        echo "create database success";
    }else{
        echo "create database error";
    };

    mysqli_close($link);
?>