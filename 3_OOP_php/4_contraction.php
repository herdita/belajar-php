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
        require_once '4_class.php';

        $anggota1 = new anggota("Herdita","indonesia");
        $anggota2 = new anggota("permana","afrika");
   
        
        echo "Nama   : ".$anggota1->get_nama()."<br>";
        echo "Alamat : ".$anggota1->get_alamat()."<br>";

        echo "Nama   : ".$anggota2->get_nama()."<br>";
        echo "Alamat : ".$anggota2->get_alamat()."<br>";
    ?>
</body>
</html>