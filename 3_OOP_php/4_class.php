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

?>