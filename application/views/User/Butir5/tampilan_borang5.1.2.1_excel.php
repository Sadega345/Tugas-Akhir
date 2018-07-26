<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK</p>
							<?php 	
									foreach ($jml_sks_min as $j) {
							 ?>
							<p>Jumlah sks minimum untuk kelulusan PS : <input type="text" name="jml_sks_min" readonly="" value="<?php echo $j['jml_sks_min'] ?>" bgcolor="#FFFF00"> SKS</p> <?php 	} ?>
							<table  border="1" width="50%">
							<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3">Smt</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Kode MK</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Nama Mata Kuliah</th>
									 <th colspan="2" bgcolor="#D3D3D3">Bobot SKS untuk</th>
									 <th colspan="2" bgcolor="#D3D3D3">SKS MK dalam Kurikulum</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Bobot Tugas***</th>
									 <th colspan="3" bgcolor="#D3D3D3">Kelengkapan***</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Unit/Jur/Fak Penyelenggara</th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3">Kuliah</th>
								 	<th bgcolor="#D3D3D3">Praktikum/Praktek</th>
								 	<th bgcolor="#D3D3D3">Inti**</th>
								 	<th bgcolor="#D3D3D3">Institusional</th>
								 	<th bgcolor="#D3D3D3">Deskripsi</th>
								 	<th bgcolor="#D3D3D3">Silabus</th>
								 	<th bgcolor="#D3D3D3">SAP</th>
								 </tr>
							</thead>
							<tbody>
							<tr>
							<?php 
								
								foreach ($data as $d ) { 
							?>
								<td bgcolor="#FFFF00"><?php echo $d['smt']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['kode_mk']; ?></td>
							 	<td bgcolor="#FFFF00"<?php echo $d['nama_mk']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['sks_kuliah']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['sks_praktek']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['sks_inti']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['sks_institusi']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['bobot_tgs']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['deskripsi']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['silabus']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['sap']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['penyelenggara']; ?></td>
							 </tr>
							 <?php } ?>
							 <tr>
							 	<td bgcolor="#7FFF00"></td>
							 	<td bgcolor="#7FFF00"></td>
							 	<td bgcolor="#7FFF00"></td>
							 	<?php foreach ($totkuliah as $t) {
								 ?>
							 	<td bgcolor="#7FFF00"><?php echo $t['bobot_kuliah']; ?></td>
							 	<?php } ?>
							 	<?php foreach ($totpraktikum as $t) {
								 ?>
							 	<td bgcolor="#7FFF00"><?php echo $t['bobot_praktikum']; ?></td>
							 	<?php } ?>
							 	<td bgcolor="#7FFF00"></td>
							 	<td bgcolor="#7FFF00"></td>
							 	<?php foreach ($tottugas as $t) {
								 ?>
							 	<td bgcolor="#7FFF00"><?php echo $t['jml_tugas']; ?></td>
							 	<?php } ?>
							 	<?php foreach ($totskripsi as $t) {
								 ?>
							 	<td bgcolor="#7FFF00"><?php echo $t['jml_skripsi']; ?></td>
								<?php } ?>
								<?php foreach ($totalsilabus as $t) {
								 ?>
							 	<td bgcolor="#7FFF00"><?php echo $t['jml_silabus']; ?></td>
							 	<?php } ?>
							 	<?php foreach ($totalsap as $t) {
								 ?>
							 	<td bgcolor="#7FFF00"><?php echo $t['jml_sap']; ?></td>
							 	<?php } ?>
							 </tr>
							</tbody>
							</table>