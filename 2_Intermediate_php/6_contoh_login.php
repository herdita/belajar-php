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
        <input type="text" name="nama">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>

    <?php
    $data_user = "herdita";
    $data_pass = "21051997";

    if(isset($_POST['submit'])){
        if($_POST['nama']==$data_user && $_POST['password']==$data_pass){
            // echo "login berhasil";
            // untuk berpindah ke halaman bisa menggunakan header
            header('Location: 5_halaman_get.php?nama='.$_POST['nama']);
        }else{
            echo "login gagal";
        };
    };

    ?>
</body>
</html>