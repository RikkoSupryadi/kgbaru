<?php

include('component/com-lappub.php');

?>

<section class="content-header">
	<h1>Tambah Laporan Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['lappub-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan penambahan laporan baru. 
		<a href="?module=lappub/lappub-add"><b>Tambah Lagi</b></a> / 
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
							<input class="form-control" name="nama_lap" required />
						</div>
						<div class="form-group">
							<label>Tanggal Laporan</label>
							<div class="row">
								<div class="col-sm-12">
									<input id="checkout" class="form-control" name="tgl_lap" data-date-format="yyyy-mm-dd" />
								</div>
							</div>
						</div>
							<label>Link Laporan</label>
							<input class="form-control" name="link_lap" required />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="lappub-add">Tambah Laporan</button>
				<a class="btn btn-warning" href="?module=lappub/lappub-list">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>