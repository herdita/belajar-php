<?php

    class Database{
        private $server = 'localhost',
                $user   = 'root',
                $pass   = '',
                $dbName = 'pencatatan_fotocopy';

        private static $_instance = null;

        private $_conn,$_table,$_columns='*',$_query,$_statement,$_attr,$_params=[], $_prevData = [];

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
            $this->_columns = $columns;
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
            // var_dump($this->_params);
            // die($this->_query.' '.$this->_attr);

            try{
                $this->_statement = $this->_conn->prepare($this->_query.' '.$this->_attr);
                $this->_statement->execute($this->_params);
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

        //metode where
        /*
            tujuaan untuk where
            //select * from users where id=2;
            //select * from users where username=herdita AND password=123;
            //select * from users where username=herdita OR password=123;
        */

        public function where($col,$sign,$value,$bridge = ' AND '){
            $this->_query       = "SELECT $this->_columns FROM $this->_table WHERE";
            $this->_prevData[]  = array(
                                    'col'   => $col,
                                    'sign'  => $sign,
                                    'value' => $value,
                                );
           
            $this->getWhere($bridge);
            return $this;

            // query->prepare select * from users where id=?
            // statement->execute(parameter);
        } 
        
        public function orWhere($col,$sign,$value){
            $this->where($col,$sign,$value,$bridge =' OR ');
            return $this;
        }

        public function getWhere($bridge){ 
            if(count($this->_prevData) > 1){
                $this->_attr = '';
                $this->_params = [];
            }

            $x = 1;
            foreach($this->_prevData as $prev){
                $this->_attr.= $prev['col'].''.$prev['sign'].' ?';
                $this->_params[] = $prev['value']; 
                if($x < count($this->_prevData)){
                    $this->_attr .= $bridge;
                }

                $x++;
            }

            return $this;

        }

    }


?>