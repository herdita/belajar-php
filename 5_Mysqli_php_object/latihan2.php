<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Input data</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td><input type="text" name="nama" id="" placeholder="Nama"></td>
            </tr>  
            <tr>
                <td><input type="number" name="umur" id="" placeholder="Umur"></td>
            </tr>
            <tr>
                <td><textarea name="alamat" id="" cols="30" rows="3" placeholder="Alamat"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <?php

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db   = 'sekolah';

        $mysqli = new mysqli($host,$user,$pass,$db);

        if($mysqli->connect_errno){
            echo "database error ".$mysqli->connect_error;
        }

        if(isset($_POST['submit'])){
            $nama   = $_POST['nama'];
            $umur   = $_POST['umur'];
            $alamat = $_POST['alamat'];
            
            $query = "INSERT INTO murid (nama,umur,alamat) VALUES ('$nama',$umur,'$alamat')";
            
            if($mysqli->query($query)==true){
                echo "input data success";
            }else{
                echo "input data failed";
            }
        }

    ?>
</body>
</html>