<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.1.1.3 : PENGGUNAAN DANA UNTUK TRIDARMA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.1.1.3 : PENGGUNAAN DANA UNTUK TRIDARMA</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3">No</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Nama Program Studi</th>
									 <th colspan="3" bgcolor="#D3D3D3">Jumlah Dana (Juta Rupiah)</th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3">TS-2</th>
								 	<th bgcolor="#D3D3D3">TS-1</th>
								 	<th bgcolor="#D3D3D3">TS</th>
								 </tr>
							</thead>
							<tbody>
							<tr>
							<?php  
								$no=1;
							 	foreach ($data as $d) {
							 ?>
							 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['nm_program_std'] ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['ts_2'] ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['ts_1'] ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['ts'] ?></td>
							 <?php } ?>
							 </tr>
							</tbody>
</table>