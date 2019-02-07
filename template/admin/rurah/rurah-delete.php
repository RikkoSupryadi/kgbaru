<?php

include('component/com-rurah.php');

?>

<section class="content-header">
	<h1>Hapus Data Aset</h1>
</section>

<section class="content">
	<div class="box">
		<?php if(isset($_POST['rurah-del'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah sukses melakukan penghapusan Aset. <b><a href="?module=rurah/rurah-list">Kembali</a></b>
	</div>
	<?php } else {?>
	<div class="alert alert-warning">
		<h4>Peringatan</h4>
		Apakah anda yakin untuk menghapus data Aset <?php echo '<b>'.$rurah_view['kode_aset'].'</b>'; ?> ? (data yang sudah dihapus tidak dapat dikembalikan lagi)
		<br/><br/>
		<form action="" method="post">
			<input type="hidden" name="id_rurah" value="<?php echo $rurah_view['id_rurah']; ?>" />
			<button class="btn btn-success" type="submit" name="rurah-del">Ya! Hapus</button>
			<a class="btn btn-info" href="?module=rurah/rurah-update&rurah=<?php echo $rurah_view['id_rurah']; ?>">Batal</a>
		</form>
	</div>
	<?php } ?>
</section>