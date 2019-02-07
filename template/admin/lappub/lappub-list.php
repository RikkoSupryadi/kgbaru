<?php

include('component/com-lappub.php');

?>

<section class="content-header">
	<h1>Laporan <span class="small">Publikasi</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<a class="btn btn-info" href="?module=lappub/lappub-add">Tambah Laporan</a>
		</div>
		<div class="box-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nama Laporan</th>
						<th>Tanggal Laporan</th>
						<th>Link Laporan</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($lappub as $lappub) { ?>
					<tr>
						<td><?php echo $lappub['nama_lap']; ?></td>
						<td><?php echo $lappub['tgl_lap']; ?></td>
						<td><?php echo $lappub['link_lap']; ?></td>
						<td>
							<a class="btn btn-xs btn-info" href="?module=lappub/lappub-update&lappub=<?php echo $lappub['id_lappub']; ?>">Update</a>
						</td>
					</tr>
					<?php } ?>	
				</tbody>
			</table>
		</div>
	</div>
</section>