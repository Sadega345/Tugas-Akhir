<?php 

header("Content-type: application/octet-stream");

// header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">No</th>
				 <th rowspan="2">Jenis Penggunaan</th>
				 <th colspan="3">Penggunaan (Juta Rupiah)</th>
			 </tr>
			 <tr>
			 	<th>TS-2</th>
			 	<th>TS-1</th>
			 	<th>TS</th>
			 </tr>
		</thead>
		<tbody>
			 <tr>
			 	<td>1</td>
			 	<td>Pendidikan</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>2</td>
			 	<td>Penelitian</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>3</td>
			 	<td>Pengabdian Kepada Masyarakat</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td colspan="2">Jumlah Dana Operasional</td>
			 	<?php 
			 		foreach ($totsp2 as $d ) { 
			 	 ?>
			 	<td><?php echo $d['Tot_PS2']; ?></td>
			 	<?php } ?>
			 	<?php 
			 		foreach ($totps1 as $d ) { 
			 	 ?>
			 	<td><?php echo $d['Tot_PS1']; ?></td>
			 	<?php } ?>
			 	<?php 
			 		foreach ($totps as $d ) { 
			 	 ?>
			 	<td><?php echo $d['Tot_PS']; ?></td>
			 	<?php } ?>
			 </tr>
			  <tr>
			 	<td>4</td>
			 	<td>Investasi Prasarana</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>5</td>
			 	<td>Investasi Sarana</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>6</td>
			 	<td>Investasi SDM</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>7</td>
			 	<td>Lain-lain</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			  <tr>
			 	<td colspan="2">Jumlah Dana untuk Investasi</td>
			 	<?php 
			 		foreach ($totinves2 as $d ) { 
			 	 ?>
			 	<td><?php echo $d['Tot_PS2']; ?></td>
			 	<?php } ?>
			 	<?php 
			 		foreach ($totinves1 as $d ) { 
			 	 ?>
			 	<td><?php echo $d['Tot_PS1']; ?></td>
			 	<?php } ?>
			 	<?php 
			 		foreach ($totinvests as $d ) { 
			 	 ?>
			 	<td><?php echo $d['Tot_PS']; ?></td>
			 	<?php } ?>
			 </tr>
			  <tr>
			 	<td colspan="2">Jumlah Dana (Operasional+Investasi)</td>
			 	<?php 
			 		foreach ($totdana2 as $d ) { 
			 	 ?>
			 	<td><?php echo $d['Tot_TS2']; ?></td>
			 	<?php } ?>
			 	<?php 
			 		foreach ($totdana1 as $d ) { 
			 	 ?>
			 	<td><?php echo $d['Tot_TS1']; ?></td>
			 	<?php } ?>
			 	<?php 
			 		foreach ($totdanats as $d ) { 
			 	 ?>
			 	<td><?php echo $d['Tot_TS']; ?></td>
			 	<?php } ?>
			 </tr>
			  <tr>
			 	<td colspan="2">Jumlah Mahasiswa Aktif (Student Body)</td>
			 	<td>201</td>
			 	<td>139</td>
			 	<td>139</td>
			 </tr>
		</tbody>
		</table>