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

        class anggota{

            public $nama;  // protected hanya bisa dipakai didalam kelas dan turunannya
            public $alamat;

            public function __construct($nama,$alamat){
                $this->nama = $nama;
                $this->alamat = $alamat;
            }

            public function set_nama($nama){
                $this->nama = $nama;
                return $this;
            }

            public function get_nama(){
                return $this->nama;
            }

            public function set_alamat($alamat){
                $this->alamat = $alamat;
            }

            public function get_alamat(){
                return $this->alamat;
            }

        };

    $anggota = new anggota('Herdi','majalaya');

    echo $anggota->set_nama("dita")->get_alamat();

        
    ?>
</body>
</html>