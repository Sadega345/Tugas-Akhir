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
									 <th rowspan="2">No.</th>
									 <th rowspan="2">Nama Program Studi</th>
									 <th colspan="3">Jumlah Judul Penelitian</th>
									 <th colspan="3">Total Dana Penelitian (Juta Rupiah)</th>
								 </tr>
								 <tr>
								 	<th>TS-2</th>
								 	<th>TS-1</th>
								 	<th>TS</th>
								 	<th>TS-2</th>
								 	<th>TS-1</th>
								 	<th>TS</th>
								 </tr>
							</thead>
							<tbody>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $d['jurusan']; ?></td>
								<td><?php echo $d['Tot_Ts2']; ?></td>
								<td><?php echo $d['Tot_Ts1']; ?></td>
								<td><?php echo $d['Tot_Ts']; ?></td>
								<td><?php echo $d['Dana_penelitian']; ?></td>
								<td><?php echo $d['Jum_Dana2015']; ?></td>
								<td><?php echo $d['Jum_Dana2016']; ?></td>
							</tr>
							<?php } ?>
							<tr>
								<td colspan="2">Total</td>
								<?php 
									$no=1; 
									foreach ($total as $t ) { 
								?>
								<td><?php echo $t['Tot_Ts2']; ?></td>
								<td><?php echo $t['Tot_Ts1']; ?></td>
								<td><?php echo $t['Tot_Ts']; ?></td>
								<td><?php echo $t['Jum_dana2014']; ?></td>
								<td><?php echo $t['Jum_dana2015']; ?></td>
								<td><?php echo $t['Jum_dana2016']; ?></td>
							</tr>
							<?php } ?>
							</tbody>
	</table>