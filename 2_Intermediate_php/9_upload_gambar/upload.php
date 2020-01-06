<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>