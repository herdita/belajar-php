<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <!-- <form action="" method="get">
        <input type="text" name="nama">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form> -->

    <!-- <form action="" method="post">
        <input type="text" name="nama">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form> -->

    <!-- mengarah ke halaman lain -->
    <form action="5_halaman_get.php" method="get">
        <input type="text" name="nama">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>

    <?php
        //isset {untuk menguji apakah datanya udah di set apa belum}
        
        // if(isset($_GET['submit'])){
        //     echo $_GET['nama'];
        //     echo $_GET['password'];
        // };

        // if(isset($_POST['submit'])){
        //     echo $_POST['nama'];
        //     echo $_POST['password'];
        // };
        
        // if(isset($_GET['submit'])){

        // }
        




    ?>
</body>
</html>