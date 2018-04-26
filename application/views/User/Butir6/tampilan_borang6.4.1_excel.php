<?php 

header("Content-type: application/octet-stream");

// header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 6.4.1 : Pustaka </p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th>Jenis Pustaka</th>
				 <th>Jumlah Judul</th>
				 <th>Jumlah Copy</th>
			 </tr>
		</thead>
		<tbody>
			 <tr>
			 	<td>Buku Teks dan handbook</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>Modul Praktikum / Praktek</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			  <tr>
			 	<td>Jurnal yang terakreditasi oleh lembaga resmi (Dikti. LIPI, dll).</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>Jurnal Internasional (termasuk e-journal)</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>Majalah Ilmiah</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			  <tr>
			 	<td>Prosiding</td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>Total</td>
			 	<?php 
					foreach ($totjudul as $d ) { 
		 		?>
		 		<td><?php echo $d['Tot_judul']; ?></td>
		 		<?php } ?>
			 	<?php 
					foreach ($totkopi as $d ) { 
		 		?>
		 		<td><?php echo $d['Tot_Kopi']; ?></td>
		 		<?php } ?>
			 </tr>
		</tbody>
	</table>
