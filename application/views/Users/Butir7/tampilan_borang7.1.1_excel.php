<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 7.1.1 : PENELITIAN DOSEN TETAP.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 7.1.1 : PENELITIAN DOSEN TETAP</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th>Sumber Pembiayaan</th>
									 <th>TS-2</th>
									 <th>TS-1</th>
									 <th>TS</th>
									 <th>Jumlah</th>
								 </tr>
							</thead>
							<tbody>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							<tr>
								<td><?php echo $d['sumber_pembiayaan']; ?></td>
								<td><?php echo $d['TS_2']; ?></td>
								<td><?php echo $d['TS_1']; ?></td>
								<td><?php echo $d['TS']; ?></td>
							</tr>
							<?php } ?>
							
							</tbody>
		</tbody>
	</table>

