<?php

require('config/database.php');

include('config/app.php');

include('component/com-lappub.php');

?>

<div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Laporan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-striped table-hover">
        <tbody>
          <?php foreach($lappub as $lappub) { ?>
          <tr>
            <td>
              <a  style="none" href="<?php echo $lappub['link_lap']; ?>" target="_blank">
                <?php echo $lappub['nama_lap']; ?> - <?php echo 
                  date("M Y", strtotime($lappub['tgl_lap'])); ?>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="col-sm-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Cari Laporan *" required="required" data-validation-required-message="Form Kosong">
                    <p class="help-block text-danger"></p>
                  <button id="searchbtn" class="btn btn-primary btn-xl text-uppercase" type="submit">SEARCH</button>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
</div>