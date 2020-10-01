<?php
session_start();

$name=$_POST["id_name"];
$pass=$_POST["password"];


if (isset($_POST["submit"])) {

    if ($name=="admin" && $pass==123) {
        setcookie($name,$pass,time()+(3600*3),"/");//3jam
        $_SESSION['nama']="Mukahamad Fadil";
        header("Location:hal1.php");
        
    }else {
        $eror=true;
    }
    if (isset($_SESSION['nama'])) {
        header("Location:hal1.php");
        exit;
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
        if ($eror) {
            echo "<h5 class='row justify-content-center align-items-center '>Login Gagal Silahkan Periksan Lagi</h5>";
        }
    ?>
    <div class="row justify-content-center align-items-center color-black "style="height:400px;">
        <div class="col-2">
            <div class="card row justify-content-center align-items-center " style="width: 20rem;">
            <img src=".." class="card-img-top text-center" alt="Login">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_name">Masukan ID : </label>  <br>
                            <input type="text" name="id_name" id="id_name"> 
                            <small id="id" class="form-text text-muted">We'll never share your Id with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Masukan Password :</label><br>
                            <input type="password" name="password" id="password">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>