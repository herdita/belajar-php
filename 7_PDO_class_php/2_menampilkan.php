<?php
    require_once '2_memilih_menampilkan_data.php';

    $test = Database::getInstance();
    $test->setTable('pegawai');
    $test->select();
    // $user = $test->select()->first();
    $userAll = $test->select()->all();
    $userFirst = $test->select()->first();

    // echo $userFirst->username;

    // print_r($user);

    //untuk menampilkan semua data kita bisa menggunakan
    
   
        echo $userFirst->username . '<br>';


?>