<?php

    class orang{
      
        public $nama = "herdita";
        public static $alamat = "Bandung";

        public static function bernama($nama){
            return $nama;
            //tidak bisa this atau memanggil dirinya sendiri
        }
    };


    //static dengan static kita gak perlu buat object dulu
    echo orang::$alamat;

    echo orang::bernama("herdit");

?>