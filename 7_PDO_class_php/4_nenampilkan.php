<?php

    require_once '4_multi_where.php';

    $test = Database::getInstance();
    $test1 = Database::getInstance();
    

    // var_dump($test);
    print_r($test);

    $test->setTable('pegawai');
    
    $tampil = $test->select('id_pegawai')->first();
    print_r($tampil);

    $users = $test->select()->where('nama_p','=','herdita')->where('username','=','permanad')->all();

    foreach($users as $data){
        echo 'id_pegawai   = '.$data->id_pegawai.' ';
        echo 'nama_pegawai = '.$data->nama_p;   
    };

    $user1 = $test->select()->where('nama_p','=','herdita')->orWhere('username','=','admin')->all();
    print_r($user1);

    foreach($user1 as $data){
        // echo $data->id_pegawai.'<br>';
        // echo $data->nama_p.'<br>';
        // echo $data->no_telp.'<br>';
        print_r($user1);
    }

    // foreach ($users as $user){
    //     echo $user->username.'<br>';
    // }

?>