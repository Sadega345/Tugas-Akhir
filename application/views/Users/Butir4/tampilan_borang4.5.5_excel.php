<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename= TABEL DATA BUTIR 4.5.5 : KEIKUTSERTAAN DOSEN TETAP DALAM ORGANISASI KEILMUAN/PROFESI.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.5.5 : KEIKUTSERTAAN DOSEN TETAP DALAM ORGANISASI KEILMUAN/PROFESI</p>
<table border="1" width="50%">
<thead>
								 <tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Dosen</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Organisasi Keilmuan atau Organisasi Profesi</center></th>
									 <th colspan="2" bgcolor="#D3D3D3"><center>Kurun Waktu</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>Tingkat*</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>Tahun Awal</center></th>
								 	<th bgcolor="#D3D3D3"><center>Tahun Akhir</center></th>
								 	<th bgcolor="#D3D3D3"><center>Internasional</center></th>
								 	<th bgcolor="#D3D3D3"><center>Nasional</center></th>
								 	<th bgcolor="#D3D3D3"><center>Lokal</center></th>
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
							 	<td bgcolor="#FFFF00"><?php echo $d['nm_organisasi']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['thn_awal']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['thn_akhir']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['internasional']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['nasional']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['lokal']; ?></td>
							 </tr>
							 <?php } ?>
							</tbody>
	</table>
