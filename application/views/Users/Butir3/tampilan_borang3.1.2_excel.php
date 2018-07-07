<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2"><center>Tahun Akademik</center></th>
									 <th rowspan="2"><center>Daya Tampung</center></th>
									 <th colspan="2"><center>Jumlah calon mahasiswa</center></th>
									 <th colspan="2"><center>Jumlah Mahasiswa baru</center></th>
									 <th colspan="2"><center>Jumlah total mahasiswa</th>
								 </tr>
								 <tr>
								 	<th><center>Ikut seleksi</center></th>
								 	<th><center>Lulus Seleksi</center></th>
								 	<th><center>Non reguler</center></th>
								 	<th><center>Transfer</center></th>
								 	<th><center>Non reguler</center></th>
								 	<th><center>Transfer</center></th>
								 </tr>
							</thead>
							<tbody>
								 	<?php 
								 		$no=4;
								 		foreach ($data as $d) {
								 	 ?>
								<tr>
								 	<td>TS- <?php echo $no--; ?></td>
								 	<td><?php echo $d['dy_tampung']; ?></td>
								 	<td><?php echo $d['jc_mhs_ikt_seleksi']; ?></td>
								 	<td><?php echo $d['jc_mhs_lls_seleksi']; ?></td>
								 	<td><?php echo $d['j_maba_nonreg']; ?></td>
								 	<td><?php echo $d['j_maba_trf']; ?></td>
								 	<td><?php echo $d['j_tot_nonreg']; ?></td>
								 	<td><?php echo $d['j_tot_trf']; ?></td>
								 </tr>
									<?php } ?>
								<tr>
									<td>Jumlah</td>
									<?php
										foreach ($jml_tampung as $j) {
									 ?>
									<td><?php echo $j['jml_tampung']; ?></td>
									<?php } ?>
									<?php
										foreach ($jml_ikutseleksi as $j) {
									 ?>
									<td><?php echo $j['jml_ikutseleksi']; ?></td>
									<?php } ?>
									<?php
										foreach ($jml_lulusseleksi as $j) {
									 ?>
									<td><?php echo $j['jml_lulusseleksi']; ?></td>
									<?php } ?>
									<?php
										foreach ($j_maba_nonreg as $j) {
									 ?>
									<td><?php echo $j['j_maba_nonreg']; ?></td>
									<?php } ?>
									<?php
										foreach ($j_maba_trf as $j) {
									 ?>
									<td><?php echo $j['j_maba_trf']; ?></td>
									<?php } ?>
									<?php
										foreach ($j_tot_nonreg as $j) {
									 ?>
									<td><?php echo $j['j_tot_nonreg']; ?></td>
									<?php } ?>
									<?php
										foreach ($j_tot_trf as $j) {
									 ?>
									<td><?php echo $j['j_tot_trf']; ?></td>
									<?php } ?>
								</tr>
							</tbody>
	</table>