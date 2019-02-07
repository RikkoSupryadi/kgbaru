<?php

include('component/com-rurah.php');

?>

<section class="content-header">
	<h1>Pemulihan Aset</h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<a class="btn btn-info" href="?module=rurah/rurah-add">Tambah Aset Baru</a>
		</div>
		<div class="box-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Kode Aset</th>
						<th>Limit/Harga</th>
						<th>Tanggal Lelang</th>
						<th>Dokumen</th>
						<th>Account Officer</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($rurah as $rurah) { ?>
					<tr>
						<td><?php echo $rurah['kode_aset']; ?></td>
						<td><?php echo $rurah['harga']; ?></td>
						<td><?php echo $rurah['tgl_lelang']; ?></td>
						<td><?php echo $rurah['dokumen']; ?></td>
						<td><?php echo $rurah['nama_user']; ?></td>
						<td>
							<a class="btn btn-xs btn-info" href="?module=rurah/rurah-update&rurah=<?php echo $rurah['id_rurah']; ?>">Update</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>