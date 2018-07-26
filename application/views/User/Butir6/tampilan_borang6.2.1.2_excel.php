<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA</p>
<table border="1" width="50%">
							<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jenis Penggunaan</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>Penggunaan (Juta Rupiah)</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>TS-2</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS-1</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS</center></th>
								 </tr>
							</thead>
							<tbody>
							<tr>
								<td>1</td>
								<td>Pendidikan</td>
								<?php
									foreach ($data1 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<?php } ?>	 
							</tr>
							<tr>
								<td>2</td>
								<td>Penelitian</td>
								<?php
									foreach ($data2 as $b ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $b['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $b['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $b['ts'] ?></td>
								<?php } ?>	
							</tr>
							<tr>
								<td>3</td>
								<td>Pengabdian kepada Masyarakat</td>
								<?php
									foreach ($data3 as $c ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $c['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $c['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $c['ts'] ?></td>
								<?php } ?>	
							</tr>
							<tr>
								<td colspan="2"><center>Jumlah Dana Operasional</center></td>
								<?php 
									foreach ($jmlopr2 as $j2 ) { 
								?>
							 	<td bgcolor="#7FFF00"><?php echo $j2['jmlopr2']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($jmlopr1 as $j1 ) { 
								?>
							 	<td bgcolor="#7FFF00"><?php echo $j1['jmlopr1']; ?></td>
							 	<?php } ?>

								<?php 
									foreach ($jmlopr as $j ) { 
								?>
							 	<td bgcolor="#7FFF00"><?php echo $j['jmlopr']; ?></td>
							 	<?php } ?>
							</tr>
							<tr>
								<td>4</td>
								<td>Investasi Prasarana</td>
								<?php
									foreach ($data4 as $e ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $e['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $e['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $e['ts'] ?></td>
								<?php } ?>	
							</tr>
							<tr>
								<td>5</td>
								<td>Investasi Sarana</td>
								<?php
									foreach ($data5 as $f ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $f['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $f['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $f['ts'] ?></td>
								<?php } ?>	
							</tr>
							<tr>
								<td>6</td>
								<td>Investasi SDM</td>
								<?php
									foreach ($data6 as $g ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $g['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $g['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $g['ts'] ?></td>
								<?php } ?>	
							</tr>
							<tr>
								<td>7</td>
								<td>Lain-Lain</td>
								<?php
									foreach ($data7 as $h ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $h['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $h['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $h['ts'] ?></td>
								<?php } ?>	
							</tr>
							<tr>
								<td colspan="2"><center>Jumlah Dana untuk Investasi</center></td>
								<?php 
									foreach ($jmlinv2 as $j2 ) { 
								?>
							 	<td bgcolor="#7FFF00"><?php echo $j2['jmlinv2']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($jmlinv1 as $j1 ) { 
								?>
							 	<td bgcolor="#7FFF00"><?php echo $j1['jmlinv1']; ?></td>
							 	<?php } ?>

								<?php 
									foreach ($jmlinv as $j ) { 
								?>
							 	<td bgcolor="#7FFF00"><?php echo $j['jmlinv']; ?></td>
							 	<?php } ?>
							</tr>
							<tr>
								<td colspan="2"><center>Jumlah Dana (Operasional + Investasi)</center></td>
								<?php 
									foreach ($jmloprinv2 as $j2 ) { 
								?>
							 	<td bgcolor="#7FFF00"><?php echo $j2['jmloprinv2']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($jmloprinv1 as $j1 ) { 
								?>
							 	<td bgcolor="#7FFF00"><?php echo $j1['jmloprinv1']; ?></td>
							 	<?php } ?>

								<?php 
									foreach ($jmloprinv as $j ) { 
								?>
							 	<td bgcolor="#7FFF00"><?php echo $j['jmloprinv']; ?></td>
							 	<?php } ?>
							</tr>
							<tr>
								<td colspan="2"><center>Jumlah Mahasiswa Aktif (Student Body)</center></td>
								<?php 
									foreach ($jmlmhs2 as $j2 ) { 
								?>
							 	<td bgcolor="#D3D3D3"><?php echo $j2['jmlmhs2']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($jmlmhs1 as $j1 ) { 
								?>
							 	<td bgcolor="#D3D3D3"><?php echo $j1['jmlmhs1']; ?></td>
							 	<?php } ?>

								<?php 
									foreach ($jmlmhs as $j ) { 
								?>
							 	<td bgcolor="#D3D3D3"><?php echo $j['jmlmhs']; ?></td>
							 	<?php } ?>
							 	
							</tr>
							</tbody>
		</table>