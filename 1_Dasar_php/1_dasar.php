<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // ++ -- % +=
        // round rand(min,max), max(parameter), min(parameter) 
        // print_r();
        // $array = ['nol','satu','dua']; atau $variable = array{1,2,3}
        /* method array
            array_unique(variable), array_reverse(variable), shuffle, count, sort
        */
        /* array associative
            $array = [ "nama"   => "herdita",
                       "lahir"  => "bandung",
                       "sekolah => "unikom"
                    ];
        */
        /* method associative array
            array_values, {untuk mengembalikan associative key menjadi index} 
            array_keys, {menjadikan key associative menjadi nilai value}
            array_merge {menggabunkan beberapa array}

            print_r(array_keys($array));
            array_merge($array1,$array2);
        */

        /*  array multi dimensi
            $array = [
                    ['pekerjaan'=> 'programmners',
                     'umur'      => '31',
                     'hobi'      => 'males'
                    ],
                    
                     ['pekerjaan'=> 'desainer',
                     'umur'      => '21',
                     'hobi'      => 'rajin'
                    ],
                ];

            atau 

            $array = [
                    ['pekerjaan'=> 'programmners',
                     'umur'      => '31',
                     'hobi'      => 'males'
                    ],
                    
                     ['pekerjaan'=> 'desainer',
                     'umur'      => '21',
                     'hobi'      => 'rajin'
                    ],
                ];
        

            // print_r($array);
            echo $array[0]['pekerjaan'];

        */

        /*  for loop
            for(variableAwal;syarat;perubahan/increment){

            }

            for loop dengan array
            
            $array = [
                [123,231,321],
                [456,564,654,234],
                [789,897,987,'satu','dua']
            ];

            // print_r(count($array[1]));
            
            for($i=0; $i<count($array); $i++){
                for($j=0; $j<count($array[$i]); $j++){
                    echo $array[$i][$j]." ";
                } 
                echo "<br>";
            }
        */

        /* foreach

            $hewan = [1,2,3,4,5,6,7,8,9];
            foreach($hewan as $h){
                echo $h." ";
            }
        */

        /* foreach associative

            $binatang = [
                'nama'    => 'singa',
                'umur'    => 100,
                'makanan' => 'carnivora'
            ];

            foreach($binatang as $key => $value){
                echo $key "<br>";
            }
        */

        /* while do and do while
            $binatang = [
                'nama'    => 'singa',
                'umur'    => 100,
                'makanan' => 'carnivora'
            ];

            $perubahan = array_values($binatang);
            // print_r($perubahan);
        
            $i = 0;
            while($i<count($perubahan)){
                echo "<br>".$perubahan[$i];
                $i++;
            };

            do{
                echo "<br>".$perubahan[$i];
                $i++;
            }while($i<count($perubahan));
        */

        /* condition
            $username = "herdita";
            $password = "21051997";

            if($username == "herdita" && $password =="21051997"){
                echo "success";
            }else{
                echo "not valid";
            }

            else if
        */

        /* switch ($variable) {
            case 'value':
                # code...
                break;
            
            default:
                # code...
                break;
            }
        */

        /* function
            
            function jarak(){
                echo "<br>";
            }

            function identitas($nama,$kelas,$alamat){
                echo "nama  = $nama ";
                jarak();
                echo "kelas = $kelas";
                jarak();
                echo "alamat = $alamat";
            };

            identitas('herdita','if-3','bandung');
        */

        /* scope
            $val1 = 12;
            $val2 = 10;
        
            function data(){
                global $val1, $val2;
                $var1 = $val1 + $val2;
                return $var1;
            }

            echo data();
        */


        // $nim = "10116136";
        // $nama = "Herdita permana";
        // $kelas = "if-3";

        // echo "nim saya $nim dan perkenalkan nama saya $nama saya sekarang di kelas $kelas <br>";

        // $nilai1 = 123;
        // $nilai2 = 456;
        // $gabungan = $nilai1. $nilai2;

        // echo $gabungan;

        // $array = ['herdi','dita','permana'];
        // echo $array[0]." ".$array[1]." ".$array[2]. "itulah nama saya <br>";

        // $variable = ['banteng','kuda','singa','harimau'];
        // shuffle($variable);
        // print_r(array_reverse($variable));

        // $array = [ "nama"   => "herdita permana",
        //            "alamat" => "bandung",
        //            "sekolah"=> "unkom",
        //            123      => "angka"
        //         ];

        // print_r(array_keys($array));

        // array multi dimensi

        // $array = [
        //             ['pekerjaan'=> 'programmners',
        //              'umur'      => '31',
        //              'hobi'      => 'males'
        //             ],
                    
        //              ['pekerjaan'=> 'desainer',
        //              'umur'      => '21',
        //              'hobi'      => 'rajin'
        //             ],
        // ];
        
        // // print_r($array);
        // echo $array[0]['pekerjaan'];
        
        // for($i=0;$i<5;$i++){
        //     echo "herdita permana <br>";
        // };

        // $array = [
        //         [123,231,321],
        //         [456,564,654,234],
        //         [789,897,987,'satu','dua']
        // ];

        // print_r(count($array[1]));
        // for($i=0; $i<count($array); $i++){
        //     for($j=0; $j<count($array[$i]); $j++){
        //         echo $array[$i][$j]." ";
        //     } 
        //     echo "<br>";
        // }

        // $hewan = [1,2,3,4,5,6,7,8,9];

        // foreach($hewan as $h){
        //     echo $h." ";
        // }

        // $binatang = [
        //     'nama'    => 'singa',
        //     'umur'    => 100,
        //     'makanan' => 'carnivora'
        // ];

        // foreach($binatang as $key => $value){
        //     echo $key." ".$value. "<br>";
        // }

        // print_r(array_values($binatang));

        // $perubahan = array_values($binatang);
        // print_r($perubahan);
        
        // $i = 0;
        // while($i<count($perubahan)){
        //     echo "<br>".$perubahan[$i];
        //     $i++;
        // };

        // $username = "herdita";
        // $password = "21051997";

        // if($username == "herdita" && $password =="21051997"){
        //     $hasil = true;
        // }else{
        //     $hasil = false;
        // }

        // if($hasil){
        //     echo "user dan pass berhasil";
        // }else{
        //     echo "user dan pass gagal";
        // }

        // switch ($variable) {
        //     case 'value':
        //         # code...
        //         break;
            
        //     default:
        //         # code...
        //         break;
        // }

        // function jarak(){
        //     echo "<br>";
        // }

        // function identitas($nama,$kelas,$alamat){
        //     echo "nama  = $nama ";
        //     jarak();
        //     echo "kelas = $kelas";
        //     jarak();
        //     echo "alamat = $alamat";
        // };

        // identitas('herdita','if-3','bandung');

        // scope
        // $val1 = 12;
        // $val2 = 10;
        
        // function data(){
        //     global $val1, $val2;
        //     $var1 = $val1 + $val2;
        //     return $var1;
        // }

        // echo data();
        
        // anonymous function
        // $ngetik = function($text){
        //     echo $text;
        // };

        // $anonymous = $ngetik;

        // $anonymous("anonymous");

        // function berteriak($callback){
        //     echo "halloooooo";
        //     call_user_func($callback,'hai semuanya nama saya herdi');
        // };

        // $panggilan = function($text){
        //     echo $text;
        // };

        // berteriak($panggilan);

        // pengujian function
        function berteriak($callback){
            echo "halloooooo";
            //callback

            if(is_callable($callback)){
                call_user_func($callback,'hai semuanya nama saya herdi dan ini function');
            }else{
                echo "ini bukan function";
            };
            
        };

        $panggilan = function($text){
            echo $text;
        };

        berteriak($panggilan);

    ?>
</body>
</html>