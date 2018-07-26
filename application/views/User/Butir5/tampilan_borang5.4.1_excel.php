<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th  bgcolor="#D3D3D3">No</th>
									 <th  bgcolor="#D3D3D3">Nama Dosen Pembimbing Akademik</th>
									 <th  bgcolor="#D3D3D3">Jumlah Mahasiswa Bimbingan</th>
									 <th  bgcolor="#D3D3D3">Rata-rata banyaknya Pertemuan/mhs/semester</th>
								 </tr>
							</thead>
							<tbody>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							<tr>
							 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['nama_dosen'] ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['j_mhs_bimbingan'] ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['rata2_pertemuan'] ?></td>
							 </tr>
							 <?php } ?>	

							 
							 <tr>
							 	<td colspan="2" bgcolor="#D3D3D3"><center>Jumlah*</center></td>
							 	<?php 
							 		foreach ($totpertemuan as $jum) {
							 	?>
							 		<td bgcolor="#7FFF00"><?php echo $jum['jum_bimbingan']; ?></td>
							 	<?php } ?>

							 <?php 
							 	foreach ($bertemu as $temu) {
							 ?>
							 	
							 	<td bgcolor="#7FFF00"><?php echo $temu['rata_pertemuan']; ?></td>
							 <?php } ?>

							</tbody></table>
