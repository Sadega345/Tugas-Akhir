<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP</p>
<table border="1" width="50%">
							<thead>
								<tr>
									 <th bgcolor="#D3D3D3">Ruang Kerja Dosen</th>
									 <th bgcolor="#D3D3D3">Jumlah Ruang</th>
									 <th bgcolor="#D3D3D3">Jumlah Luas(m2)</th>
								 </tr>
							</thead>
							<tbody>
							<?php 
								 
								foreach ($ruang1 as $r ) { 
							?>
							<tr>
								<td bgcolor="#FFFF00"><?php echo $r['r_kerja_dosen']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $r['jml_ruang']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $r['jml_luas']; ?></td>
							</tr>
							<?php } ?>
							</tbody>
	</table>
