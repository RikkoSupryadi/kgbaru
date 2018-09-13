<?php

include('component/com-lappub.php');

?>

<section class="content-header">
	<h1>Tambah Kategori Laporan <span class="small">Administrasi penambahan kategori baru</span></h1>
</section>

<section class="content">
	<?php if(isset($_POST['laptipe-add'])){ ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil menambah data Kategori.
		<a href="?module=lappub/tipe-list"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<form action="" method="post">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nama Kategori</label>
							<input class="form-control" name="nama_laptipe" required />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="laptipe-add">Tambah</button>
				<a class="btn btn-warning" href="?module=lappub/tipe-list">Batal</a>
			</div>	
		</div>
	</form>
	<?php } ?>
</section>