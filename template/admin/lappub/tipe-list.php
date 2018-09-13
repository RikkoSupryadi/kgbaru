<?php

include('component/com-lappub.php');

?>

<section class="content-header">
	<h1>kategori laporan <span class="small">administrasi kategori laporan</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<a class="btn btn-info" href="?module=lappub/tipe-add">Tambah Kategori Laporan</a>
		</div>
		<div class="box-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Tipe Kategori</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($tipelap as $tipelap) { ?>
					<tr>
						<td><?php echo $tipelap['nama_laptipe']; ?></td>
						<td><a class="btn btn-info btn-xs" href="?module=lappub/tipe-update&lappub-tipe=<?php echo $tipelap['id_laptipe']; ?>">Update</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>