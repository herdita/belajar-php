<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'sekolah';

    $mysqli = new mysqli($host,$user,$pass,$db);

    if($mysqli->connect_errno){
        echo "database error ".$mysqli->connect_error;
    }

    $nama_param = "herdi";
    $murid = $mysqli->prepare("SELECT nama, umur, alamat FROM murid WHERE nama=?");
    $murid->bind_param('s',$nama_param);
    $murid->execute();

    $murid->bind_result($nama,$umur,$alamat);

    while($murid->fetch()){
        echo $nama." - ".$umur." - ".$alamat."<br>";
    }

?>