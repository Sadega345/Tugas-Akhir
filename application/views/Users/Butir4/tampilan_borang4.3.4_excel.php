<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.3.4 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.3.4 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS  </p>
<table border="1" width="50%">
		<thead>
								  <tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Dosen Tetap</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Kode Mata Kuliah</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Mata Kuliah</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jumlah Kelas</center></th>
									 <th colspan="2" bgcolor="#D3D3D3"><center>Jumlah Pertemuan</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>Direncanakan</center></th>
								 	<th bgcolor="#D3D3D3"><center>Dilaksanakan</center></th>
								 </tr>
							</thead>
							<tbody>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							 <tr>
							 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['nama_dosen']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['kode_mk']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['nama_mk']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['jum_kls']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['jp_rencana']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['jp_dilaksanakan']; ?></td>
							 </tr>
							 <?php } ?>
							 <?php 
							 	foreach ($jumlah as $jum) {
							 ?>
							 <tr>
							 	<td colspan="5" bgcolor="#D3D3D3"><center><strong>Jumlah*</strong></center></td>
							 	<td bgcolor="#9ACD32"><?php echo $jum['jumper_d']; ?></td>
							 <?php } ?>
							 <?php 
							 	foreach ($jumlah2 as $jum2) {
							 ?>
							 	<td bgcolor="#9ACD32"><?php echo $jum2['jumlahpertemuan_dilaksanakan']; ?></td>
							 <?php } ?>
							 </tr>

							</tbody>
	</table>
