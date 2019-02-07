<?php

    include('../config/database.php');

    include('../config/app.php');

    include('component/com-rurah.php');


?>
<section class="content">
  <div class="box-header">

  <?php 

  	if ($id = intval($_GET['id_rurah'])) {
  		$id=$database->get('rurah',[
        'rurah.id_rurah',	
		'rurah.kode_aset',
		'rurah.lokasi_rumah',
		'rurah.dokumen',
		'rurah.lebar_jalan',
		'rurah.luas_tanah',
		'rurah.harga',
		'rurah.luas_bangunan',
		'rurah.tgl_lelang',
		'rurah.lokasi_lelang',
		'rurah.link_img',
		'rurah.nama_user',
		'rurah.no_telp',
		'rurah.email'
	],[
	    'id_rurah'=>$_GET['id_rurah']
	]);
  	}

  ?>

  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Nomor Assets : <b><?php echo $id['kode_aset'];; ?></b></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
          </button>
      </nav>

      <hr>
      
      <div class="row" id="topbar">
      	<div class="col-md-1">
        </div>

        <div class="col-md-7">
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo $id['link_img']; ?>" alt="">
        </div>
        <div class="col-md-3">
          <h3> Marketing</h3>
          <hr>
          	<p><b> Nama : </b><?php echo $id['nama_user'];; ?></p><hr>
          	<p><b> No Telepon : </b><?php echo $id['no_telp'];; ?></p><hr>
          	<p><b> No Whatsapp : </b><?php echo $id['no_telp'];; ?></p><hr>
          	<p><b> Email : </b><?php echo $id['email'];; ?></p><hr>
        </div>

        <div class="col-md-1">
        </div>
      </div>
      <div class="row" id="details">
      	<div class="col-md-1">
        </div>

        <div class="col-md-6">
            <hr>
            <h3> Detail Asset</h3><hr>
            <p><b>Kode Asset : </b> <?php echo $id['kode_aset'];; ?></p>
            <p><b>Limit/Harga : </b> <?php echo $id['harga'];; ?> (Rp)</p>
            <p><b>Lokasi : </b> <?php echo $id['lokasi_rumah'];; ?></p>
            <p><b>Dokumen : </b> <?php echo $id['dokumen'];; ?></p>
            <p><b>Lebar Jalan Depan : </b> <?php echo $id['lebar_jalan'];; ?> (m)</p>
            <p><b>Luas Tanah : </b> <?php echo $id['luas_tanah'];; ?> (m2)</p>
            <p><b>Bangunan : </b> <?php echo $id['luas_bangunan'];; ?> (m2)</p>
        </div>
        <div class="col-md-4">
            <hr>
            <h3> Jadwal Lelang</h3><hr>
            <p><b>Estimasi Tanggal Lelang : </b> <?php echo $id['tgl_lelang'];; ?></p>
            <p><b>Rencana Lokasi Lelang : </b> <?php echo $id['lokasi_lelang'];; ?></p>
            <p><b>No Telepon : </b> <?php echo $id['no_telp'];; ?></p>
            <p><b>Dokumen : </b> <?php echo $id['dokumen'];; ?></p>
        </div>

        <div class="col-md-1">
        </div>
      </div>
      <div class="row" id="jadwal">
      	<div class="col-md-1">
        </div>

  
        <div class="col-md-3">
        </div>

        <div class="col-md-1">
        </div>
      </div>

    </div>
</section>
 