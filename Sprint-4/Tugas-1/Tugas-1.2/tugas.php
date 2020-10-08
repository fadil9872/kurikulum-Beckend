<?php
include "controller.php";
$conn=new Controller;


if (isset($_GET['status'])) {
    $conn->delete($_GET['id']);
}
if (isset($_GET['status'])) {
    $conn->update($_GET['id']);
    
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
    <thead>
        <table class="table">
            <tr>
                <th scope="col">NO.</th>
                <th scope="col">Id</th>
                <th scope="col">Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </table>
    </thead>
    <tbody>
    <?php 
    $data =$conn->read();
    $i=1;
    foreach ($data as $key => $value) :
    ?>
        <table class="table">
            <tr>
                <th scope="col"><?= $i++ ?></th>
                <th scope="col"><?= $value['id']?></th>
                <th scope="col"><?= $value['barang']?></th>
                <th scope="col"><?= $value['harga']?></th>
                <th scope="col">
                    <a href="tugas.php?status=delete&id=<?=$value['id']?>">
                        <input type="submit" id="delete" value="delete">
                    </a>
                </th>
                <th scope="col">
                    <a href="update.php?status=update&id=<?=$value['id']?>">
                        <input type="submit" id="update" value="update">
                    </a>            
                </th>
            </tr>
        </table>
        
    <?php
    endforeach;
    ?>
    </tbody>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>