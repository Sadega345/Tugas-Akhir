<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 7.1.1 : PENELITIAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 7.1.1 : PENELITIAN</p>
<table border="1" width="50%">
<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3">No.</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Nama Program Studi</th>
									 <th colspan="3" bgcolor="#D3D3D3">Jumlah Judul Penelitian</th>
									 <th colspan="3" bgcolor="#D3D3D3">Total Dana Penelitian (Juta Rupiah)</th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3">TS-2</th>
								 	<th bgcolor="#D3D3D3">TS-1</th>
								 	<th bgcolor="#D3D3D3">TS</th>
								 	<th bgcolor="#D3D3D3">TS-2</th>
								 	<th bgcolor="#D3D3D3">TS-1</th>
								 	<th bgcolor="#D3D3D3">TS</th>
								 </tr>
							</thead>
							<tbody>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							<tr>
								<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['jurusan']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['Tot_Ts2']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['Tot_Ts1']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['Tot_Ts']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['Dana_penelitian']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['Jum_Dana2015']; ?></td>
								<td bgcolor="#FFFF00"><?php echo $d['Jum_Dana2016']; ?></td>
							</tr>
							<?php } ?>
							<tr>
								<th colspan="2" bgcolor="#D3D3D3">Total</th>
								<?php 
									$no=1; 
									foreach ($total as $t ) { 
								?>
								<td bgcolor="#7FFF00"><?php echo $t['Tot_Ts2']; ?></td>
								<td bgcolor="#7FFF00"><?php echo $t['Tot_Ts1']; ?></td>
								<td bgcolor="#7FFF00"><?php echo $t['Tot_Ts']; ?></td>
								<td bgcolor="#7FFF00"><?php echo $t['Jum_dana2014']; ?></td>
								<td bgcolor="#7FFF00"><?php echo $t['Jum_dana2015']; ?></td>
								<td bgcolor="#7FFF00"><?php echo $t['Jum_dana2016']; ?></td>
							</tr>
							<?php } ?>
							</tbody>
	</table>