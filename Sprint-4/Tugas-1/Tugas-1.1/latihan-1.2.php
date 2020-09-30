<?php include "conn.php";
$conn= new Data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
<style>
/* #barang{ */
    /* width:25%; */
    /* margin-top:20px; */
    /* margin-left:5px; */
/* } */
.barang{
    margin-left:50px;
}
/* #jumlah{ */
    /* width:25%; */
    /* margin-top:20px; */
    /* margin-left:5px; */
/*  */
/* } */
/* #harga{ */
    /* width:25%; */
    /* margin-top:20px; */
    /* margin-left:5px; */

}

</style>


</head>
<body>
    <h1>Pemasukan Toko Omo Jaya</h1>
    <form action="" method="post">
        <div class=barang> Kurir : <br>
        <input type="text" name="kurir" id="kurir"></div><br>
        <div class=barang > Pengirim : <br>
        <input type="text" name="pengirim" id="pengirim"></div><br>
        <div class=barang> Asal : <br>
        <input type="text" name="asal" id="asal"></div><br>
        <div class=barang> Tujuan : <br>
        <input type="text" name="tujuan" id="tujuan"></div><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $kurir = $_POST['kurir'];   
        $pengirim = $_POST['pengirim'];   
        $asal = $_POST['asal'];
        $tujuan = $_POST['tujuan']; 
        
        $conn->insert_post($kurir,$pengirim,$asal,$tujuan);
    }
    $conn->read_post();
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kurir</th>
                <th>Nama Pengirim</th>
                <th>Asal</th>
                <th>Tujuan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data=$conn->read_post();
                $i=1;
                foreach ($data as $key => $value):
            ?>
            <tr>
                <th><?= $i++?></th>
                <th><?= $value["kurir"] ?></th>
                <th><?= $value["pengirim"] ?></th>
                <th><?= $value["asal"] ?></th>
                <th><?= $value["tujuan"] ?></th>

            </tr>

                <?php endforeach;?>
    </tbody>
    </table>
</body>
</html>