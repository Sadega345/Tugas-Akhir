<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.4.1 : Pustaka.xls");

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
			 	<?php 
			 		foreach ($pustaka1 as $p) {
			 	 ?>
			 	 <td><?php echo $p['jenis_pustaka'] ?></td>
			 	 <td><?php echo $p['jml_judul'] ?></td>
			 	 <td><?php echo $p['jml_copy'] ?></td>
			 </tr>
			 <?php } ?>
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
