<?php include "dbindex.php";
$conn= new Data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Update Data </h1>
    <form action="" method="post">
        <div class=barang > Id : <br>
        <input type="text" name="idnama" id="idnama"></div><br>
        <div class=barang > Nama : <br>
        <input type="text" name="nama" id="nama"></div><br>
        <div class=barang> Umur : <br>
        <input type="text" name="umur" id="umur"></div><br>
        <div class=barang> Jurusan : <br>
        <input type="text" name="jurusan" id="jurusan"></div><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $id = $_POST['idnama'];  
        $nama = $_POST['nama'];  
        $umur = $_POST['umur'];   
        $jurusan = $_POST['jurusan'];
        
        $conn->update($nama,$umur,$jurusan,$id);

        header("Location:index1.php");
    }
    ?>
</body>
</html>