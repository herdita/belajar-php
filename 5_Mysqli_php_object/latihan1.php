<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="search" id="">
        <input type="submit" name="submit" value="Search">
    </form>

<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'sekolah';

    $mysqli = new mysqli($host,$user,$pass,$db);

    if($mysqli->connect_errno){
        die("connection database error ".$mysqli->connect_error);
    }


    if(isset($_POST['submit'])){
        $search = $_POST['search'];
        $murid = $mysqli->prepare("SELECT id,nama,umur,alamat FROM murid WHERE nama LIKE '$search%' ");
        // $murid->bind_param('s',$search);
        $murid->execute();
        
       $murid->bind_result($id,$nama,$umur,$alamat);
        

       if($murid->fetch() != NULL) {
        while($murid->fetch()){
            echo $id." - ".$nama." - ".$umur." - ".$alamat."<br>";
        }
       }else{
           echo "Tidak Ditemukan";
       }
        

    }


    $mysqli->close();
?>    

</body>
</html>


