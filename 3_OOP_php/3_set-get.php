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
            public $kelamin;

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

            public function set_kelamin($kelamin){
                $this->kelamin = $kelamin;
            }

            public function get_kelamin(){
                return $this->kelamin;
            }
        }

        $anggota = [];
        for($i=1;$i<=3;$i++){
            $anggota[$i] = new anggota;
        }        

        $anggota[1]->set_nama('Herdita Permana');
        $anggota[1]->set_alamat('Majalaya');
        $anggota[1]->set_kelamin('Laki-laki');
        
        $anggota[2]->set_nama('Herdita Permana');
        $anggota[2]->set_alamat('Majalaya');
        $anggota[2]->set_kelamin('Laki-laki');

        $anggota[3]->set_nama('Herdita Permana');
        $anggota[3]->set_alamat('Majalaya');
        $anggota[3]->set_kelamin('Laki-laki');

        for($i=1;$i<=count($anggota);$i++){
            echo "Nama : ".$anggota[$i]->get_nama()."<br>";
            echo "Alamat : ".$anggota[$i]->get_alamat()."<br>";
            echo "kelamin : ".$anggota[$i]->get_kelamin()."<br>";
        }
       

    ?>
</body>
</html>