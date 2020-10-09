<?php
session_start();


if(isset($_SESSION['login'])){
    header("Location:index1.php");
    exit;
}
$error = false;
$msg = "";

require "Controller.php";
$conn = new Controller;
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $login = $conn->login($username, $password);
    if ($login['status'] == 'error') {
        $error = true;
        $msg = $login['msg'];
    }else {
        $_SESSION['login'] = true;
        header ('Location:index1.php');
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
<body style = " display:flex; justify-content:center;">
    <div style = "padding:20px;border:1px solid;  margin-top:10%">
    <?php
        if($error){
            ?>
                <div class="card-header" style="background: red;">
                      <span ><?= $msg?></span>
                </div>
            <?php
        }
    ?>
        <form action="" method="post" style = " background-img:1.jpg;; ">
            <div>
                <h3>Halaman Login</h3>
            </div>
                <br>
            <div>
                <div>
                    <label for="username">Username  : </label>
                </div>
                <div>
                    <input type="text" name="username" id="username" class="btn " placeholder="username">
                </div>
            </div>
            <div>
                <div>
                    <label for="password">Password  : </label>
                </div>
                <div>
                    <input type="password"  name="password" id="password" class="btn "placeholder="password">
                </div>
            </div>
            <div style= "float:right; margin-top:20px;">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>