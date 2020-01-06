<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'sekolah';

$mysqli = new mysqli($host,$user,$pass,$db);

if($mysqli->connect_errno){
    echo "connection database error ".$mysqli->connect_error;
}

$query = "INSERT INTO murid (nama,umur,alamat) VALUE ('Herdi',20,'bandung');";
$query .= "INSERT INTO murid (nama,umur,alamat) VALUE ('ditaia',10,'selatan')";


if($mysqli->multi_query($query) == true){
    echo "berhasil";
}else{
    echo "query database gagal ".$mysqli->connect_error;
}


?>