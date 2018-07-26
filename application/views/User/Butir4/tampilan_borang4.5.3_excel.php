<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Dosen Tetap</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jenis Kegiatan*</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Tempat</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Tahun</center></th>
									 <th colspan="2" bgcolor="#D3D3D3"><center>Sebagai**</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>Peyaji</center></th>
								 	<th bgcolor="#D3D3D3"><center>Peserta</center></th>
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
							 	<td bgcolor="#FFFF00"><?php echo $d['jenis_kegiatan']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['tempat']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['tahun']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['sbg_penyaji']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['sbg_peserta']; ?></td>
							 </tr>
							 <?php } ?>
							</tbody>
	</table>
