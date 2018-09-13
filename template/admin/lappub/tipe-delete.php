<?php

include('component/com-lappub.php');

?>

<section class="content-header">
	<h1>Hapus Kategori</h1>
</section>

<section class="content">
	<?php if(isset($_POST['laptipe-del'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah sukses melakukan penghapusan kategori. <b><a href="?module=lappub/tipe-list">Kembali</a></b>
	</div>
	<?php } else {?>
	<div class="alert alert-warning">
		<h4>Peringatan</h4>
		Apakah anda yakin untuk menghapus kategori: <?php echo '<b>'.$laptipe_view['nama_laptipe'].'</b>'; ?> ? (data yang sudah dihapus tidak dapat dikembalikan lagi)
		<br/><br/>
		<form action="" method="post">
			<input type="hidden" name="id_laptipe" value="<?php echo $laptipe_view['id_laptipe']; ?>" />
			<button class="btn btn-success" type="submit" name="kamartipe-del">Ya! Hapus</button>
			<a class="btn btn-info" href="?module=lappub/tipe-update&lap-tipe=<?php echo $laptipe_view['id_laptipe']; ?>">Batal</a>
		</form>
	</div>
	<?php } ?>
</section>