<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP </p>
<table border="1" width="50%">
<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Dosen Tidak Tetap</center></th>
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
							 	<td bgcolor="#FFFF00"><?php echo $d['jp_dilaksanakan']; ?></td>
							 </tr>
							 <?php } ?>
							 <tr>
							 	<th colspan="5" bgcolor="#D3D3D3">Jumlah*</th>
							 	<?php 
							 		foreach ($total as $tot ) {
							 	 ?>
							 	<th bgcolor="#7FFF00"><?php echo $tot['total_rencana']; ?></th>
							 	<?php } ?>

							 	<?php 
							 		foreach ($totdilaksanakan as $totlaksana ) {
							 	 ?>
							 	<th bgcolor="#7FFF00"><?php echo $totlaksana['total_laksana']; ?></th>
							 	<?php } ?>
							 </tr>
							</tbody>
	</table>