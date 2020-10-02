<?php
include "dbsantri.php";

$conn = new Data;

if ($p) {
    # code...
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data_Keseluruhan Santri</title>
</head>
tab
<body>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Divisi</th>
                <th>Asal</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
    </table>
    <?php
        $data=$conn->read();
        $i=1;
        
        foreach ($data as $value) :
    ?>
    <table>
        <tbody>
            <tr>
                <th> <?= $i++?> </th>
                <th> <?= $value['id']?> </th>
                <th> <?= $value['nama']?> </th>
                <th> <?= $value['umur']?> </th>
                <th> <?= $value['divisi']?> </th>
                <th> <?= $value['asal']?> </th>
                <th>
                   <a href="update.php"><input type="submit" name="update" value="update"></a> 
                </th>
                <th>
                    <input  type="submit" name="delete" value="delete">
                </th>
            </tr>
        </tbody>
    </table>
    <?php
        endforeach;
    ?>
</body>
</html>