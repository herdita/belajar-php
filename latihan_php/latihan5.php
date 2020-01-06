<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        background: #e9e6e6e0;
    }
    
    table {
        margin-top: 100px;
    }
    
    input {
        width: 230px;
        height: 40px;
        padding: 5px 10px;
        box-sizing: border-box;
    }
</style>

<body>
    <form action="" method="Post">
        <table align="center">
            <tr>
                <td><input type="text" name="user" id="user" placeholder="User"></td>
            </tr>
            <tr>
                <td><input type="text" name="password" id="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Daftar" id="submit" name="submit" onsubmit="validasi()"></td>
            </tr>
        </table>
    </form>
    <span id="tampil"></span>
</body>
<script>
    var submit = document.querySelector('#submit');
    var user = document.querySelector('#user');
    var password = document.querySelector('#password');

    function validasi() {
        if (user.value == password.value) {
            alert("succes");
        } else {
            alert("Gagal");
        }
    };
</script>

</html>