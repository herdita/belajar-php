<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['user_name'])){
            echo "Selamat datang ".$_SESSION['user_name'];
            echo "<a href=logout.php>Logout</a>";
        }else{
            echo "<a href=index.php > Login dulu bro </a>";
        };
    ?>
    <br>
    
</body>
</html>