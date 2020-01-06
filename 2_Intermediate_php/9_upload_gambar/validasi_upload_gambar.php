<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="validasi_upload_gambar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            // print_r($_FILES);
            $name   = $_FILES["file"]["name"];
            $from   = $_FILES["file"]["tmp_name"];
            $size   = $_FILES["file"]["size"];
            $error  = $_FILES["file"]["error"];
            $format = $_FILES["file"]["type"];

            // $formatLain = pathinfo($name, PATHINFO_EXTENSION); untuk mengetahui format bisa pakai ini
            
            if($error==0){

                if($size<1000000){

                    if($format=="image/jpeg"){
                        move_uploaded_file($from,'upload/'.$name);
                        echo "berhasil upload";
                    }else{
                        echo "formatnya harus jpeg";
                    }

                }else{
                    echo "file upload melebihi kapasitas";
                }

            }else{
                echo "File upload error";
            }
            
        };

    ?>
</body>
</html>