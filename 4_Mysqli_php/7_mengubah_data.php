<?php

    $db = mysqli_connect('localhost','root','','sekolah');

    if(!$db){
        die("database error ".mysqli_connect_error());
    }

    #query
    $query = "UPDATE murid SET nama='Selia', umur=20 WHERE id=12";

    if(mysqli_query($db,$query)){
        echo "berhasil";
    }else{
        echo "gagal";
    }

    mysqli_close($db);

?>