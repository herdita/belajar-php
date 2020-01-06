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

        /* anonymous function
            $ngetik = function($text){
                echo $text;
            };
            $anonymous = $ngetik;
            $anonymous("anonymous");
        */

        
        // fungsi callback
        
        /*
            function berteriak($callback){
                echo "halloooooo";
                $callback();
            };

            $panggilan = function(){
                echo "perkenalkan nama saya herdita";
            };

            berteriak($panggilan);

            // atau 

            function berteriak($callback){
                echo "halloooooo";
                $callback();
            };

            berteriak(function(){
                echo "perkenalkan nama saya herdita";
            });

            // atau

            function berteriak($callback){
                echo "halloooooo";
                call_user_func($callback,'hai semuanya nama saya herdi');
            };

            $panggilan = function($text){
                echo $text;
            };

            berteriak($panggilan);

            // atau

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

        */


        /* include and require
            <?php include() ?>
            <?php include_once() ?>
            <?php require() ?>
            <?php require_once('footer.php') ?>
        */

        /* implode and explode
            implode{untuk merubah array menjadi string};
            explode{untuk merubah string menjadi array (jangan lupa pakai tanda " ")}

            $array = ['programmers','desainer','manager'];
            $pekerjaan = 'desainer sistem bergambar google';
            echo implode(" | ",$array);
            echo "<br>";
            print_r(explode(" ",$pekerjaan));
        */

        /* Date
            $tanggal = date('d-M-Y');
            echo $tanggal;
        */

        /* trim
            trim untuk menghapus whitespace di depan atau belakang
            ltrim untuk menghapus whitespace depan
            rtrim untuk menghapus whitespace belakang
            
            $text = " tuliskan nama anda ";
            echo "coba".trim($text);
        */

        /* get and post

            <!-- <form action="" method="post">
                <input type="text" name="nama">
                <input type="password" name="password">
                <input type="submit" name="submit">
            </form> -->

            if(isset($_POST['submit'])){
                 echo $_POST['nama'];
                 echo $_POST['password'];
            };

        */

        /* contoh login

            <form action="" method="post">
                <input type="text" name="user">
                <input type="password" name="password">
                <input type="submit" name="submit">
            </form>

            <?php
                $data_user = "herdita";
                $data_pass = "21051997";

                if(isset($_POST['submit'])){
                    if($_POST['user']==$data_user && $_POST['password']==$data_pass){
                        echo "login berhasil";
                        // untuk berpindah ke halaman bisa menggunakan header
                        header('Location: 5_halaman_get.php?nama='.$_POST['nama']);
                    }else{
                        echo "login gagal";
                    };
                };
            ?>

        */

        /*  cookie
                setcookie('name_user',$_POST['user'],time()+100);
                header(Location:halamanTujuan.php);
                //untuk ke halaman berikutnya
                $_COOKIE['name_user'];
        */

        /*  session
                $_SESSION['name_user'] = $_POST['user'];
                header('Location:5_halaman_get.php');
                echo "selamat datang datang ".$_SESSION['name_user']
        */

        /*  upload gambar
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="gambar">
                    <input type="submit" name="submit">
                </form>
            <?php
                if(isset($_POST['submit'])){

                    $asal = $_FILES["gambar"]["tmp_name"];
                    $nama = $_FILES["gambar"]["name"];

                    move_uploaded_file($asal, 'upload/'.$nama);
                    echo "upload Succes";
                };
            ?>
        */

        /* validasi upload gambar
            
            if(isset($_POST['submit'])){
                // print_r($_FILES);
                $time   = time();
                $name   = $_FILES["file"]["name"];
                $from   = $_FILES["file"]["tmp_name"];
                $size   = $_FILES["file"]["size"];
                $error  = $_FILES["file"]["error"];
                $format = $_FILES["file"]["type"];
                $namafile = 'upload/'. $name;

                // $formatLain = pathinfo($name, PATHINFO_EXTENSION); untuk mengetahui format bisa pakai ini
                
                if($error==0){

                    if($size<1000000){

                        if($format=="image/jpeg"){

                            if(file_exists($namafile)){
                                $namafile = str_replace(".jpg","",$namafile);
                                $namafile = $namafile."_".$time.".jpg";
                            };

                            move_uploaded_file($from,$namafile);
                            echo "berhasil upload";

                        }elseif ($format=="image/png") {
                            
                            if(file_exists($namafile)){
                                $namafile = str_replace(".png","",$namafile);
                                $namafile = $namafile."_".$time.".png";
                            };

                            move_uploaded_file($from,$namafile);
                            echo "berhasil upload";

                        }else{
                            echo "formatnya harus jpeg atau png";
                        }

                    }else{
                        echo "file upload melebihi kapasitas";
                    }

                }else{
                    echo "File upload error";
                }
            
            };

        */

    ?>
</body>
</html>