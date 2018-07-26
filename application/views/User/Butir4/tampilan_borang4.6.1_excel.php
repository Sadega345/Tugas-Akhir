<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN</p>
<table border="1" width="50%">
							<thead>
								 <tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jenis Tenaga Kependidikan</center></th>
									 <th colspan="8" bgcolor="#D3D3D3"><center>Jumlah Tenaga Kependidikan dengan</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Unit Kerja</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>S3</center></th>
								 	<th bgcolor="#D3D3D3"><center>S2</center></th>
								 	<th bgcolor="#D3D3D3"><center>S1</center></th>
								 	<th bgcolor="#D3D3D3"><center>D4</center></th>
								 	<th bgcolor="#D3D3D3"><center>D3</center></th>
								 	<th bgcolor="#D3D3D3"><center>D2</center></th>
								 	<th bgcolor="#D3D3D3"><center>D1</center></th>
								 	<th bgcolor="#D3D3D3"><center>SMA/SMK</center></th>

								 </tr>
							</thead>
							<tbody>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
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
							 	<td bgcolor="#FFFF00"d><?php echo $d['unit_kerja']; ?></td>
							 </tr>
							 
							 <input type="hidden" name="kd_jns" value="<?php echo $d['kd_jns']; ?>">
							<?php } ?>
							 <tr>
							 	<td colspan="2" bgcolor="#D3D3D3"><strong>Total</strong></td>
							 	<?php 
									foreach ($tots3 as $s3 ) { 
								?>
							 	<td bgcolor="#90EE90"><?php echo $s3['tots3']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($tots2 as $s2 ) { 
								?>
							 	<td bgcolor="#90EE90"><?php echo $s2['tots2']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($tots1 as $s1 ) { 
								?>
							 	<td bgcolor="#90EE90"><?php echo $s1['tots1']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($totd4 as $d4 ) { 
								?>
							 	<td bgcolor="#90EE90"><?php echo $d4['totd4']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($totd3 as $d3 ) { 
								?>
							 	<td bgcolor="#90EE90"><?php echo $d3['totd3']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($totd2 as $d2 ) { 
								?>
							 	<td bgcolor="#90EE90"><?php echo $d2['totd2']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($totd1 as $d1 ) { 
								?>
							 	<td bgcolor="#90EE90"><?php echo $d1['totd1']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($totsma as $sma ) { 
								?>
							 	<td bgcolor="#90EE90"><?php echo $sma['totsma']; ?></td>
							 	<?php } ?>
							 	
							 	
							 </tr>
							</tbody>
	</table>
