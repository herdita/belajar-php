<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'sekolah';

$mysqli = new mysqli($host,$user,$pass,$db);

if($mysqli->connect_errno){
    echo "database tidak connect ".$mysqli->connect_error;
}



$mysqli->close();

?>