<?php 

header("Content-type: application/octet-stream");

// header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.3.4 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS  </p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">No</th>
				 <th rowspan="2">Nama Dosen Tetap</th>
				 <th rowspan="2">Bidang Keahlian</th>
				 <th rowspan="2">Kode Mata Kuliah</th>
				 <th rowspan="2">Nama Mata Kuliah</th>
				 <th rowspan="2">Jumlah Kelas</th>
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
			 	<td>(8)</td>
			 </tr>
		</thead>
		<tbody>
			<?php 
				$no=1; 
				foreach ($data as $d ) { 
			?>
			
			 <tr>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['nama_dosen']; ?></td>
			 	<td><?php echo $d['bid_keahlian']; ?></td>
			 	<td><?php echo $d['kode_mk']; ?></td>
			 	<td><?php echo $d['nama_mk']; ?></td>
			 	<td><?php echo $d['jum_kls']; ?></td>
			 	<td><?php echo $d['jp_rencana']; ?></td>
			 	<td><?php echo $d['jp_dilaksanakan']; ?></td>
			 </tr>
			 <?php } ?>
			 <?php 
			 	foreach ($jumlah as $jum) {
			 ?>
			 <tr>
			 	<td colspan="6"><center>Jumlah*</center></td>
			 	<td><?php echo $jum['jumper_d']; ?></td>
			 <?php } ?>
			 <?php 
			 	foreach ($jumlah2 as $jum2) {
			 ?>
			 	<td><?php echo $jum2['jumlahpertemuan_dilaksanakan']; ?></td>
			 <?php } ?>
			 </tr>

		</tbody>
	</table>
