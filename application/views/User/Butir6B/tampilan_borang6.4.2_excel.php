<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.4.2 : AKSESIBILITAS TIAP JENIS DATA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.4.2 : AKSESIBILITAS TIAP JENIS DATA</p>
<table border="1" width="50%">
		<thead>
								 <tr>
									 <th rowspan="2">Jenis Data</th>
									 <th colspan="4"><center>Sistem Pengolahan Data</center></th>
								 </tr>
								 <tr>
								 	<th>Secara Manual</th>
								 	<th>Dengan Komputer Tanpa Jaringan</th>
								 	<th>Dengan Komputer Jaringan Lokal (LAN)</th>
								 	<th>Dengan Komputer Jaringan Luas (WAN)</th>
								 </tr>
							</thead>
							<tbody>
							<tr>
							 	<td>Mahasiswa</td>
							 	<?php 
							 		foreach ($data1 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>Kartu Rencana Studi (KRS)</td>
							 	<?php 
							 		foreach ($data2 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>Jadwal Mata Kuliah</td>
							 	<?php 
							 		foreach ($data3 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>Nilai Mata Kuliah</td>
							 	<?php 
							 		foreach ($data4 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>Transkrip Akademik</td>
							 	<?php 
							 		foreach ($data5 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>	
							 <tr>
							 	<td>Lulusan</td>
							 	<?php 
							 		foreach ($data6 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>	
							 <tr>
							 	<td>Dosen</td>
							 	<?php 
							 		foreach ($data7 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>	
							 <tr>
							 	<td>Pegawai</td>
							 	<?php 
							 		foreach ($data8 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>Keuangan</td>
							 	<?php 
							 		foreach ($data9 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr>
							 	<td>Inventaris</td>
							 	<?php 
							 		foreach ($data10 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>
							  <tr>
							 	<td>Pembayaran SPP</td>
								<?php 
							 		foreach ($data11 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>
							  <tr>
							 	<td>Perpustakaan</td>
							 	<?php 
							 		foreach ($data11 as $d) {
							 	 ?>
							 	 <td><?php echo $d['manual'] ?></td>
							 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td><?php echo $d['lan'] ?></td>
							 	 <td><?php echo $d['wan'] ?></td>
							 	 <?php } ?>
							 </tr>
							 <tr colspan="2"></td>
							 <td></td>
							 	<?php 
								foreach ($totmanual as $d ) { 
							 ?>
							 	<td><?php echo $d['Tot_Manual']; ?></td>
							 <?php } ?>
							 	<?php 
								foreach ($totkomp as $d ) { 
							 ?>
							 	<td><?php echo $d['Tot_Komp']; ?></td>
							 <?php } ?>
							 	<?php 
								foreach ($totlan as $d ) { 
							 ?>
							 	<td><?php echo $d['Tot_Lan']; ?></td>
							 <?php } ?>
							 	<?php 
								foreach ($totwan as $d ) { 
							 ?>
							 	<td><?php echo $d['Tot_Wan']; ?></td>
							 <?php } ?>
							 </tr>
							</tbody>
	</table>