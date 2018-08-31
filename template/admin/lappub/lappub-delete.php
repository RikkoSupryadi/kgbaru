<?php

include('component/com-lappub.php');

?>

<section class="content-header">
	<h1>Hapus Laporan</h1>
</section>

<section class="content">
	<div class="box">
		<?php if(isset($_POST['lappub-del'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah sukses melakukan penghapusan Laporan. <b><a href="?module=lappub/lappub-list">Kembali</a></b>
	</div>
	<?php } else {?>
	<div class="alert alert-warning">
		<h4>Peringatan</h4>
		Apakah anda yakin untuk menghapus data user <?php echo '<b>'.$lappub_view['nama_lap'].'</b>'; ?> ? (data yang sudah dihapus tidak dapat dikembalikan lagi)
		<br/><br/>
		<form action="" method="post">
			<input type="hidden" name="id_lappub" value="<?php echo $lappub_view['id_lappub']; ?>" />
			<button class="btn btn-success" type="submit" name="lappub-del">Ya! Hapus</button>
			<a class="btn btn-info" href="?module=lappub/lappub-update&lappub=<?php echo $lappub_view['id_lappub']; ?>">Batal</a>
		</form>
	</div>
	<?php } ?>
</section>