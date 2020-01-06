<?php

    class Database{
        private $server = 'localhost',
                $user   = 'root',
                $pass   = '',
                $dbName = 'pencatatan_fotocopy';

        private static $_instance = null;

        private $_conn,$_table,$_columns='*',$_query,$_statement;

        //__construct
        public function __construct()
        {
            try{
                $this->_conn = new PDO("mysql:host=$this->server;dbname=$this->dbName", $this->user, $this->pass);
                $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "berhasil";
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

        //mencegah duplicate
        public function __clone(){
            return false;
        }

        //set table to used
        public function setTable($table){
            $this->_table = $table;
            // die($this->_table);
            return $this;
        }

        public function select($columns = '*'){
            $this->_query = "SELECT $columns FROM $this->_table";
            // die($this->_query);
            $this->columns = $columns;
            return $this; 
        }

        public function all(){
            $this->run();
            return $this->_statement->fetchAll(PDO::FETCH_OBJ);
        }

        public function first(){
            $this->run();
            return $this->_statement->fetch(PDO::FETCH_OBJ);
        }

        public function run(){
            try{
                $this->_statement = $this->_conn->prepare($this->_query);
                $this->_statement->execute();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        //intinya yang dibuat tadi untuk menampilkan
        /*
            $this->_query
            $this->_columns
            $this->_statement

            SELECT $column FROM $table
            $_statement = conn->prepare($query);
            statement->execute();
        */


    }


?>