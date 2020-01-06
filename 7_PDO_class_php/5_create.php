<?php
    require_once '5_create_data.php';

    $test = Database::getInstance();

    $test->setTable('jabatan');

    // $tampil = $test->select()->all();
    // print_r($test);

    $test->create([
        'id_jabatan' => '10000000',
        'nama_jabatan' => 'mampus',
    ]);

?>