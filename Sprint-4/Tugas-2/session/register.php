<?php
include ("dblogin.php");
$conn=new Data;

if(isset($_POST['submit'])){
    $username   = $_POST['iduser'];  
    $pass       = $_POST['pass'];   
    $alamat     = $_POST['alamat'];   
    $jurusan    = $_POST['jurusan'];
    
    $conn->register($username,$pass,$alamat,$jurusan);
    header("Location:sesion.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
    table{
        display:block;
    }

    </style>

</head>
<body>
    <form action="" method="post">
        <table>
            <div>
                <label for="iduser">ID User :</label>
                <br>
                <input type="text" name="iduser" id="iduser">
            </div>
            <br>
            <div>
                <label for="pass">Password : </label>
                <br>
                <input type="text" name="pass" id="pass">
            </div>
            <br>
            <div>
                <label for="alamat">Alamat : </label>
                <br>
                <input type="text" name="alamat" id="alamat">        
            </div>
            <br>
            <div>
                <label for="jurusan">Jurusan : </label>
                <br>
                <input type="text" name="jurusan" id="jurusan">            
            </div>    
        </table>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>