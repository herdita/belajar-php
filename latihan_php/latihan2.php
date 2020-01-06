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
        <table>
            <tbody>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Password Ulang</td>
                    <td>:</td>
                    <td><input type="password" name="passwordUlang"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </tbody>
        </table>
    </form>    

    <?php
        if(isset($_POST['submit'])){
            $user = $_POST['user'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordUlang = $_POST['passwordUlang'];

            if($passwordUlang!=$password){
                $alert = "password tidak sama";
                echo $alert;
            }else{
                echo "User      : ".$user."<br>";
                echo "Email      : ".$email."<br>";
                echo "password  : ".$password."<br>";   
            }; 
        };
    ?>


</body>
</html>