<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hai Admin</title>
</head>
<body>
    
    <h1>Hello <?= $_SESSION['name']; ?> </h1>

    <form action="" method="post">
    <input type="submit" name="logout" value="Logout">
    <?php if (isset ($_POST['logout'])) {
        header ("Location:login.php");
    }
        ?>
    </form>
</body>
</html>