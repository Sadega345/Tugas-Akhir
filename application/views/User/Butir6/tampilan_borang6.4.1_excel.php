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
									 <th bgcolor="#D3D3D3">Jenis Pustaka</th>
									 <th bgcolor="#D3D3D3">Jumlah Judul</th>
									 <th bgcolor="#D3D3D3">Jumlah Copy</th>
								 </tr>
							</thead>
							<tbody>
								<tr>
								 	<?php 
								 		foreach ($pustaka1 as $p) {
								 	 ?>
								 	 <td bgcolor="#FFFF00"><?php echo $p['jenis_pustaka'] ?></td>
								 	 <td bgcolor="#FFFF00"><?php echo $p['jml_judul'] ?></td>
								 	 <td bgcolor="#FFFF00"><?php echo $p['jml_copy'] ?></td>
								 </tr>
								 <?php } ?>
								 <tr>
								 	<th bgcolor="#D3D3D3"Total</th>
								 	<?php 
										foreach ($totjudul as $d ) { 
							 		?>
							 		<td bgcolor="#7FFF00"><?php echo $d['Tot_judul']; ?></td>
							 		<?php } ?>
								 	<?php 
										foreach ($totkopi as $d ) { 
							 		?>
							 		<td bgcolor="#7FFF00"><?php echo $d['Tot_Kopi']; ?></td>
							 		<?php } ?>
								 </tr>
							</tbody>
	</table>
