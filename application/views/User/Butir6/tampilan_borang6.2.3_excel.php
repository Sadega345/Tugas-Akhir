<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT</p>
<table border="1" width="50%">
							<thead>
								  <tr>
									 <th bgcolor="#D3D3D3">Tahun</th>
									 <th bgcolor="#D3D3D3">Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
									 <th bgcolor="#D3D3D3">Sumber dan Jenis Dana</th>
									 <th bgcolor="#D3D3D3">Jumlah Dana (dalam juta rupiah)</th>
								 </tr>
							</thead>
							<tbody>
							
							 <?php 
								
								foreach ($data as $d ) { 
							?>
							<tr>
							 	<td bgcolor="#FFFF00"><?php echo $d['TAHUN']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['judul_kegiatan']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['SUMBER_DANA']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['JUMLAH_DANA']; ?></td> 
							 </tr>
							 <?php } ?>
							 <tr>
							 	<td colspan="3" bgcolor="#D3D3D3">Total**</td>
							 <?php 
								foreach ($totdana as $d ) { 
							 ?>
							 	<td bgcolor="#7FFF00"><?php echo $d['Tot_Dana']; ?></td>
							 <?php } ?>
							 </tr>
							</tbody>
		</table>
