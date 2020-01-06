<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="input" name="input" id="input" onclick="input(this.value)">
        <input type="submit" value="delete" name="delete">
        <input type="submit" value="update" name="update">
    </form>
    <?php

        // $_POST['input']  = true;
        // $_POST['delete'] = true;
        // $_POST['update'] = true;

        $db = mysqli_connect('localhost','root','','sekolah');
        if(!$db){
            die("Connection Database Error ".mysqli_connect_error());
        }else{
            echo "connection Success";
        }

        $query = "";    

        function submit($query){
            global $db;
            if(mysqli_query($db,$query)){
                echo "berhasil";
            }else{
                echo "gagal";
            }
        }

        // function excute(){
            if(isset($_POST['input'])){
                $query = "INSERT INTO murid(nama,umur,alamat) VALUE ('herdi',10,'majalaya')";
                submit($query);
                $_POST['input'] = false;
            }
          
            if(isset($_POST['delete'])){
                $query = "DELETE FROM murid";
                submit($query);
            }
     
            if(isset($_POST['update'])){
                $query = "UPDATE murid SET nama='selia',umur=21 WHERE id=1";
                submit($query);
            }

            mysqli_close($db);
        // }
        
    ?>


</body>

    <script>
        document.getElementById("input") = false;
        document.getElementById("delete") = false;
        document.getElementById("update") = false;

        function input($input){
            return true;
        };

        function delete(){
            return true;
        };

        function update(){
            return true;
        };
    </script>
    
</html>