<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.1.1.2 : PENGGUNAAN DANA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.1.1.2 : PENGGUNAAN DANA</p>
<table border="1" width="50%">
		<thead>
			<tr>
				 <th rowspan="2">No.</th>
				 <th rowspan="2">Jenis Penggunaan</th>
				 <th colspan="3"><center>Jumlah Dana (juta rupiah)</center></th>
				 <th rowspan="2"><center>Jumlah</center></th>
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
			 	<?php 
			 		foreach ($dana1 as $d) {
			 	 ?>
			 	 <td><?php echo $d['ts_2'] ?></td>
			 	 <td><?php echo $d['ts_1'] ?></td>
			 	 <td><?php echo $d['ts'] ?></td>
			 	 <td><?php echo $d['jumlah1'] ?></td>
			 	 <?php } ?>
			 </tr>
			 <tr>
			 	<td>2</td>
			 	<td>Penelitian</td>
			 	<?php 
			 		foreach ($dana2 as $d) {
			 	 ?>
			 	 <td><?php echo $d['ts_2'] ?></td>
			 	 <td><?php echo $d['ts_1'] ?></td>
			 	 <td><?php echo $d['ts'] ?></td>
			 	 <td><?php echo $d['jumlah2'] ?></td>
			 	 <?php } ?>
			 </tr>
			 <tr>
			 	<td>3</td>
			 	<td>Pengabdian kepada Masyarakat</td>
			 	<?php 
			 		foreach ($dana3 as $d) {
			 	 ?>
			 	 <td><?php echo $d['ts_2'] ?></td>
			 	 <td><?php echo $d['ts_1'] ?></td>
			 	 <td><?php echo $d['ts'] ?></td>
			 	 <td><?php echo $d['jumlah3'] ?></td>
			 	 <?php } ?>
			 </tr>
			  <tr>
			 	<td colspan="2"><center>Jumlah Dana Operasional</center></td>
			 	<?php 
			 		foreach ($jmldanaopr as $d) {
			 	 ?>
			 	 <td><?php echo $d['jmlopr2'] ?></td>
			 	 <td><?php echo $d['jmlopr1'] ?></td>
			 	 <td><?php echo $d['jmlopr'] ?></td>
			 	 <td><?php echo $d['totalopr'] ?></td>
			 	 <?php } ?>
			 </tr>
			 <tr>
			 	<td>4</td>
			 	<td>Investasi Prasarana</td>
			 	<?php 
			 		foreach ($dana4 as $d) {
			 	 ?>
			 	 <td><?php echo $d['ts_2'] ?></td>
			 	 <td><?php echo $d['ts_1'] ?></td>
			 	 <td><?php echo $d['ts'] ?></td>
			 	 <td><?php echo $d['jumlah4'] ?></td>
			 	 <?php } ?>
			 </tr>
			 <tr>
			 	<td>5</td>
			 	<td>Investasi Sarana</td>
			 	<?php 
			 		foreach ($dana5 as $d) {
			 	 ?>
			 	 <td><?php echo $d['ts_2'] ?></td>
			 	 <td><?php echo $d['ts_1'] ?></td>
			 	 <td><?php echo $d['ts'] ?></td>
			 	 <td><?php echo $d['jumlah5'] ?></td>
			 	 <?php } ?>
			 </tr>
			  <tr>
			 	<td>6</td>
			 	<td>Investasi SDM</td>
			 	<?php 
			 		foreach ($dana6 as $d) {
			 	 ?>
			 	 <td><?php echo $d['ts_2'] ?></td>
			 	 <td><?php echo $d['ts_1'] ?></td>
			 	 <td><?php echo $d['ts'] ?></td>
			 	 <td><?php echo $d['jumlah6'] ?></td>
			 	 <?php } ?>
			 </tr>
			 <tr>
			 	<td colspan="2"><center>Jumlah Dana Investasi</center></td>
			 	<?php 
			 		foreach ($jmldanainv as $d) {
			 	 ?>
			 	 <td><?php echo $d['jmlinv2'] ?></td>
			 	 <td><?php echo $d['jmlinv1'] ?></td>
			 	 <td><?php echo $d['jmlinv2'] ?></td>
			 	 <td><?php echo $d['totalinv'] ?></td>
			 	 <?php } ?>
			 </tr>
			 <tr>
			 	<td colspan="2"><center>Jumlah Dana (Operasional + Investasi)</center></td>
			 	<?php 
			 		foreach ($jmldanagab as $d) {
			 	 ?>
			 	 <td><?php echo $d['jmlgab2'] ?></td>
			 	 <td><?php echo $d['jmlgab1'] ?></td>
			 	 <td><?php echo $d['jmlgab'] ?></td>
			 	 <td><?php echo $d['totalgab'] ?></td>
			 	 <?php } ?>
			 </tr>
		</tbody>
	</table>	