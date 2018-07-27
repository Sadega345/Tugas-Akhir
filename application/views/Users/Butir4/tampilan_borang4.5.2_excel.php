<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th bgcolor="#D3D3D3"><center>No</center></th>
									 <th bgcolor="#D3D3D3"><center>Nama Dosen Tetap</center></th>
									 <th bgcolor="#D3D3D3"><center>Jenjang Pendidikan</center></th>
									 <th bgcolor="#D3D3D3"><center>Bidang Studi</center></th>
									 <th bgcolor="#D3D3D3"><center>Perguruan Tinggi</center></th>
									 <th bgcolor="#D3D3D3"><center>Negara</center></th>
									 <th bgcolor="#D3D3D3"><center>Tahun Mulai Studi</center></th>
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
								 	<td bgcolor="#FFFF00"><?php echo $d['jenjang_pend']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['bid_studi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['perguruan_tinggi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['negara']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['thn_mulai_std']; ?></td>
								 </tr>
								<?php } ?>
							</tbody>
	</table>
