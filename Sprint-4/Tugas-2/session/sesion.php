<?php
session_start();

include "dblogin.php";
$data=new Data;

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    // var_dump($username);        
    $dt=$data->login($username,$password);
    var_dump($dt);
    if ($dt) {
            
                   
        }else {
            $_SESSION['name']="Mukahamad Fadil";
            header("Location:index1.php");   
        }

        if (isset($_SESSION['name'])) {
            header("Location:index1.php");
        }


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <style>
        label {
            display:block;
        }
    </style>

</head>
<body>
<form action="" method="post">
    <div>
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button type="submit" name="submit" id="submit">Login</button>
    </div>
</form>
    
</body>
</html>