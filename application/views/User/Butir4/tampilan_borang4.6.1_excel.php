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
				 <th rowspan="2">No</th>
				 <th rowspan="2">Jenis Tenaga Kependidikan</th>
				 <th colspan="8">Jumlah Tenaga Kependidikan dengan</th>
				 <th rowspan="2">Unit Kerja</th>
			 </tr>
			 <tr>
			 	<th>S3</th>
			 	<th>S2</th>
			 	<th>S1</th>
			 	<th>D4</th>
			 	<th>D3</th>
			 	<th>D2</th>
			 	<th>D1</th>
			 	<th>SMA/SMK</th>
			 </tr>
			 <tr align="center">
			 	<td>(1)</td>
			 	<td>(2)</td>
			 	<td>(3)</td>
			 	<td>(4)</td>
			 	<td>(5)</td>
			 	<td>(6)</td>
			 	<td>(7)</td>
			 	<td>(8)</td>
			 	<td>(9)</td>
			 	<td>(10)</td>
			 	<td>(11)</td>
			 </tr>
		</thead>
		<tbody>
			 <tr>
			 	<td>1</td>
			 	<td>Pustakawan*</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>2</td>
			 	<td>Laboran/Teknisi/Analisis/Operator/Programer</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>3</td>
			 	<td>Administrasi</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>4</td>
			 	<td>Lainnya</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td colspan="2">Total</td>
			 	<?php 
					foreach ($tots3 as $s3 ) { 
				?>
			 	<td><?php echo $s3['tots3']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($tots2 as $s2 ) { 
				?>
			 	<td><?php echo $s2['tots2']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($tots1 as $s1 ) { 
				?>
			 	<td><?php echo $s1['tots1']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($totd4 as $d4 ) { 
				?>
			 	<td><?php echo $d4['totd4']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($totd3 as $d3 ) { 
				?>
			 	<td><?php echo $d3['totd3']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($totd2 as $d2 ) { 
				?>
			 	<td><?php echo $d2['totd2']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($totd1 as $d1 ) { 
				?>
			 	<td><?php echo $d1['totd1']; ?></td>
			 	<?php } ?>

			 	<?php 
					foreach ($totsma as $sma ) { 
				?>
			 	<td><?php echo $sma['totsma']; ?></td>
			 	<?php } ?>
			 	
			 </tr>
		</tbody>
	</table>
