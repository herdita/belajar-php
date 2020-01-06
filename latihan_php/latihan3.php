<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> form pendaftaran </h2>
    <form action="" method="post">
        <input type="text" name="name">
        <input type="date" name="date">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="passwordUlang">
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            if($_POST['password']!=$_POST['passwordUlang']){
                echo "Input password salah";
            }else{
                
            }
        }
    ?>
</body>
</html>