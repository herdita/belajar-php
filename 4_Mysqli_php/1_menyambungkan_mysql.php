<?php

    // menyambungkan mysql
    // ada 4 paramerter yang hrus dimasukan dan ini sipatnya dapat berubah rubah tergantung servernya
    // host,user,password,databases

    $link = mysqli_connect('localhost','root','','sekolah');
    if(!$link){
        die('Ada error '.mysqli_connect_error());
    }else{
        echo 'database connect';
    }

    mysqli_close($link);
?>