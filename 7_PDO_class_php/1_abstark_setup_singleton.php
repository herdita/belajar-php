<?php

    class Database{

        //add database credentials

        private $server = 'localhost',
                $user   = 'root',
                $pass   = '',
                $dbName = 'pencatatan_fotocopy';

        private static $_instance = null;

        private $_conn;

        //--construct
        public function __construct()
        {
            try{
                $this->_conn = new PDO("mysql:host=$this->server;dbname=$this->dbName", $this->user, $this->pass);
                $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "berhasil";
            }catch(PDOException $e){
                die($e->getMessage());
            }      
        }

        //get database, singleton pattern
        public static function getInstance(){
            if(!isset(self::$_instance)){
                self::$_instance = new Database();
            }
            return self::$_instance;
        }

        public function __clone(){
            return false;
        }
    }


?>