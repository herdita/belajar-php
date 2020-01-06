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
    

// >> 1, menampilkan datanya
$result = $conn->query("select * from login");

// menampilkan data
// die(print_r($result->fetch()));

//opsi 2 dengan array number
// die(print_r($result->fetch(PDO::FETCH_NUM)));

//opsi 3 dengan array nama/assositive array
// die(print_r($result->fetch(PDO::FETCH_ASSOC)));

//opsi 4 dengan array nama/assositive array
// die(print_r($result->fetch(PDO::FETCH_OBJ)));

// while($row = $result->fetch()){
//     echo $row['username'].' '.$row['password'] .'<br>';
// }

// FETCH OBJ
while($row = $result->fetch(PDO::FETCH_OBJ)){
    echo $row->username.' '.$row->password .'<br>';
}

// menghitung jumlah data (perbarisnya)
echo 'total = '.$result->rowCount();

?>