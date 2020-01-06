<?php
    require_once '6_update_data.php';

    $test = Database::getInstance();

    $test->setTable('jabatan');

    // $tampil = $test->select()->all();
    // print_r($test);

    // $test->where('id_jabatan','=','1')->orWhere('id_jabatan','=','1')->update([
    //     'id_jabatan' => '101010101',
    //     'nama_jabatan' => 'belajar',
    // ]);
 
    $test->where('id_jabatan','=','01')->update([
        'nama_jabatan' => 'belajar',
    ]);
?>