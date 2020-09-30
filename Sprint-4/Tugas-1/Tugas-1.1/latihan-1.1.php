<?php include "conn.php";
$conn= new Data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- <style>
#barang{
    width:25%;
    margin-top:20px;
    margin-left:5px;
}
.barang{
    margin-left:50px;
}
#jumlah{
    width:25%;
    margin-top:20px;
    margin-left:5px;

}
#harga{
    width:25%;
    margin-top:20px;
    margin-left:5px;

}

</style> -->


</head>
<body>
    <h1 class="alert alert-primary text-center"><strong>Pemasukan Toko Omo Jaya</strong></h1>
    <div class="alert alert-primary text-center" role="alert">
        <form action="" method="get">
            <div class="form-group">
                <label for="barang"> Barang : </label>
                <input type="text" name="barang" id="barang">
                </div><br>
            <div class="form-group">
                <label for="jumlah"> Jumlah : </label> 
                <input type="text" name="jumlah" id="jumlah">
                </div><br>
            <div class="form-group">
                <label for="harga"> Harga : </label>
                <input type="text" name="harga" id="harga"></div><br>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
    <?php
    if(isset($_GET['submit'])){
        $nama = $_GET['barang'];   
        $jumlah = $_GET['jumlah'];   
        $harga = $_GET['harga']; 
        
        $conn->insert_get($nama,$jumlah,$harga);
    }
    $conn->read_get();
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Julmah</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data=$conn->read_get();
                $i=1;
                foreach ($data as $key => $value):
            ?>
            <tr>
                <th ><?= $i++?></th>
                <th><?= $value["barang"] ?></th>
                <th><?= $value["jumlah"] ?></th>
                <th><?= $value["harga"] ?></th>

            </tr>

                <?php endforeach;?>
    </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>