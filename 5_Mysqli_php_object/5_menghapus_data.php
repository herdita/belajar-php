<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'sekolah';

$mysqli = new mysqli($host,$user,$pass,$db);

if($mysqli->connect_errno){
    echo "database error ".$mysqli->connect_error;
}

$query = "DELETE FROM murid WHERE nama='herdi' ";

if($mysqli->query($query)===true){
    echo "data berhasi dihapus";
}else{
    echo "gagal dihapus";
}

$mysqli->close();

?>