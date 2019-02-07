<?php

include('component/com-rurah.php');

?>

<div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Rumah Kencana</h2>
          </div>
        </div>

        <div class="container">
                    <ul class="gallery">
                      <?php foreach($rurah as $rurah) { ?>
                      <li>
                       
                            <div class="portfolio2-item">
                              <a class="portfolio2-link" href="template/rulang.php?id_rurah=<?php echo $rurah['id_rurah']; ?>" target="_blank">
                                <div class="portfolio2-hover">
                                  <div class="portfolio2-hover-content">
                                    <h4>More Details</h4>
                                  </div>
                                </div>
                                <img class="img-fluid" src="<?php echo $rurah['link_img']; ?>" style="width: 250px; height: 250px; " alt="">
                              </a>
                              <div class="portfolio2-caption">
                                <h4>
                                    <?php echo $rurah['kode_aset']; ?>
                                </h4>
                                <p class="text-muted">
                                  <?php echo $rurah['lokasi_rumah']; ?><br>
                                  <?php if ($rurah['tgl_lelang']==Null) {
                                    echo "0000-00-00";
                                  }else{
                                    echo $rurah['tgl_lelang'];
                                  } ?>
                                  <h4 style="color: #ffffff">
                                    <span class="badge bg-success" style=""><?php echo $rurah['harga']; ?></span>
                                  </h4>
                                </p>
                              </div>
                            </div>

                  </li>

                <?php }?>

                </ul>
                  


</div> 