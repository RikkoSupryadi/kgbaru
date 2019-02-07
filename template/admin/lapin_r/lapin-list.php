<?php

include('component/com-lapin_r.php');

?>

<section class="content-header">
	<h1>Laporan Internal<span class="small"> Bisnis</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<a class="btn btn-info" href="?module=lapin_r/lapin-add">Tambah Laporan</a>
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
					<?php foreach ($lapin_r as $lapin_r) { ?>
					<tr>
						<td><?php echo $lapin_r['nama_lap']; ?></td>
						<td><?php echo $lapin_r['tgl_lap']; ?></td>
						<td><?php echo $lapin_r['link_lap']; ?></td>
						<td>
							<a class="btn btn-xs btn-info" href="?module=lapin_r/lapin-update&lapin_r=<?php echo $lapin_r['id_lapin_r']; ?>">Update</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>