<?php

    require_once '1_abstark_setup_singleton.php';

    $test = Database::getInstance();
    $test1 = Database::getInstance();
    

    // var_dump($test);
    print_r($test);

?>