<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.1.1 : SUMBER DAYA MANUSIA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.1.1 : SUMBER DAYA MANUSIA</p>
 <table border="1" width="50%">
<thead>
								<tr>
									 <th rowspan="2">No</th>
									 <th rowspan="2"><center>Hal</center></th>
									 <th rowspan="2"><center>Total di Unit Pengelola**</center></th>
									 <th><center>Jumlah Dosen yang bertugas pada PS: *</center></th>
								 </tr>
								 <tr>
								 <?php 
								 	$no=1;
								 	foreach ($prodi as $p) {
								  ?>
								 	<th><center>PS-<?php echo $no++; ?> <br><?php echo $p['prodi']; ?></center></th>
								 <?php } ?>
								 </tr>
							</thead>
							<tbody>
							<tr>
							 	<th>A</th>
							 	<th>Jabatan Fungsional :</th>
							 	 <td></td>
							 	 <td></td>
							 </tr>
							 <tr>
							 	<td>1</td>
							 	<td>Asisten Ahli</td>
							 	<?php 
							 		foreach ($total1 as $t) {
							 	 ?>
							 	 <td><?php echo $t['total']; ?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($data1 as $d) {
							 	 ?>
							 	 <td><?php echo $d['jml']; ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>2</td>
							 	<td>Lektor</td>
							 	<?php 
							 		foreach ($total2 as $t) {
							 	 ?>
							 	 <td><?php echo $t['total']; ?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($data2 as $d) {
							 	 ?>
							 	 <td><?php echo $d['jml']; ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>3</td>
							 	<td>Lektor Kepala</td>
							 	<?php 
							 		foreach ($total3 as $t) {
							 	 ?>
							 	 <td><?php echo $t['total']; ?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($data3 as $d) {
							 	 ?>
							 	 <td><?php echo $d['jml']; ?></td>
							 	 <?php } ?>
							 </tr>
							  <tr>
							 	<td>4</td>
							 	<td>Guru Besar/Profesor</td>
							 	<?php 
							 		foreach ($total4 as $t) {
							 	 ?>
							 	 <td><?php echo $t['total']; ?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($data4 as $d) {
							 	 ?>
							 	 <td><?php echo $d['jml']; ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td></td>
							 	<td><strong>Total</strong></td>
							 	<?php 
							 		foreach ($totala as $t) {
							 	 ?>
							 	 <td><?php echo $t['totala']; ?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($totalaps as $t) {
							 	 ?>
							 	 <td><?php echo $t['totalaps']; ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<th>B</th>
							 	<th>Pendidikan Tertinggi:</th>
							 	<td></td>
							 	<td></td>
							 </tr>
							  <tr>
							 	<td>1</td>
							 	<td>S1</td>
							 	<?php 
							 		foreach ($total5 as $t) {
							 	 ?>
							 	 <td><?php echo $t['total']; ?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($data5 as $d) {
							 	 ?>
							 	 <td><?php echo $d['jml']; ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>2</td>
							 	<td>S2/Profesi/Sp-1</td>
							 	<?php 
							 		foreach ($total6 as $t) {
							 	 ?>
							 	 <td><?php echo $t['total']; ?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($data6 as $d) {
							 	 ?>
							 	 <td><?php echo $d['jml']; ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>3</td>
							 	<td>S3/Sp-2</td>
							 	<?php 
							 		foreach ($total7 as $t) {
							 	 ?>
							 	 <td><?php echo $t['total']; ?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($data7 as $d) {
							 	 ?>
							 	 <td><?php echo $d['jml']; ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td></td>
							 	<td><strong>Total</strong></td>
							 	<?php 
							 		foreach ($totalb as $t) {
							 	 ?>
							 	 <td><?php echo $t['totalb']; ?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($totalbps as $t) {
							 	 ?>
							 	 <td><?php echo $t['totalbps']; ?></td>
							 	 <?php } ?>
							 </tr>
							</tbody>
		</table>