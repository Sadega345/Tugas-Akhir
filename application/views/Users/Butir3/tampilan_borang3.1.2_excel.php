<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Butir 3.1.2 : PROFIL MAHASISWA DAN LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN</p>
<table border="1" width="50%">
<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Tahun Akademik</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Daya Tampung</center></th>
									 <th colspan="2" bgcolor="#D3D3D3"><center>Jumlah calon mahasiswa</center></th>
									 <th colspan="2" bgcolor="#D3D3D3"><center>Jumlah Mahasiswa baru</center></th>
									 <th colspan="2" bgcolor="#D3D3D3"><center>Jumlah total mahasiswa</th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>Ikut seleksi</center></th>
								 	<th bgcolor="#D3D3D3"><center>Lulus Seleksi</center></th>
								 	<th bgcolor="#D3D3D3"><center>Non reguler</center></th>
								 	<th bgcolor="#D3D3D3"><center>Transfer</center></th>
								 	<th bgcolor="#D3D3D3"><center>Non reguler</center></th>
								 	<th bgcolor="#D3D3D3"><center>Transfer</center></th>
								 </tr>
							</thead>
							<tbody>
								 	<?php 
								 		$no=4;
								 		foreach ($data as $d) {
								 	 ?>
								<tr>
								 	<td bgcolor="#D3D3D3">TS- <?php echo $no--; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['dy_tampung']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['jc_mhs_ikt_seleksi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['jc_mhs_lls_seleksi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_maba_nonreg']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_maba_trf']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_tot_nonreg']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_tot_trf']; ?></td>
								 </tr>
									<?php } ?>
								<tr>
									<td bgcolor="#D3D3D3">Jumlah</td>
									<?php
										foreach ($jml_tampung as $j) {
									 ?>
									<td bgcolor="#9ACD32"><?php echo $j['jml_tampung']; ?></td>
									<?php } ?>
									<?php
										foreach ($jml_ikutseleksi as $j) {
									 ?>
									<td bgcolor="#9ACD32"><?php echo $j['jml_ikutseleksi']; ?></td>
									<?php } ?>
									<?php
										foreach ($jml_lulusseleksi as $j) {
									 ?>
									<td bgcolor="#9ACD32"><?php echo $j['jml_lulusseleksi']; ?></td>
									<?php } ?>
									<?php
										foreach ($j_maba_nonreg as $j) {
									 ?>
									<td bgcolor="#9ACD32"><?php echo $j['j_maba_nonreg']; ?></td>
									<?php } ?>
									<?php
										foreach ($j_maba_trf as $j) {
									 ?>
									<td bgcolor="#9ACD32"><?php echo $j['j_maba_trf']; ?></td>
									<?php } ?>
									<?php
										foreach ($j_tot_nonreg as $j) {
									 ?>
									<td bgcolor="#9ACD32"><?php echo $j['j_tot_nonreg']; ?></td>
									<?php } ?>
									<?php
										foreach ($j_tot_trf as $j) {
									 ?>
									<td bgcolor="#9ACD32"><?php echo $j['j_tot_trf']; ?></td>
									<?php } ?>
								</tr>
							</tbody>
	</table>