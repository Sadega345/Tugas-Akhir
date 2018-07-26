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
					 <th rowspan="2"><center>No</center></th>
					 <th rowspan="2" colspan="2"><center>Hal</center></th>
					 <th rowspan="2"><center>Total Mahasiswa pada Fakultas**</center></th>
					 <th><center>Jumlah Mahasiswa pada PS: *</center></th>
				 </tr>
				 <tr>
				 <?php 
				 	$no=1;
				 	foreach ($prodi as $p) {
				 ?>
				 	<th><center>PS- <?php echo $no++; ?> <br> <?php echo $p['jurusan'] ?></center></th>
				 	
				 <?php } ?>
				 </tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="3">1</td>
					<td rowspan="3">Program Reguler</td>
					<td>1. Mhs. baru bukan transfer</td>
					<?php 
						foreach ($total1 as $t){
					 ?>
					<td><?php echo $t['total1']; ?></td>
					<?php } ?>
					<?php 
						foreach ($data1 as $d) {
					 ?>
					<td><?php echo $d['j_maba_reg_bkn_trf']; ?></td>
					<?php } ?>
				</tr>
				<tr>
					<td>2. Mhs. baru transfer</td>
					<?php foreach ($total2 as $t) {
					 ?>
					<td><?php echo $t['total2']; ?></td>
					<?php } ?>
					<?php foreach ($data2 as $d) {
					 ?>
					<td><?php echo $d['j_maba_trf']; ?></td>
					<?php } ?>
				</tr>
				<tr>
					<td>3. Total mhs. regular (Student Body)</td>
					<?php foreach ($total3 as $t) {
					 ?>
					<td><?php echo $t['total3']; ?></td>
					<?php } ?>
					<?php foreach ($data3 as $d) {
					 ?>
					<td><?php echo $d['j_tot_reg_bkn_trf']; ?></td>
					<?php } ?>
				</tr>
				<tr>
					<td rowspan="3">2</td>
					<td rowspan="3">Program Non Reguler Reguler</td>
					<td>1. Mhs. baru bukan transfer</td>
					<?php 
						foreach ($totalnonreg1 as $t){
					 ?>
					<td><?php echo $t['totalnonreg1']; ?></td>
					<?php } ?>
					<?php 
						foreach ($listnonreg1 as $d) {
					 ?>
					<td><?php echo $d['j_tot_reg_bkn_trf']; ?></td>
					<?php } ?>
				</tr>
				<tr>
					<td>2. Mhs. baru transfer</td>
					<?php foreach ($totalnonreg2 as $t) {
					 ?>
					<td><?php echo $t['totalnonreg2']; ?></td>
					<?php } ?>
					<?php foreach ($listnonreg2 as $d) {
					 ?>
					<td><?php echo $d['j_maba_trf']; ?></td>
					<?php } ?>
				</tr>
				<tr>
					<td>3. Total mhs. regular (Student Body)</td>
					<?php foreach ($totalnonreg3 as $t) {
					 ?>
					<td><?php echo $t['totalnonreg3']; ?></td>
					<?php } ?>
					<?php foreach ($listnonreg3 as $d) {
					 ?>
					<td><?php echo $d['j_tot_reg_bkn_trf']; ?></td>
					<?php } ?>
				</tr>
			</tbody>
		</table>