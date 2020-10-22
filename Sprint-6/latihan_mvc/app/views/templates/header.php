<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?=$data['judul']?></title>
</head>
<body>
<!-- <body style="background-image: url('<?=BASEURL;?>/img/1.jpg'); background-size:50%;"> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" ><img src="<?=BASEURL;?>/img/logo.jpg" width="50px" height="50px">Idealis Generation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?=BASEURL;?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASEURL;?>/Pelajar">Pelajar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASEURL;?>/About">About</a>
            </li>
            </ul>
        </div>
        <div class="col-6">
        <button type="submit" class="btn btn-primary tombolTambahData float-right" >
                Login
            </button>
        </div>
    </div>
</nav>