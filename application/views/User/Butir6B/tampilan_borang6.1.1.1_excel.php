<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.1.1.1 : PEMBIAYAAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.1.1.1 : PEMBIAYAAN</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Sumber Dana</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jenis Dana</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>Jumlah Dana (juta rupiah)</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Total</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>TS-2</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS-1</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS</center></th>
								 </tr>
							</thead>
							<tbody>

							<tr>
							 	<td rowspan="4" bgcolor="#D3D3D3">Usaha Sendiri</td>
							 	<?php
									foreach ($dana1 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['jenis_dana'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['total1'] ?></td>
								<?php } ?>	 
							 </tr>
							 <tr>
							 	
							 	<?php
									foreach ($dana2 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['jenis_dana'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['total2'] ?></td>
								<?php } ?>
							 </tr>
							 <tr>
							 	
							 	<?php
									foreach ($dana3 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['jenis_dana'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['total3'] ?></td>
								<?php } ?>
							 </tr>
							 <tr>
							 	<td bgcolor="#7FFF00"><center><strong>Jumlah dana dari usaha sendiri</strong></center></td>
							 	<?php
									foreach ($jml1 as $a ) { 
								?>
								<td bgcolor="#7FFF00"><?php echo $a['jum2'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['jum1'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['jum'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['totals1'] ?></td>
								<?php } ?>
							 </tr>
							  <tr>
							 	<td rowspan="4" bgcolor="#D3D3D3">Mahasiswa</td>
							 	
							 	<?php
									foreach ($dana4 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['jenis_dana'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['total4'] ?></td>
								<?php } ?>
							 </tr>
							 <tr>
							 	<?php
									foreach ($dana5 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['jenis_dana'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['total5'] ?></td>
								<?php } ?>
							 </tr>
							 <tr>
							 	
							 	<?php
									foreach ($dana6 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['jenis_dana'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['total6'] ?></td>
								<?php } ?>
							 </tr>
							 <tr>
							 	<td bgcolor="#7FFF00"><center><strong>Jumlah dana dari Mahasiswa</strong></center></td>
							 	<?php
									foreach ($jml2 as $a ) { 
								?>
								<td bgcolor="#7FFF00"><?php echo $a['jml2'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['jml1'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['jml'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['totals2'] ?></td>
								<?php } ?>
							 </tr>
							  <tr>
							 	<td rowspan="2" bgcolor="#D3D3D3">Pemerintah</td>
							 	<td bgcolor="#FFFF00"></td>
							 	<td bgcolor="#FFFF00"></td>
							 	<td bgcolor="#FFFF00"></td>
							 	<td bgcolor="#FFFF00"></td>
							 	<td bgcolor="#FFFF00"></td>
							 	
							 </tr>
							<tr>
							 	<td bgcolor="#7FFF00"><center><strong>Jumlah dana dari Pemerintah</strong></center></td>
							 	<td bgcolor="#7FFF00"></td>
							 	<td bgcolor="#7FFF00"></td>
							 	<td bgcolor="#7FFF00"></td>
							 	<td bgcolor="#7FFF00"></td>
							 </tr>
							 <tr>
							 	<td rowspan="4" bgcolor="#D3D3D3">Sumber Lain</td>
							 	
							 	<?php
									foreach ($dana7 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['jenis_dana'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['total7'] ?></td>
								<?php } ?>
							 </tr>
							 <tr>
							 	
							 	<?php
									foreach ($dana8 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['jenis_dana'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['total8'] ?></td>
								<?php } ?>
							 </tr>
							 <tr>
							 	
							 	<?php
									foreach ($dana9 as $a ) { 
								?>
								<td bgcolor="#FFFF00"><?php echo $a['jenis_dana'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_2'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts_1'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['ts'] ?></td>
								<td bgcolor="#FFFF00"><?php echo $a['total9'] ?></td>
								<?php } ?>
							 </tr>
							 <tr>
							 	<td bgcolor="#7FFF00">Jumlah dana dari sumber lain</td>
							 	<?php
									foreach ($jml4 as $a ) { 
								?>
								<td bgcolor="#7FFF00"><?php echo $a['jumlah2'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['jumlah1'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['jumlah'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['totals4'] ?></td>
								<?php } ?>
							 </tr>
							<tr>
							 	<td colspan="2" bgcolor="#D3D3D3"><center><strong>Total*</strong></center></td>
							 	 <?php
									foreach ($total as $a ) { 
								?>
								<td bgcolor="#7FFF00"><?php echo $a['total1'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['total2'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['total3'] ?></td>
								<td bgcolor="#7FFF00"><?php echo $a['totals'] ?></td>
								<?php } ?>
							 </tr>
							</tbody>
	</table>

