<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'sekolah';

$mysqli = new mysqli($host,$user,$pass,$db);

if($mysqli->connect_errno){
    echo "database error ".$mysqli->connect_error;
}

$query = "UPDATE murid SET nama='super_sayan' , alamat='sogar' WHERE nama='herdita'";

if($mysqli->query($query)===true){
    echo "data berhasi diedit";
}else{
    echo "gagal diedit";
}

$mysqli->close();

?>