<?php
    require_once '3_metode_where.php';

    $test = Database::getInstance();
    $test->setTable('pegawai');
    // $test->select();
    // $user = $test->select()->first();
    // $userAll = $test->select()->all();
    // $userFirst = $test->select()->first();

    // echo $userFirst->username;

    // print_r($test);
    
    // $value = $test->select()->all();
    // echo $value->id_pegawai;

    //untuk menampilkan semua data kita bisa menggunakan
    
    // foreach($userAll as $user){
    //     echo $user->username . '<br>';
    // }

    //metode where
    // $userFirst = $test->select()->where('username','=','aji')->first();
    // print_r($userFirst)
    
    $users = $test->select()->where('nama_p','like','%a%')->first();
    echo $users->nama_p;
    // foreach($users as $user){
    //     echo $user->id_pegawai.'<br>';
    // }


    // foreach($users as $user){
    //     echo $user->username.' '.$user->pass.'<br>';
    // }
?>