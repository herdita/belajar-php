<?php

    //host,user,password,database

    $link = mysqli_connect('localhost','root','','sekolah');

    if(!$link){
        die("Connect database Error ".mysqli_connect_error());
    }else{
        echo "Connect database success <br>";
    }

    // filter LIMIT, ORDER BY ASC DESC, WHERE 

    $query = "SELECT * FROM murid WHERE id=2";
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