<?php
    require_once __DIR__ ."/vendor/autoload.php";

    use Src\Persegi;
    use Src\Segitiga;
    use Src\Lingkaran;

    $persegi = new Persegi;
    $segitiga = new Segitiga;
    $lingkaran = new Lingkaran;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan</title>
</head>
<body>
      <div class="card text-center "style="background-color: #458ce9;">
        <div class="card-body">
          <h3 class="card-title">Operasi Hitung</h3>
          <p class="card-text">Bangun Datar</p>
        </div>
      </div>
    <div class="row" style="padding:30px">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Luas Persegi Panjang</h5>
            <form action="" method="post">
                <div class="form-group">
                  <label for="panjang">Panjang :</label>
                  <input type="text"
                    class="form-control" name="panjang" id="panjang" aria-describedby="helpId" placeholder="Silahkan Masukan">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="lebar">Lebar :</label>
                  <input type="text"
                    class="form-control" name="lebar" id="lebar" aria-describedby="helpId" placeholder="Silahkan Masukan">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
                <button type="submit" name ="luasPersegi" class="btn btn-primary">Submit</button><br>
                <?php
                    if (isset($_POST['luasPersegi'])) {
                        $panjang    = $_POST['panjang'];
                        $lebar      = $_POST['lebar'];
                        $hasil      = $persegi->luas_persegi($panjang ,$lebar);
                        
                        echo "<input type='text' class='form-control' value='$hasil'>";
                    }
                ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Luas Segitiga</h5>
            <form action="" method="post">
                <div class="form-group">
                  <label for="alas">Alas :</label>
                  <input type="text"
                    class="form-control" name="alas" id="alas" aria-describedby="helpId" placeholder="Silahkan Masukan">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="tinggi">Tinggi :</label>
                  <input type="text"
                    class="form-control" name="tinggi" id="tinggi" aria-describedby="helpId" placeholder="Silahkan Masukan">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
                <button type="submit" name ="luasSegitiga" class="btn btn-primary">Submit</button>
                <?php
                    if (isset($_POST['luasSegitiga'])) {
                        $alas       = $_POST['alas'];
                        $tinggi     = $_POST['tinggi'];
                        $hasil      = $segitiga->luas_segitiga($alas ,$tinggi);
                        
                        echo "<input type='text' class='form-control' value='$hasil'>";
                    }
                ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Luas Lingkaran</h5>
            <form action="" method="post">
                <div class="form-group">
                  <label for="jarijari">Jari-Jari :</label>
                  <input type="text"
                    class="form-control" name="jarijari" id="jarijari" aria-describedby="helpId" placeholder="Silahkan Masukan">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
                <button type="submit" name ="luasLingkaran" class="btn btn-primary">Submit</button>
                <?php
                    if (isset($_POST['luasLingkaran'])) {
                        $jarijari       = $_POST['jarijari'];
                        $hasil      = $lingkaran->luas_lingkaran($jarijari);
                        
                        echo "<input type='text' class='form-control' value='$hasil'>";
                    }
                ?>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>