<?php 

header("Content-type: application/octet-stream");

header("Pragma: no-cache");

header("Content-Disposition: attachment; filename=DATA DOSEN.xls");

header("Expires: 0");

?>
<p><center>DATA DOSEN</center></p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">No</th>
				 <th rowspan="2">Nama Dosen Tetap</th>
				 <th rowspan="2">NIDN</th>
				 <th rowspan="2">Tanggal lahir (dd/mm/yyyy)</th>
				 <th rowspan="2">Jabatan Akademik</th>
				 <th colspan="3">S1</th>
				 <th colspan="3">S2</th>
				 <th colspan="3">S3</th>
			 </tr>
			 <tr>
			 	<th>Gelar Akademik</th>
				<th>Asal PT</th>
				<th>Bidang Keahlian</th>
				<th>Gelar Akademik</th>
				<th>Asal PT</th>
				<th>Bidang Keahlian</th>
				<th>Gelar Akademik</th>
				<th>Asal PT</th>
				<th>Bidang Keahlian</th>
			 </tr>
		</thead>
		<tbody>
		<?php 
			$no=1; 
			foreach ($data as $d ) { 
		?>
		<tr align="center">
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['NAMA_DOSEN']; ?></td>
			 	<td><?php echo $d['NIDN']; ?></td>
			 	<td><?php echo $d['TGL_LHR']; ?></td>
			 	<td><?php echo $d['NM_JAB_AKD']; ?></td>
			 	<td><?php echo $d['GELAR_S1']; ?></td>
			 	<td><?php echo $d['ASAL_PT_S1']; ?></td>
			 	<td><?php echo $d['BID_KEAHLIAN_S1']; ?></td>
			 	<td><?php echo $d['GELAR_S2']; ?></td>
			 	<td><?php echo $d['ASAL_PT_S2']; ?></td>
			 	<td><?php echo $d['BID_KEAHLIAN_S2']; ?></td>
			 	<td><?php echo $d['GELAR_S3']; ?></td>
			 	<td><?php echo $d['ASAL_PT_S3']; ?></td>
			 	<td><?php echo $d['BID_KEAHLIAN_S3']; ?></td>
			 </tr>
		<?php } ?>
		</tbody>
		</table>
		</tbody>
	</table>