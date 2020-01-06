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
        session_start();
        $user = "herdita";
        $password = "21051997";

        if(isset($_SESSION['user_name'])){
            header('Location:profil.php');
        }else{
            if(isset($_POST['submit'])){
                if($_POST['user']==$user && $_POST['password']==$password){
                    $_SESSION['user_name'] = $_POST['user'];
                    header('Location:profil.php');
                }else{
                    echo "login salah";
                }
            }
        }

    ?>
</body>
</html>