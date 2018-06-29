<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th>Tahun</th>
				 <th>Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
				 <th>Sumber dan Jenis Dana</th>
				 <th>Jumlah Dana (dalam juta rupiah)</th>
			 </tr>
		</thead>
		<tbody>			
			 <?php 
				
				foreach ($data as $d ) { 
			?>
			<tr>
			 	<td><?php echo $d['TAHUN']; ?></td>
			 	<td><?php echo $d['judul_kegiatan']; ?></td>
			 	<td><?php echo $d['SUMBER_DANA']; ?></td>
			 	<td><?php echo $d['JUMLAH_DANA']; ?></td>
			 </tr>
			 <?php } ?>
			 <tr>
			 	<td colspan="3">Total**</td>
			 <?php 
				foreach ($totdana as $d ) { 
			 ?>
			 	<td><?php echo $d['Tot_Dana']; ?></td>
			 <?php } ?>
			 </tr>
			</tbody>
		</table>
