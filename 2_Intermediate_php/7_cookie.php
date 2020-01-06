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
        <input type="text" name="user" id="">
        <input type="password" name="password" id="">
        <input type="submit" name="submit">
    </form>

    <?php
        $user = 'herdita';
        $password = '21051997';

        if(isset($_POST['submit'])){
            if($_POST['user']==$user && $_POST['password']==$password){
                // echo "login berhasil";
                setcookie('name_user',$_POST['user'],time()+120);
                header('Location:5_halaman_get.php');
            }else{
                echo "login gagal";
            };
        };
    ?>
</body>
</html>