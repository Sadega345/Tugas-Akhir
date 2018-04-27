<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">No</th>
				 <th rowspan="2">Nama Dosen Tetap</th>
				 <th rowspan="2">Kode Mata Kuliah</th>
				 <th rowspan="2">Nama Mata Kuliah</th>
				 <th rowspan="2">Jumlah SKS</th>
				 <th colspan="2">Jumlah Pertemuan</th>
			 </tr>
			 <tr>
			 	<th>Direncanakan</th>
			 	<th>Dilaksanakan</th>
			 </tr>
			 <tr align="center">
			 	<td>(1)</td>
			 	<td>(2)</td>
			 	<td>(3)</td>
			 	<td>(4)</td>
			 	<td>(5)</td>
			 	<td>(6)</td>
			 	<td>(7)</td>
			 </tr>
		</thead>
		<tbody>
			 <tr>
				<?php 
					$no=1; 
					foreach ($data as $d ) { 
				?>
				 	<td><?php echo $no++; ?></td>
				 	<td><?php echo $d['nama_dosen']; ?></td>
				 	<td><?php echo $d['kode_mk']; ?></td>
				 	<td><?php echo $d['nama_mk']; ?></td>
				 	<td><?php echo $d['jml_sks']; ?></td>
				 	<td><?php echo $d['jp_rencana']; ?></td>
				 	<td><?php echo $d['jp_dilaksanakan']; ?></td>
				 </tr>
				 <?php } ?>

			 <tr>
			 	<td colspan="5"><center>Jumlah</center></td>
			 	<?php 
			 		foreach ($total as $tot ) {
			 	 ?>
			 	<td><?php echo $tot['total_rencana']; ?></td>
			 	<?php } ?>

			 	<?php 
			 		foreach ($totdilaksanakan as $totlaksana ) {
			 	 ?>
			 	<td><?php echo $totlaksana['total_laksana']; ?></td>
			 	<?php } ?>
			 </tr>
		</tbody>
	</table>
