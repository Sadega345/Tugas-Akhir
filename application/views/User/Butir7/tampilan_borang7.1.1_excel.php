<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 7.1.1 : PENELITIAN DOSEN TETAP.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 7.1.1 : PENELITIAN DOSEN TETAP</p>
<table border="1" width="50%">
<thead>
								<tr>
									 <th bgcolor="#D3D3D3">Sumber Pembiayaan</th>
									 <th bgcolor="#D3D3D3">TS-2</th>
									 <th bgcolor="#D3D3D3">TS-1</th>
									 <th bgcolor="#D3D3D3">TS</th>
									 <th bgcolor="#D3D3D3">Jumlah</th>
								 </tr>

							</thead>
							<tbody>
							<?php 
								foreach ($data1 as $d ) { 
							?>
							<tr>
								<td bgcolor="#D3D3D3"><?php echo $d['sumber_pembiayaan']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_2']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_1']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['jml']; ?></td>
							</tr>
							<?php } ?>

							<?php 
								foreach ($data2 as $d ) { 
							?>
							<tr>
								<td bgcolor="#D3D3D3"><?php echo $d['sumber_pembiayaan']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_2']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_1']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['jml']; ?></td>
							</tr>
							<?php } ?>

							<?php 
								foreach ($data3 as $d ) { 
							?>
							<tr>
								<td bgcolor="#D3D3D3"><?php echo $d['sumber_pembiayaan']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_2']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_1']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['jml']; ?></td>
							</tr>
							<?php } ?>

							<?php 
								foreach ($data4 as $d ) { 
							?>
							<tr>
								<td bgcolor="#D3D3D3"><?php echo $d['sumber_pembiayaan']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_2']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_1']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['jml']; ?></td>
							</tr>
							<?php } ?>

							<?php 
								foreach ($data5 as $d ) { 
							?>
							<tr>
								<td bgcolor="#D3D3D3"><?php echo $d['sumber_pembiayaan']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_2']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts_1']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['ts']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['jml']; ?></td>
							</tr>
							<?php } ?>


							<tr>
							 	<th bgcolor="#D3D3D3">Jumlah</th>
							 	<!-- TS2 -->
							 	<?php 
								
									foreach ($totTs2 as $ts2 ) { 
								?>
							 	<td bgcolor="#FFFF00"><?php echo $ts2['TS_2']; ?></td>
							 	<?php } ?>

							 	<!-- TS1 -->
							 	<?php 
								
									foreach ($totTs1 as $ts1 ) { 
								?>
							 	<td bgcolor="#FFFF00"><?php echo $ts1['TS_1']; ?></td>
							 	<?php } ?>

							 	<!-- TS -->
							 	<?php 
								
									foreach ($totTs as $ts ) { 
								?>
							 	<td bgcolor="#FFFF00"><?php echo $ts['TS']; ?></td>
							 	<?php } ?>

							 	<!--Jumlah-->
							 	<?php 
							 		foreach ($jml as $j) {
							 	 ?>
							 	 <td bgcolor="#7FFF00"><?php echo $j['jml']; ?></td>
							 	<?php } ?>
							 </tr>
							</tbody>
	</table>

