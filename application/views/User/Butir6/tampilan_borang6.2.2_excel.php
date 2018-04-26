<?php 

header("Content-type: application/octet-stream");

// header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.2.2 : DANA UNTUK KEGIATAN PENELITIAN</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th>Tahun</th>
				 <th>Judul Penelitian</th>
				 <th>Sumber dan Jenis Data</th>
				 <th>Jumlah Dana* (dalam juta rupiah)</th>
			 </tr>
			 <tr align="center">
			 	<th>(1)</th>
			 	<th>(2)</th>
			 	<th>(3)</th>
			 	<th>(4)</th>
			 </tr>
		</thead>
		<tbody>
							
			<?php 
				
				foreach ($data as $d ) { 
			?>
			<tr>
			 	<td><?php echo $d['tahun']; ?></td>
			 	<td><?php echo $d['judul_penelitian']; ?></td>
			 	<td><?php echo $d['sumber_dana']; ?></td>
			 	<td><?php echo $d['jml_dana']; ?></td>
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
