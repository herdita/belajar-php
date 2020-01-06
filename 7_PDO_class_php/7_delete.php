<?php
    require_once '7_delete_data.php';

    $test = Database::getInstance();

    $test->setTable('jabatan');

    // $tampil = $test->select()->all();
    // print_r($test);

    // $test->where('id_jabatan','=','1')->orWhere('id_jabatan','=','1')->update([
    //     'id_jabatan' => '101010101',
    //     'nama_jabatan' => 'belajar',
    // ]);
 
    // $test->where('id_jabatan','=','02')->delete();
    // $test->where('id_jabatan','=','66')->orWhere('id_jabatan','=','98')->delete();

    // $test->where('id_jabatan','=','02')->delete();

    // $users = $test->select()->orderBy('id_jabatan','DESC')->all();
    // print_r($users);

    $users = $test->select()->orderBy('id_jabatan','DESC')->take(5)->all();
    print_r($users);
?>