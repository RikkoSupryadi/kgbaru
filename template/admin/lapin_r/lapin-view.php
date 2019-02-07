<?php

include('component/com-lapin_r.php');

?>

<section class="content-header">
	<h1>Laporan Internal<span class="small"> Bisnis</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<table class="table table-striped table-hover">
				<tbody>
					<?php foreach ($lapin_r as $lapin_r) { ?>
					<tr>
		              <td>
		                <a  style="color: #000000" href="<?php echo $lapin_r['link_lap']; ?>" target="_blank">
		                <?php echo $lapin_r['nama_lap']; ?> - <?php echo 
		                  date("M Y", strtotime($lapin_r['tgl_lap'])); ?>
		              </a>
		              </td>
		            </tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>