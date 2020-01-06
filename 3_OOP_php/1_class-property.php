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

        class manusia{
            public $nama = "herdita permana";
            public $alamat = "majalaya";
        }

        $manusia1 = new manusia;
        var_dump($manusia1);
        echo "perkenalkan nama saya ".$manusia1->nama." Alamat saya : ".$manusia1->alamat;

    ?>
</body>
</html>