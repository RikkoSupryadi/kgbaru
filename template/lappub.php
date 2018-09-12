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
              <div class="col-md-3 text-center">
                <p>Laporan</p>
              </div>
              <div class="col-md-3 text-center">
                <p>Periode</p>
              </div>
              <div class="col-md-3 text-center">
                <p>Jenis</p>
              </div>
        </div>
        <div class="row">
              <div class="col-md-3">
                <select class="form-control" autocoplete="off" id="SLaporan">
                  <option>Laporan</option>
                </select>
              </div>
              <div class="col-md-3">
                <select class="form-control" autocoplete="off" id="SPeriode">
                  <option>-pilih-</option>
                  <option><?php echo date("M Y",strtotime('2017-01-01')) ?></option>
                  <option><?php echo date("M Y",strtotime('2017-03-01')) ?></option>
                </select>
              </div>
              <div class="col-md-3">
                <select class="form-control" autocoplete="off" id="SJenis">
                  <option>-Jenis Laporan-</option>
                </select>
              </div>
              <div class="col-md-3">
                <button class="btn btn-primary" type="submit" onclick="tampilFunction()">Tampil</button>
              </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-striped table-hover" id="myTable">
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
  </div>
</div>