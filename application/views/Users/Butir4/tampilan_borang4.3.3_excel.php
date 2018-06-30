<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">No</th>
				 <th rowspan="2">Nama Dosen Tetap</th>
				 <th colspan="3">SKS Pengajaran pada</th>
				 <th rowspan="2">SKS Penelitian</th>
				 <th rowspan="2">SKS Pengabdian Masyarakat</th>
				 <th colspan="2">SKS Manajemen</th>
				 <th rowspan="2">Jumlah SKS</th>
			 </tr>
			 <tr>
			 	<th>PS Sendiri</th>
			 	<th>PS Lain, PT Sendiri</th>
			 	<th>PT Lain</th>
			 	<th>PS Sendiri</th>
			 	<th>PT Lain</th>
			 </tr>
		</thead>
		<tbody>
			<?php 
				$no=1; 
				foreach ($data as $d ) { 
			?>
			<tr>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['NAMA_DOSEN']; ?></td>
			 	<td><?php echo $d['SKS_PSS']; ?></td>
			 	<td><?php echo $d['SKS_PSL_PTS']; ?></td>
			 	<td><?php echo $d['SKS_PTL']; ?></td>
			 	<td><?php echo $d['SKS_PENELITIAN']; ?></td>
			 	<td><?php echo $d['SKS_PP_MAS']; ?></td>
			 	<td><?php echo $d['SKS_MAN_PTS']; ?></td>
			 	<td><?php echo $d['SKS_MAN_PTL']; ?></td>
			 	<td><?php echo $d['total']; ?></td>
			 </tr>
			 <?php } ?>

			 
			 <tr>
			 	<td colspan="2">Jumlah</td>
			 	<?php 
					foreach ($hitung as $h ) { 
			  	?>
			 	<td><?php echo $h['jml']; ?></td>
			 	<?php } ?>
			 	<?php 
					foreach ($pt as $p ) { 
			  	?>
			 	<td><?php echo $p['jml']; ?></td>
			 	<?php } ?>
			 	<?php 
					foreach ($lain as $l ) { 
			  	?>
			 	<td><?php echo $l['jml']; ?></td>
			 	<?php } ?>
			 	<?php 
					foreach ($penelitian as $p ) { 
			  	?>
			 	<td><?php echo $p['jml']; ?></td>
			 	<?php } ?>
			 	<?php 
					foreach ($pengabdian as $p ) { 
			  	?>
			 	<td><?php echo $p['jml']; ?></td>
			 	<?php } ?>
			 	<?php 
					foreach ($jumsks as $j ) { 
			  	?>
			 	<td><?php echo $j['jml']; ?></td>
			 	<?php } ?>
			 	<?php 
					foreach ($manptlain as $man ) { 
			  	?>
			 	<td><?php echo $man['jml']; ?></td>
			 	<?php } ?>
			 	<?php 
					foreach ($totsks as $tot ) { 
			  	?>
			 	<td><?php echo $tot['jml']; ?></td>
			 	<?php } ?>
			 </tr>
			 
			  <tr>
			 	<td colspan="2">Rata-rata</td>
			 	<?php 
					foreach ($rata as $r ) { 
			  	?>
			 	<td><?php echo $r['rata']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($prlain as $pr ) { 
			  	?>
			 	<td><?php echo $pr['rata']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($ptlain as $pt ) { 
			  	?>
			 	<td><?php echo $pt['rata']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($ratapenelitian as $rp ) { 
			  	?>
			 	<td><?php echo $rp['rata']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($pengmas as $peng ) { 
			  	?>
			 	<td><?php echo $peng['rata']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($rataman as $m ) { 
			  	?>
			 	<td><?php echo $m['rata']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($manlain as $ml ) { 
			  	?>
			 	<td><?php echo $ml['rata']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($ratajumsks as $ratasks ) { 
			  	?>
			 	<td><?php echo $ratasks['rata']; ?></td>
			 	<?php } ?>
			 	
				</tr>
			</tbody>
		</tbody>
		</table>
