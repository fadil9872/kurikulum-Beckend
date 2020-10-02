<?php
include "dbsantri.php";
$conn= new Data;

$nama   = $_POST['nama'];
$umur   = $_POST['umur'];
$divisi = $_POST['divisi'];
$asal   = $_POST['asal'];

if (isset($_POST['submit'])) {
    $conn->tambah($nama,$umur,$divisi,$asal);
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Santri</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Nama      :    </label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="umur">Umur      :   </label>
        <input type="text" name="umur" id="umur">
        <br>
        <label for="divisi">Divisi  :   </label>
        <input type="text" name="divisi" id="divisi">
        <br>
        <label for="asal">Asal      :   </label>
        <input type="text" name="asal" id="asal">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>