<div class="container">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['pelajar']['nama'];  ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['pelajar']['nrp'];  ?></h6>
        <p class="card-text"><?= $data['pelajar']['email'];  ?></p>
        <p class="card-text"><?= $data['pelajar']['jurusan'];  ?></p>
        <a href="<?= BASEURL;?>/Pelajar" class="card-link">Kembali</a>
      </div>
    </div>

</div>