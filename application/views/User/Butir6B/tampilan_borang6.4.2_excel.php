<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.4.2 : AKSESIBILITAS TIAP JENIS DATA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.4.2 : AKSESIBILITAS TIAP JENIS DATA</p>
<table border="1" width="50%">
		<thead>
			<tr>
				 <th rowspan="2"><center>Jenis Data</center></th>
				 <th colspan="4"><center>Sistem Pengolahan Data</center></th>
				 
			 </tr>
			 <tr>
			 	<th>Secara Manual</th>
			 	<th>Dengan Komputer Tanpa Jaringan</th>
			 	<th>Dengan Komputer Jaringan Lokal (LAN)</th>
			 	<th>Dengan Komputer Jaringan Luas (WAN)</th>
			 </tr>								
		</thead>
		<tbody>
		<tr>
		 	
		 	<?php 
		 		foreach ($data1 as $d) {
		 	 ?>
		 	 <td><?php echo $d['jenis_data']; ?></td>
		 	 <td><?php echo $d['manual'] ?></td>
		 	 <td><?php echo $d['komp_tnp_jar'] ?></td>
		 	 <td><?php echo $d['lan'] ?></td>
		 	 <td><?php echo $d['wan'] ?></td>

		 </tr>
		 <?php } ?>
		 
		 <tr>
		 	<td><strong>Total</strong></td>
		 <?php 
			foreach ($totmanual as $d ) { 
		 ?>
		 	<td><?php echo $d['Tot_Manual']; ?></td>
		 <?php } ?>
		 	<?php 
			foreach ($totkomp as $d ) { 
		 ?>
		 	<td><?php echo $d['Tot_Komp']; ?></td>
		 <?php } ?>
		 	<?php 
			foreach ($totlan as $d ) { 
		 ?>
		 	<td><?php echo $d['Tot_Lan']; ?></td>
		 <?php } ?>
		 	<?php 
			foreach ($totwan as $d ) { 
		 ?>
		 	<td><?php echo $d['Tot_Wan']; ?></td>
		 <?php } ?>
		 	
		 </tr>
		</tbody>
	</table>