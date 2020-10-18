<div class="container-fluid">
        <div class="jumbotron m-5">
            <h1 class="display-4">Ubah Artikel</h1>
            <form method="post" action="<?=BASEURL;?>/Dashboard/ubah">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="input" class="form-control" name="judul" id="judul" placeholder="Masukan .." value="<?= $data['artikel']['judul'];  ?>">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="input" class="form-control" name="penulis" id="penulis" placeholder="Masukan .." value="<?= $data['artikel']['penulis'];  ?>">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <select class="form-control" name="kategori" id="kategori" >
                        <option value=""><?= $data['artikel']['kategori'];  ?></option>
                        <option>Teknologi</option>
                        <option>Kesehatan</option>
                        <option>Umum</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="artikel">Text</label>
                    <textarea class="form-control" name="artikel" id="artikel" rows="9"><?= $data['artikel']['artikel'];  ?></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id_artikel" id="id_artikel" placeholder="Masukan .." value="<?= $data['artikel']['id_artikel'];  ?>">
                </div>
                <hr class="my-4">
                <p class="m-4">Periksa kembali jika sudah benar</p>
                <button type="submit" href="<?= BASEURL;  ?>/Dashboard" class="btn btn-primary float-right ml-2">kembali</button>
                <button type="submit" href="<?= BASEURL;  ?>/Dashboard" class="btn btn-primary float-right">Ubah</button>
                
            </form>
        </div>
      </div>
    </div>

  </div>