<?php

    //host,user,password,database

    $link = mysqli_connect('localhost','root','','sekolah');

    if(!$link){
        die("Connect database Error ".mysqli_connect_error());
    }else{
        echo "Connect database success <br>";
    }

    $query = "SELECT * FROM murid";
    $hasil = mysqli_query($link,$query);

    if( mysqli_num_rows($hasil) > 0){
        while($data = mysqli_fetch_assoc($hasil)){
            echo "Id     : ".$data['id']."<br>";            
            echo "Nama   : ".$data['nama']."<br>";
            echo "Umur   : ".$data['umur']."<br>";
            echo "Alamat : ".$data['alamat']."<br>";                        
        }
    };

    mysqli_close($link);

?>