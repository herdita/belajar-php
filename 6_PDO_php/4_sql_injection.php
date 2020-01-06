<?php

$server = 'localhost';
$user   = 'root';
$pass   = '';
$db_name = 'menu_login';

try{
    $conn = new PDO("mysql:host=$server;dbname=$db_name",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "berhasil<br>";
}catch(PDOException $e){
    echo $e->getMessage();
}
    
//sql injection
// $name = "herdita";
// $query = "select * from login where username='$name'";
// $cek = $conn->query($query)->fetch(PDO::FETCH_ASSOC);
// var_dump($cek);

// prepare statement
// $name = "apapun' OR '1'='1";
// $name = "herdita";
// $query = $conn->prepare("select * from login where username= :name");
// $query->execute(array(':name'=> $name));

//contoh query ?
$name = "herdita";
$pass = "123";
$query = $conn->prepare("select * from login where username= ? and password= ? ");
$query->execute(array($name,$pass));


var_dump($query->fetch(PDO::FETCH_ASSOC));

?>