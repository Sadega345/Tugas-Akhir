<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.1.2 : SUMBER DAYA MANUSIA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 4.1.2 : SUMBER DAYA MANUSIA</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th><center>No</center></th>
									 <th><center>Hal</center></th>
									 <th><center>Total di Unit Pengelola**</center></th>
									 <?php 
									 	$no=1;
									 	foreach ($prodi as $p) {
									  ?>
									 <th><center>PS-<?php echo $no++; ?> <br><?php echo $p['prodi']; ?></center></th>
									 <?php } ?>
									 <th><center>Total di Institusi</center></th>
								 </tr>
							</thead>
							<tbody>
								<tr>
								 	<td>1</td>
								 	<td>Banyaknya dosen tugas belajar S2/Sp-1</td>
								 	<?php 
								 		foreach ($total1 as $t) {
								 	 ?>
								 	 <td><?php echo $t['total1'] ?></td>
								 	 <?php } ?>
								 	 <?php 
								 	 	foreach ($banyak1 as $j) {
								 	  ?>
								 	 <td><?php echo $j['banyak1'] ?></td>
								 	 <?php } ?>
								 	 <?php 
								 		foreach ($total1 as $t) {
								 	 ?>
								 	 <td><?php echo $t['total1'] ?></td>
								 	 <?php } ?>
								 </tr>
								  <tr>
								 	<td>2</td>
								 	<td>Banyaknya dosen tugas belajar S3/Sp-2</td>
								 	<?php 
								 		foreach ($total2 as $t) {
								 	 ?>
								 	 <td><?php echo $t['total2'] ?></td>
								 	 <?php } ?>
								 	 <?php 
								 	 	foreach ($banyak2 as $j) {
								 	  ?>
								 	 <td><?php echo $j['banyak2'] ?></td>
								 	 <?php } ?>
								 	 <?php 
								 		foreach ($total2 as $t) {
								 	 ?>
								 	 <td><?php echo $t['total2'] ?></td>
								 	 <?php } ?>
								 </tr>
							</tbody>
		</table>