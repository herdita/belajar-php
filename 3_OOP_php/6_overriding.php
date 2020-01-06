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

            public $nama;
            public $alamat;

            public function __construct($nama,$alamat){
                $this->nama = $nama;
                $this->alamat = $alamat;
            }

            public function set_nama($nama){
                $this->nama = $nama;
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

        }

        class subAnggota extends anggota{
            public $skill;
            public $kebiasaan;

            public function set_kemampuan($skill){
                $this->skill = $skill;
            }
            public function get_kemampuan(){
                return $this->skill;
            }

            //overriding
            public function get_alamat(){
                return $this->alamat;
            }
        }
    
        $subAnggota = new subAnggota('dita','francis');
        $subAnggota->set_kemampuan('frondEnd dan Backand');
        
        echo "perkenalkan <br>"; 
        echo "Nama       : ".$subAnggota->get_nama()."<br>";
        echo "Alama      : ".$subAnggota->get_alamat()."<br>";
        echo "Kemampuan  : ".$subAnggota->get_alamat();

        //atau 

        // echo "perkenalkan <br>"; 
        // echo "Nama       : ".$subAnggota->nama."<br>";
        // echo "Alama      : ".$subAnggota->alamat."<br>";
        // echo "Kemampuan  : ".$subAnggota->skill;
    ?>
</body>
</html>