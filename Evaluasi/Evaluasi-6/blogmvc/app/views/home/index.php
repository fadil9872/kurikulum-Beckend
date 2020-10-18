<div id="carouselExampleDark" class="carousel carousel-dark slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleDark" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleDark" data-slide-to="1"></li>
    <li data-target="#carouselExampleDark" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="<?=BASEURL;?>/img/s1.jpg" class="d-block w-100" style="height:300px" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="<?=BASEURL;?>/img/s2.jpg" class="d-block w-100" style="height:300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=BASEURL;?>/img/s3.jpg" class="d-block w-100" style="height:300px" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-11">
             
                <ul class="list-group">
                    <?php foreach ($data['artikel'] as $judul):?>
                        <li class="list-group-item">
                            
                            <div class="jumbotron">
                                <h4 class="display-5"><?=$judul['judul'];?></h4>
                                <hr class="my-3">
                                <p><?= substr($judul['artikel'],0,300); ?>......</p>
                                <a class="btn btn-primary " href="<?=BASEURL;?>/Home/page/<?=$judul['id_artikel'];?>" role="button">Read More</a>
                            </div>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
  </div>  