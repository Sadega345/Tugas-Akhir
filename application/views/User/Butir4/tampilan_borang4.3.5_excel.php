<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Dosen Tetap</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Kode Mata Kuliah</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Mata Kuliah</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jumlah SKS</center></th>
									 <th colspan="2" bgcolor="#D3D3D3"><center>Jumlah Pertemuan</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>Direncanakan</center></th>
								 	<th bgcolor="#D3D3D3"><center>Dilaksanakan</center></th>
								 	
								 </tr>
							</thead>
							<tbody>
							
							<tr>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['nama_dosen']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['kode_mk']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['nama_mk']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['jml_sks']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['jp_rencana']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['jp_dilaksanakan']; ?></td>>
							 </tr>
							 <?php } ?>

							 <tr>
							 	<td colspan="5" bgcolor="#D3D3D3"><center>Jumlah</center></td>
							 	<?php 
							 		foreach ($total as $tot ) {
							 	 ?>
							 	<td bgcolor="#7FFF00"><?php echo $tot['total_rencana']; ?></td>
							 	<?php } ?>

							 	<?php 
							 		foreach ($totdilaksanakan as $totlaksana ) {
							 	 ?>
							 	<td bgcolor="#7FFF00"><?php echo $totlaksana['total_laksana']; ?></td>
							 	<?php } ?>
							 </tr>
		
							</tbody>
	</table>
