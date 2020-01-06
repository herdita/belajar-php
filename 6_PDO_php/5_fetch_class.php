<?php

    $server = 'localhost';
    $user   = 'root';
    $pass   = '';
    $db_name = 'menu_login';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$db_name",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "berhasil<br>";
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    //class
    class login{
        public $username,$password,$biodata;

        public function __construct(){
            $this->biodata = $this->username.' passwordnya adalah '.$this->password;
        }

        public function getLink(){
            return $this->link = '<a href="user/'.$this->username.'">'.$this->username.'</a>';
        }
    }

    //fetch class
    $query = $conn->query("select * from login");
    $query->setFetchMode(PDO::FETCH_CLASS,'login');
    // var_dump($query->fetch());
    // var_dump($query->setFetchMode(PDO::FETCH_CLASS,'login'));

    while($row = $query->fetch()){
        // echo $row->username.'<br>';
        // var_dump($row->biodata);
        echo $row->getLink()."<br>";
    }

?>