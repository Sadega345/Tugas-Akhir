<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Butir 3.1.2 : MAHASISWA DAN LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 3.1.2 : MAHASISWA DAN LULUSAN</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2" bgcolor="#D3D3D3">No</th>
				 <th rowspan="2" bgcolor="#D3D3D3"></th>
				 <th rowspan="2" bgcolor="#D3D3D3">Total Mahasiswa pada Fakultas**</th>
				 <th colspan="2" bgcolor="#D3D3D3">Jumlah Mahasiswa pada PS: *</th>
			 </tr>
			  <tr>
								 <?php 
								 	$no=1;
								 	$num=4;
								 	$num++;
								 	foreach ($prodi as $p) {
								 ?>
								 	<th bgcolor="#D3D3D3"><center>PS- <?php echo $no++; ?> <br> <?php echo $p['jurusan'] ?></center></th>
								 <?php } ?>
								 	<th align="center" bgcolor="#D3D3D3">Total Mahasiswa</th>
								 </tr>

		</thead>
		<tbody>
							<tr>
							 	<td>1</td>
							 	<td>Mhs. baru bukan transfer</td>
							 	<?php 
							 		foreach ($total1 as $t) {
							 	 ?>
							 	 <td bgcolor="#9ACD32"><?php echo $t['total1'] ?></td>
							 	 <?php } ?>
							 	 <?php 
							 	 	foreach ($data1 as $d) {
							 	  ?>
							 	 <td bgcolor="#FFFF00"><?php echo $d['j_maba_reg_bkn_trf']?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($total1 as $t) {
							 	 ?>
							 	 <td bgcolor="#9ACD32"><?php echo $t['total1'] ?></td>

							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>2</td>
							 	<td>Mhs. baru transfer</td>
							 	<?php 
							 		foreach ($total2 as $t) {
							 	 ?>
							 	 <td bgcolor="#9ACD32"><?php echo $t['total2'] ?></td>
							 	 <?php } ?>
							 	 <?php 
							 	 	foreach ($data2 as $d) {
							 	  ?>
							 	 <td bgcolor="#FFFF00"><?php echo $d['j_maba_trf']?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($total2 as $t) {
							 	 ?>
							 	 <td bgcolor="#9ACD32"><?php echo $t['total2'] ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>3</td>
							 	<td>Total mhs. regular (Student Body)</td>
							 	<?php 
							 		foreach ($total3 as $t) {
							 	 ?>
							 	 <td bgcolor="#9ACD32"><?php echo $t['total3'] ?></td>
							 	 <?php } ?>
							 	 <?php 
							 	 	foreach ($data3 as $d) {
							 	  ?>
							 	 <td bgcolor="#FFFF00"><?php echo $d['j_tot_reg_bkn_trf']?></td>
							 	 <?php } ?>
							 	 <?php 
							 		foreach ($total3 as $t) {
							 	 ?>
							 	 <td bgcolor="#9ACD32"><?php echo $t['total3'] ?></td>
							 	 <?php } ?>
							 </tr>
							</tbody>
		</table>