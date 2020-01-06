<?php
    require_once '8_flush_and_opensources.php';

    $test = Database::getInstance();

    $test->setTable('jabatan');
    // print_r($test);

    // $test->create([
    //     'id_jabatan' => '1111123213',
    //     'nama_jabatan' => 'nama-baru',
    // ]);
    
    // $view = $test->select()->all();
    // print_r($view);

    // $test->where('id_jabatan','=','1123')->update([
    //     'nama_jabatan' => 'semut',
    // ]);

    // $test->where('id_jabatan','=','100')->delete();

    $test->where('id_jabatan','=','1123')->where('id_jabatan','=','03')->orWhere('id_jabatan','=','01')->all();
    var_dump($test);
?>