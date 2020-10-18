  <div class="container">
    <div class="row">
        <div class="col-11">
             
                <ul class="list-group">
                    <?php foreach ($data['artikel'] as $judul):?>
                        <li class="list-group-item">
                            
                            <div class="jumbotron">
                                <h4 class="display-5"><?=$judul['judul'];?></h4>
                                <hr class="my-3">
                                <p><?= substr($judul['artikel'],0,300); ?></p>
                                <a class="btn btn-primary " href="<?=BASEURL;?>/Dashboard/detail/<?=$judul['id_artikel'];?>" role="button">Detail</a>
                                <a class="btn btn-primary " href="<?=BASEURL;?>/Dashboard/hapus/<?=$judul['id_artikel'];?>" role="button" onclick="return confirm('apakah anda yakin ingin menghapus?') ;">Hapus</a>
                                <a class="btn btn-primary " href="<?=BASEURL;?>/Dashboard/getubah/<?=$judul['id_artikel'];?>" role="button">Ubah</a>
                            </div>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
  </div>  