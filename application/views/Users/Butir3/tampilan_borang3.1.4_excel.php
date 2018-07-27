<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>  TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN</p>
<table border="1" width="50%">
<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Tahun Masuk</center></th>
									 <th colspan="7" bgcolor="#D3D3D3"><center>Jumlah Mahasiswa Reguler per Angkatan pada Tahun<br>
									 (tidak memasukkan mahasiswa transfer)</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jumlah Lulusan<br>s.d. TS</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>TS-6</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS-5</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS-4</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS-3</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS-2</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS-1</center></th>
								 	<th bgcolor="#D3D3D3"><center>TS</center></th>
								 </tr>
							</thead>
							<tbody>
								<?php 
									$no=6; 
									foreach ($data as $d ) { 
								?>
								<tr>
								 	<td bgcolor="#D3D3D3">TS- <?php echo $no--; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo$d['ts_6']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo$d['ts_5']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo$d['ts_4']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo$d['ts_3']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo$d['ts_2']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo$d['ts_1']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo$d['ts']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo$d['jml_ts_llsan']; ?></td>
								 </tr>	
								 <?php } ?>
								 
							</tbody>
	</table>