<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'sekolah';
    
    $mysqli = new mysqli($host,$user,$pass,$db);
    
    if($mysqli->connect_errno){
        echo "database tidak connect ".$mysqli->connect_error;
    }

    $sql_input = "INSERT INTO murid (nama,umur,alamat) VALUE ('herdita',30,'majalaya')";

    if($mysqli->query($sql_input)==true){
        echo "berhasil";
    }else{
        echo "gagal ".$mysqli->error;
    }

    $mysqli->close();
?>