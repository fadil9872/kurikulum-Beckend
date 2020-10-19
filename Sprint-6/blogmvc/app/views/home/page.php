<div class="container">

    <div class="jumbotron m-4">
        <h1 class="display"><?= $data['artikel']['judul'];  ?></h1>
        <h6 class="p-3">Karya : <?= $data['artikel']['penulis'];  ?></h6>
        <hr class="my-4">
            <div class="container p-4">
                <p class="lead"><?= $data['artikel']['artikel'];  ?></p>
            </div>
        <a class="btn btn-primary btn-lg float-right" href="<?= BASEURL;?>/Dashboard" role="button">Kembali</a>
    </div>

</div>