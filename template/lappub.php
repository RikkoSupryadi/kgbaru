<?php

require('config/database.php');

include('config/app.php');

include('component/com-lappub.php');

mysql_connect("localhost", "root","") or die(mysql_error());
mysql_select_db("kgbaru") or die(mysql_error());

$query = "SELECT DISTINCT tgl_lap FROM lappub ORDER BY tgl_lap";
$result = mysql_query($query) or die(mysql_error()."[".$query."]");

?>

<div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Laporan</h2>
          </div>
        </div>
        <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <select class="form-control" autocoplete="off" id="SPeriode" onchange="tampilFunction()">
                  <option>-pilih-</option>
                  <?php 
                      while ($row = mysql_fetch_array($result))
                      {
                          echo "<option>".date("M Y", strtotime($row['tgl_lap']))."</option>";
                      }
                      ?>      
                </select>
              </div>
              <div class="col-md-4">
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