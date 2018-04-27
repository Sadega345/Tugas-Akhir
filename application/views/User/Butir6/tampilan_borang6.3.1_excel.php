<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th>Ruang Kerja Dosen</th>
				 <th>Jumlah Ruang</th>
				 <th>Jumlah Luas(m2)</th>
			 </tr>
		</thead>
		<tbody>
			 <tr>
			 	<td>Satu ruang untuk lebih dari 4 dosen</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>Satu ruang untuk 3-4 dosen</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			  <tr>
			 	<td>Satu ruang untuk 2 dosen</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>Satu ruang untuk 1 dosen (bukan pejabat struktural)</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td colspan="2">Total</td>
			 	<?php 
					foreach ($totluas as $d ) { 
			 	?>
			 	<td><?php echo $d['Tot_Luas']; ?></td>
			 <?php } ?>
			 </tr>
		</tbody>
	</table>
