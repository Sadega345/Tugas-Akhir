<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.5.2 : AKSESIBILITAS TIAP JENIS DATA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.5.2 : AKSESIBILITAS TIAP JENIS DATA</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jenis Data</center></th>
									 <th colspan="4" bgcolor="#D3D3D3"><center>Sistem Pengolahan Data</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3">Secara Manual</th>
								 	<th bgcolor="#D3D3D3">Dengan Komputer Tanpa Jaringan</th>
								 	<th bgcolor="#D3D3D3">Dengan Komputer Jaringan Lokal (LAN)</th>
								 	<th bgcolor="#D3D3D3">Dengan Komputer Jaringan Luas (WAN)</th>
								 </tr>								
							</thead>
							<tbody>
							<tr>
							 	
							 	<?php 
							 		foreach ($data1 as $d) {
							 	 ?>
							 	 <td><?php echo $d['jenis_data']; ?></td>
							 	 <td bgcolor="#FFFF00"><?php echo $d['manual'] ?></td>
							 	 <td bgcolor="#FFFF00"><?php echo $d['komp_tnp_jar'] ?></td>
							 	 <td bgcolor="#FFFF00"><?php echo $d['lan'] ?></td>
							 	 <td bgcolor="#FFFF00"><?php echo $d['wan'] ?></td> 
							 </tr>
							 <?php } ?>
							 
							 <tr>
							 	<th bgcolor="#D3D3D3">Total</th>
							 <?php 
								foreach ($totmanual as $d ) { 
							 ?>
							 	<td bgcolor="#7FFF00"><?php echo $d['Tot_Manual']; ?></td>
							 <?php } ?>
							 	<?php 
								foreach ($totkomp as $d ) { 
							 ?>
							 	<td bgcolor="#7FFF00"><?php echo $d['Tot_Komp']; ?></td>
							 <?php } ?>
							 	<?php 
								foreach ($totlan as $d ) { 
							 ?>
							 	<td bgcolor="#7FFF00"><?php echo $d['Tot_Lan']; ?></td>
							 <?php } ?>
							 	<?php 
								foreach ($totwan as $d ) { 
							 ?>
							 	<td bgcolor="#7FFF00"><?php echo $d['Tot_Wan']; ?></td>
							 <?php } ?>
							 	
							 </tr>
							</tbody>
		</table>
