<?php

include('component/com-lapin_r.php');

?>

<section class="content-header">
	<h1>Hapus Laporan</h1>
</section>

<section class="content">
	<div class="box">
		<?php if(isset($_POST['lapin-del'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah sukses melakukan penghapusan Laporan. <b><a href="?module=lapin_r/lapin-list">Kembali</a></b>
	</div>
	<?php } else {?>
	<div class="alert alert-warning">
		<h4>Peringatan</h4>
		Apakah anda yakin untuk menghapus data user <?php echo '<b>'.$lapin_r_view['nama_lap'].'</b>'; ?> ? (data yang sudah dihapus tidak dapat dikembalikan lagi)
		<br/><br/>
		<form action="" method="post">
			<input type="hidden" name="id_lapin_r" value="<?php echo $lapin_r_view['id_lapin_r']; ?>" />
			<button class="btn btn-success" type="submit" name="lapin-del">Ya! Hapus</button>
			<a class="btn btn-info" href="?module=lapin_r/lapin-update&lapin_r=<?php echo $lapin_r_view['id_lapin_r']; ?>">Batal</a>
		</form>
	</div>
	<?php } ?>
</section>