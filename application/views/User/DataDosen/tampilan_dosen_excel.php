<?php 

header("Content-type: application/octet-stream");

header("Pragma: no-cache");

// header("Content-Disposition: attachment; filename=$title.xls");

header("Expires: 0");

?>
<p>TABEL DATA Dosen</p>
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
			 	<td>Gelar Akademik</td>
			 	<td>Asal PT</td>
			 	<td>Bidang Keahlian</td>
			 	<td>Gelar Akademik</td>
			 	<td>Asal PT</td>
			 	<td>Bidang Keahlian</td>
			 	<td>Gelar Akademik</td>
			 	<td>Asal PT</td>
			 	<td>Bidang Keahlian</td>
			 </tr>
			 <tr>
			 	<th>(1)</th>
			 	<th>(2)</th>
			 	<th>(3)</th>
			 	<th>(4)</th>
			 	<th>(5)</th>
			 	<th>(6)</th>
			 	<th>(7)</th>
			 	<th>(8)</th>
			 	<th>(9)</th>
			 	<th>(10)</th>
			 	<th>(11)</th>
			 	<th>(12)</th>
			 	<th>(13)</th>
			 	<th>(14)</th>
			 </tr>
		</thead>
		<tbody>
		<?php 
			$no=1; 
			foreach ($data as $d ) { 
		?>
		<tr align="center">
		 	<tr>
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