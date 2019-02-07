<?php

include('component/com-rurah.php');

?>

<section class="content-header">
	<h1>Tambah Data Aset</h1>
</section>

<section class="content">
	<?php if(isset($_POST['rurah-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan penambahan Aset baru. 
		<a href="?module=rurah/rurah-add"><b>Tambah Lagi</b></a> / 
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
							<input class="form-control" name="kode_aset" required />
						</div>
						<div class="form-group">
							<label>Limit/Harga</label>
							<input class="form-control" name="harga" required />
						</div>
						<div class="form-group">
							<label>Lokasi</label>
							<input class="form-control" name="lokasi_rumah" required />
						</div>
						<div class="form-group">
							<label>Dokumen</label>
							<input class="form-control" name="dokumen" required />
						</div>
						<div class="form-group">
							<label>Lebar Jalan Depan (M)</label>
							<input class="form-control" name="lebar_jalan" required />
						</div>
						<div class="form-group">
							<label>Luas Tanah</label>
							<input class="form-control" name="luas_tanah" required />
						</div>
						<div class="form-group">
							<label>Luas Bangunan</label>
							<input class="form-control" name="luas_bangunan" required />
						</div>
						<div class="form-group">
							<label>Estimasi Tanggal Lelang</label>
							<div class="row">
								<div class="col-sm-12">
									<input id="checkout" class="form-control" name="tgl_lelang" data-date-format="yyyy-mm-dd"/>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Lokasi Lelang</label>
							<input class="form-control" name="lokasi_lelang" required />
						</div>
						<div class="form-group">
							<label>Gambar Rumah (Link)</label>
							<input class="form-control" name="link_img" required />
						</div>
						<button class="btn btn-success" type="submit" name="rurah-add">Tambah Laporan</button>
						<a class="btn btn-warning" href="?module=rurah/rurah-list">Batal</a>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<h2>Account Officer</h2>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" value="<?php echo $_SESSION['nama']; ?>" name="nama_user" readonly />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" name="email" required />
						</div>
						<div class="form-group">
							<label>No.Telp</label>
							<input class="form-control" name="no_telp" value="<?php echo $_SESSION['nomor_telp']; ?>" readonly />
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<?php } ?>
</section>