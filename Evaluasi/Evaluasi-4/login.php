<?php
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    if ($username== admin && $password == '12345678') {
        header("data_santri.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Santri</title>
</head>
<body>
    <form action="" method="post">
        <label for="user" ><span style="color:red">User      :   </span></label>
        <input type="text" name="user" id="user ">
        <label for="pass">Password  :   </label>
        <input type="password" name="pass" id="pass">

        <input type="submit" name= "submit" value="submit">
    </form>
</body>
</html>