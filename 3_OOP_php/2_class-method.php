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

            public $nama = "herdita";
            public $alamat = "Majalaya";

            public function berNama(){
                return $this->nama;
            }

            public function berAlamat(){
                echo "beralamat di ".$this->alamat;
            }

        }

        $manusia1 = new manusia;
        echo "Nama saya : ".$manusia1->berNama()."<br>";
        $manusia1->berAlamat();


    ?>
</body>
</html>