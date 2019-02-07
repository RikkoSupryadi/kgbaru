<?php

include('component/com-rurah.php');

?>

<section class="content-header">
	<h1>Update Data Aset</h1>
</section>

<section class="content">
	<?php if(isset($_POST['rurah-update'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan perubahan data Aset. 
		<a href="?module=rurah/rurah-update&rurah=<?php echo $rurah_view['id_rurah']; ?>"><b>Ubah Lagi</b></a> / 
		<a href="?module=rurah/rurah-list"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<div class="box">
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Kode Aset</label>
							<input class="form-control" name="kode_aset" value="<?php echo $rurah_view['kode_aset']; ?>" required />
						</div>
						<div class="form-group">
							<label>Limit/Harga</label>
							<input class="form-control" name="harga" value="<?php echo $rurah_view['harga']; ?>" required />
						</div>
						<div class="form-group">
							<label>Lokasi</label>
							<input class="form-control" name="lokasi_rumah" value="<?php echo $rurah_view['lokasi_rumah']; ?>" required />
						</div>
						<div class="form-group">
							<label>Dokumen</label>
							<input class="form-control" name="dokumen" value="<?php echo $rurah_view['dokumen']; ?>" required />
						</div>
						<div class="form-group">
							<label>Lebar Jalan Depan (M)</label>
							<input class="form-control" name="lebar_jalan" value="<?php echo $rurah_view['lebar_jalan']; ?>" required />
						</div>
						<div class="form-group">
							<label>Luas Tanah</label>
							<input class="form-control" name="luas_tanah" value="<?php echo $rurah_view['luas_tanah']; ?>" required />
						</div>
						<div class="form-group">
							<label>Luas Bangunan</label>
							<input class="form-control" name="luas_bangunan" value="<?php echo $rurah_view['luas_bangunan']; ?>" required />
						</div>
							<div class="form-group">
								<label>Estimasi Tanggal Lelang</label>
									<input id="checkout" class="form-control" name="tgl_lelang" data-date-format="yyyy-mm-dd" 
									value="<?php echo $rurah_view['tgl_lelang']; ?>" />
							</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Lokasi Lelang</label>
							<input class="form-control" name="lokasi_lelang" value="<?php echo $rurah_view['lokasi_lelang']; ?>" required />
						</div>
						<div class="form-group">
							<label>Gambar Rumah (Link)</label>
							<input class="form-control" name="link_img" value="<?php echo $rurah_view['link_img']; ?>" required />
						</div>
						<input type="hidden" name="id_rurah" value="<?php echo $rurah_view['id_rurah']; ?>" />
						<button class="btn btn-success" type="submit" name="rurah-update">Update Laporan</button>
						<a class="btn btn-danger" href="?module=rurah/rurah-delete&rurah=<?php echo $rurah_view['id_rurah']; ?>">Hapus</a>
						<a class="btn btn-warning" href="?module=rurah/rurah-list">Batal</a>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<h2>Account Officer</h2>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" value="<?php echo $rurah_view['nama_user']; ?>" name="nama_user" readonly />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" name="email" value="<?php echo $rurah_view['email'] ?>" required />
						</div>
						<div class="form-group">
							<label>No.Telp</label>
							<input class="form-control" name="no_telp" value="<?php echo $rurah_view['no_telp']; ?>" readonly />
						</div>
					</div>
			</div>
		</form>
	</div>
	<?php } ?>
</section>