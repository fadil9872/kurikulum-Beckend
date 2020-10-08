<?php
include "controller.php";
$conn=new Controller;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Tambah Data </h1>
    <form action="" method="post">
        <div class=barang > Barang : <br>
        <input type="text" name="barang" id="barang"></div><br>
        <div class=barang> Harga : <br>
        <input type="text" name="harga" id="harga"></div><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $id = $_POST['idnama'];  
        $barang = $_POST['barang'];  
        $harga = $_POST['harga'];   
        
        $conn->insert($barang,$harga);

        header("Location:tugas.php");
    }
    ?>
</body>
</html>