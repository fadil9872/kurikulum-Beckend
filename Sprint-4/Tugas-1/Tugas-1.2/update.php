<?php
include "controller.php";
$conn=new Controller;
$id_update=$_GET['id'];
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
    <?php 
    $data =$conn->read_update($id_update);
    $i=1;
    foreach ($data as $key => $value) :
    ?>
    <form action="" method="post">
        <div class=barang > Barang : <br>
        <input type="text" name="barang" id="barang"value="<?= $value['barang'] ?>"></div><br>
        <div class=barang> Harga : <br>
        <input type="text" name="harga" id="harga" value="<?= $value['harga'] ?>"></div><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    endforeach;
    ?>
    <?php
    if(isset($_POST['submit'])){
        $id = $_POST['idnama'];  
        $barang = $_POST['barang'];  
        $harga = $_POST['harga'];   
        
        $conn->update($barang,$harga,$id);

        header("Location:tugas.php");
    }
    ?>
</body>
</html>