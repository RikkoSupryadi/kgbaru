<?php

include('component/com-lappub.php');

?>

<section class="content-header">
	<h1>Tambah Tipe Kamar <span class="small">Administrasi penambahan tipe kamar baru</span></h1>
</section>

<section class="content">
	<?php if(isset($_POST['laptipe-update'])){ ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil mengubah data Tipe Kamar.
		<a href="?module=lappub/tipe-update&tipelap=<?php echo $tipelap_view['id_lappub']; ?>"><b>Ubah Lagi</b></a> / 
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
							<input class="form-control" name="nama_laptipe" value="<?php  echo $tipelap_view['nama_laptipe'] ?>" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<input type="hidden" name="id_laptipe" value="<?php echo $tipelap_view['id_laptipe']; ?>" />
				<button class="btn btn-success" type="submit" name="laptipe-update">Update</button>
				<a class="btn btn-danger" href="?module=lappub/tipe-delete&tipelap=<?php echo $tipelap_view['id_laptipe']; ?>">Hapus</a>
				<a class="btn btn-warning" href="?module=lappub/tipe-list">Batal</a>
			</div>	
		</div>
	</form>
	<?php } ?>
</section>