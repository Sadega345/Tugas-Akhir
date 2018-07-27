<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.5.4 : PENCAPAIAN PRESTASI/REPUTASI DOSEN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.5.4 : PENCAPAIAN PRESTASI/REPUTASI DOSEN</p>
<table border="1" width="50%">
<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3">No</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Nama Dosen</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Prestasi yang Dicapai *</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Tahun Pencapaian</th>
									 <th colspan="3" bgcolor="#D3D3D3">Tingkat**</th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3">Internasional</th>
								 	<th bgcolor="#D3D3D3">Nasional</th>
								 	<th bgcolor="#D3D3D3">Lokal</th>
								 </tr>
							</thead>
							<tbody>
							<tr>
								<?php 
									$no=1;
									foreach ($data as $d) {
								 ?>
								<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['nama_dosen']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['prestasi']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['tahun']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['internasional']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['nasional']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['lokal']; ?></td>
							</tr>
								<?php } ?>
							</tbody>
	</table>
