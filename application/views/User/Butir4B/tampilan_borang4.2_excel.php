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
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No.</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jenis Tenaga Kependidikan</center></th>
									 <th colspan="8" bgcolor="#D3D3D3"><center>Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Unit Kerja</center></th>
								 </tr>
								 <tr>
								 	<td bgcolor="#D3D3D3"><center>S3</center></td>
								 	<td bgcolor="#D3D3D3"><center>S2</center></td>
								 	<td bgcolor="#D3D3D3"><center>S1</center></td>
								 	<td bgcolor="#D3D3D3"><center>D4</center></td>
								 	<td bgcolor="#D3D3D3"><center>D3</center></td>
								 	<td bgcolor="#D3D3D3"><center>D2</center></td>
								 	<td bgcolor="#D3D3D3"><center>D1</center></td>
								 	<td bgcolor="#D3D3D3"><center>SMA/SMK</center></td>
								 </tr>
							</thead>
							<tbody>
							<?php 
							 	$no=1;
							 	foreach ($data as $d) {
							?>
							<tr>
								<td bgcolor="#D3D3D3"><?php echo $no++; ?></td>
								<td bgcolor="#D3D3D3"><?php echo $d['jns_tng_kepend']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['s3']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['s2']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['s1']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['d4']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['d3']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['d2']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['d1']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['sma']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['unit_kerja']; ?></td>
							 </tr>
							 <?php } ?>
							 <tr>
							 	<th colspan="2" bgcolor="#D3D3D3">Total</th>
							 	<?php 
							 		foreach ($total as $d) {
							 	 ?>
							 	<th bgcolor="#7FFF00"><?php echo $d['totals3']; ?></th>
								<th bgcolor="#7FFF00"><?php echo $d['totals2']; ?></th>
								<th bgcolor="#7FFF00"><?php echo $d['totals1']; ?></th>
								<th bgcolor="#7FFF00"><?php echo $d['totald4']; ?></th>
								<th bgcolor="#7FFF00"><?php echo $d['totald3']; ?></th>
								<th bgcolor="#7FFF00"><?php echo $d['totald2']; ?></th>
								<th bgcolor="#7FFF00"><?php echo $d['totald1']; ?></th>
								<th bgcolor="#7FFF00"><?php echo $d['totalsma']; ?></th>
								<?php } ?>
							 </tr>	
							</tbody>
	</table>