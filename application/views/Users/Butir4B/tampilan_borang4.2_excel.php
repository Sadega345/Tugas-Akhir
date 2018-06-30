<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.2 : TENAGA KEPENDIDIKAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 4.2 : TENAGA KEPENDIDIKAN</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2"><center>No.</center></th>
									 <th rowspan="2"><center>Jenis Tenaga Kependidikan</center></th>
									 <th colspan="8"><center>Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir</center></th>
									 <th rowspan="2"><center>Unit Kerja</center></th>
								 </tr>
								 <tr>
								 	<td><center>S3</center></td>
								 	<td><center>S2</center></td>
								 	<td><center>S1</center></td>
								 	<td><center>D4</center></td>
								 	<td><center>D3</center></td>
								 	<td><center>D2</center></td>
								 	<td><center>D1</center></td>
								 	<td><center>SMA/SMK</center></td>
								 </tr>
							</thead>
							<tbody>
							<?php 
							 	$no=1;
							 	foreach ($data as $d) {
							?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $d['jns_tng_kepend']; ?></td>
								<td><?php echo $d['s3']; ?></td>
								<td><?php echo $d['s2']; ?></td>
								<td><?php echo $d['s1']; ?></td>
								<td><?php echo $d['d4']; ?></td>
								<td><?php echo $d['d3']; ?></td>
								<td><?php echo $d['d2']; ?></td>
								<td><?php echo $d['d1']; ?></td>
								<td><?php echo $d['sma']; ?></td>
								<td><?php echo $d['unit_kerja']; ?></td>
							 </tr>
							 <?php } ?>
							 <tr>
							 	<td colspan="2">Total</td>
							 	<?php 
							 		foreach ($total as $d) {
							 	 ?>
							 	<td><?php echo $d['totals3']; ?></td>
								<td><?php echo $d['totals2']; ?></td>
								<td><?php echo $d['totals1']; ?></td>
								<td><?php echo $d['totald4']; ?></td>
								<td><?php echo $d['totald3']; ?></td>
								<td><?php echo $d['totald2']; ?></td>
								<td><?php echo $d['totald1']; ?></td>
								<td><?php echo $d['totalsma']; ?></td>
								<?php } ?>
							 </tr>	
							</tbody>
	</table>