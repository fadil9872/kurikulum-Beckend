<div class="container-fluid">
        <div class="jumbotron m-5">
            <h1 class="display-4">Tambah Artikel</h1>
            <form method="post" action="<?=BASEURL;?>/Dashboard/halamantambah">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="input" class="form-control" name="judul" id="judul" placeholder="Masukan .." required>
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="input" class="form-control" name="penulis" id="penulis" placeholder="Masukan .." required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" name="kategori" id="kategori">
                    <option>Teknologi</option>
                    <option>Kesehatan</option>
                    <option>Umum</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="artikel">Text</label>
                    <textarea class="form-control" name="artikel" id="artikel" rows="9" required></textarea>
                </div>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <button type="submit" class="btn btn-primary"><i class="fa fa-calendar"></i> Tambah</button>
                
            </form>
        </div>
      </div>
    </div>

  </div>