<div class="container-fluid">
        <div class="jumbotron m-5">
            <h1 class="display-4">Register</h1>
            <form method="post" action="<?=BASEURL;?>/Home/tambahregister">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukan .." required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="input" class="form-control" name="password" id="password" placeholder="Masukan .." required>
                </div>
                <div class="form-group  my-3">
                    <label for="alamat">Alamat</label>
                    <input type="input" class="form-control" name="alamat" id="alamat" placeholder="Masukan .." required>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <button type="submit" class="btn btn-primary float-right mx-5">Tambah</button>
                
                </div>
            </form>
        </div>
      </div>
    </div>

  </div>