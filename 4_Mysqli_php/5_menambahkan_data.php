<?php

    //database host, user, password, database
    $db = mysqli_connect('localhost','root','','sekolah');

    if(!$db){
        die("connection database error ".mysqli_connect_error());
    }


    $query ="INSERT INTO murid (nama,umur,alamat) VALUE ('it',20,'majalaya');";

    $query .= "INSERT INTO murid (nama,umur,alamat) VALUE ('it',20,'majalaya')";
    
    //mysqli_multi_query untuk memasukan banyak data
    if(mysqli_multi_query($db,$query)){
        echo "berhasil";
    };

    mysqli_close($db);

?>