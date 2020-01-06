<?php

    $db = mysqli_connect('localhost','root','','sekolah');

    if(!$db){
        die("database error ".mysqli_connect_error());
    }

    #query
    $query = "DELETE FROM murid WHERE id IN(11,13)";

    if(mysqli_query($db,$query)){
        echo "berhasil";
    }

    mysqli_close($db);

?>