<?php 
session_start();
include "dbindex.php";
$conn= new Data;
$data = $conn->user();
if (!isset($_SESSION['login'])) {
    header("Location:login.php");
}
foreach ($data as $key => $value)

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
        <div class=barang > Nama : <br>
        <input type="text" name="nama" id="nama" value=<?= $value['nama'] ?>></><br>
        <div class=barang> Umur : <br>
        <input type="text" name="umur" id="umur" value=<?= $value['umur'] ?>></div><br>
        <div class=barang> Jurusan : <br>
        <input type="text" name="jurusan" id="jurusan" value=<?= $value['jurusan'] ?>></div><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $id = $value['id'];  
        $nama = $_POST['nama'];  
        $umur = $_POST['umur'];   
        $jurusan = $_POST['jurusan'];
        
        $conn->update($nama,$umur,$jurusan,$id);

        header("Location:index1.php");
    }
    ?>
</body>
</html>