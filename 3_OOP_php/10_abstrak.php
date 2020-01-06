<?php

    abstract class anggota{
        abstract protected function set_nama();

        public function print(){
            print $this->set_nama();
        }
    }

    class namaAnggota extends anggota{
        
        protected function set_nama(){
            return "herdita";
        }
    }


    $anggotaAll = new namaAnggota;

    echo $anggotaAll->set_nama();


?>