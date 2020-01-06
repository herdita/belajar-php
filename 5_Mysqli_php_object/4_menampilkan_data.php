<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'sekolah';

$mysqli = new mysqli($host,$user,$pass,$db);

if($mysqli->connect_errno){
    echo "connection database error ".$mysqli->connect_error;
}

$query = "SELECT * FROM murid";
$result = $mysqli->query($query);

// if($result->num_rows > 0){
//     while($row = $result->fetch_assoc()){
//         echo $row['nama'].' '.$row['umur'].' '.$row['alamat']."<br>";
//     }
// }

//object
if($result->num_rows > 0){
    while($row = $result->fetch_object()){
        echo $row->nama.' '.$row->umur.' '.$row->alamat."<br>";
    }
}else{
    echo "hasilnya Nihil";
}

$mysqli->close();
?>