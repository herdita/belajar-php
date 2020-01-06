<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="nilaiAwal">
        <input type="number" name="banyakNilai">
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_GET['submit'])){
            $nilai_awal = $_GET['nilaiAwal'];
            $banyak_nilai = $_GET['banyakNilai'];
            ForTambah($nilai_awal,$banyak_nilai);
            arrayAcak();
        };

        $arrayHasil = [];
        
        function ForTambah($a,$n){
            global $arrayHasil;
            $nilai = $a;
            $sigma = $n;
            $j = 0;
            $arr = 0;
            for($i=$a;$i<=$sigma;$i++){
                $arrayHasil[$arr] = $i;
                echo $arrayHasil[$arr];
                if($i<$sigma){
                    echo " + ";
                }else{
                    echo " = ";
                }
                $j = $j+$i;
                $arr++;
            };
            echo $j;
            echo "<br>";
            // print_r($arrayHasil);
        };

        function arrayAcak(){
            global $arrayHasil,$j;
            shuffle($arrayHasil);
            // print_r($arrayHasil);
            echo "Hasil Perubahan acak <br>";
            for($i=0; $i<count($arrayHasil);$i++){
                echo $arrayHasil[$i];
                if($i<count($arrayHasil)-1){
                    echo " + ";
                }else{
                    echo " = ";
                };
            };
            $jumlah = array_sum($arrayHasil);
            echo $jumlah;
        };

        
        

    ?>
</body>
</html>