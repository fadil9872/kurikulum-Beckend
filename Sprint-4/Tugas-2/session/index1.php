<?php
session_start();
include "dbindex.php";
$datauser= new Data;




    if (isset($_POST['hapus'])) {
        $datauser->delete($value['id']);
    }
    if (isset($_POST['update'])) {
        header("Location:update.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $datauser->user();
    ?>
    <table>
    <h3>Halo <?= $_SESSION['name'];?></h3>
    </table>
    <table>
        <blockquote class="blockquote text-center">
            <p class="mb-0">Sistem Pendataan Sekolah </p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
    </table>

    <table class="table" >
        <th scope="col">
            <a href="tambah.php"><input type ="submit" name="tambah" value="Tambah Data"></a>
        </th>
    </table>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
    <tbody>
    <?php 
    $data =$datauser->user();
    $i=1;
    foreach ($data as $key => $value) :
    ?>

        <tr>
            <th scope="col"> <?= $i++ ?> </th>
            <th scope="col"> <?= $value['id'] ?> </th>
            <th scope="col"> <?= $value['nama'] ?> </th>
            <th scope="col"> <?= $value['umur'] ?> </th>
            <th scope="col"> <?= $value['jurusan'] ?> </th>
            <th>
                <form action="" method="post">
                    <input type="submit" name="hapus" value="hapus">
                    <input type="submit" name="update" value="update"></>
                </form>
            
            </th>

        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
   
    </table>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>