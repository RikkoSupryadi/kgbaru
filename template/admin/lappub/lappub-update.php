<?php

include('component/com-lappub.php');

?>

<section class="content-header">
	<h1>Tambah Laporan Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['lappub-update'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan perubahan data pengguna. 
		<a href="?module=lappub/lappub-update&lappub=<?php echo $lappub_view['id_lappub']; ?>"><b>Ubah Lagi</b></a> / 
		<a href="?module=lappub/lappub-list"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<div class="box">
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nama Laporan</label>
							<input class="form-control" name="nama_lap" value="<?php echo $lappub_view['nama_lap']; ?>" />
						</div>
							<div class="form-group">
								<label>Tanggal Laporan</label>
									<input id="checkout" class="form-control" name="tgl_lap" data-date-format="yyyy-mm-dd" 
									value="<?php echo $lappub_view['tgl_lap']; ?>" />
								</div>
						<div class="form-group">
							<label>Link Laporan</label>
							<input class="form-control" name="link_lap" value="<?php echo $lappub_view['link_lap']; ?>" />
						</div>
					</div>
			</div>
			<div class="box-footer">
				<input type="hidden" name="id_lappub" value="<?php echo $lappub_view['id_lappub']; ?>" />
				<button class="btn btn-success" type="submit" name="lappub-update">Update Laporan</button>
				<a class="btn btn-danger" href="?module=lappub/lappub-delete&lappub=<?php echo $lappub_view['id_lappub']; ?>">Hapus</a>
				<a class="btn btn-warning" href="?module=lappub/lappub-list">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>