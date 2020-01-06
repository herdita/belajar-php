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

        //session_destroy() bisa pakai ini jika ingin session terhapus semua
        if(isset($_SESSION['user_name'])){
            session_unset($_SESSION['user_name']);
            echo "semalamat tinggal";  
        };
        echo "<a href=index.php > Silahkan login lagi </a>";
        
    ?>
</body>
</html>