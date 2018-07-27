<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 3.2.1 : MAHASISWA DAN LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 3.2.1 : MAHASISWA DAN LULUSAN</p>
<table border="1" width="50%">
<thead>
								<tr>
									 <th bgcolor="#D3D3D3">No.</th>
									 <th bgcolor="#D3D3D3">Program Studi</th>
									 <th bgcolor="#D3D3D3">Rata-rata Masa Studi (tahun)*</th>
									 <th bgcolor="#D3D3D3">Rata-rata IPK Lulusan*</th>
								 </tr>
							</thead>
							<tbody>
								<?php 
									$no=1;
									foreach ($masastudi as $m) {
								 ?>
								<tr>
								 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $m['prodi'] ?></td>
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$m['rata_masa_std'],2,',',','); ?></td>
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$m['rata_ipk'],2,',',','); ?></td> 
								 </tr>
								 <?php } ?>
								 <!-- <tr>
								 	<td colspan="2" bgcolor="#FFFF00">Rata-rata di Unit Pengelola**</td>
								 	<?php 
								 		foreach ($rata as $r) {
								 	 ?>
								 	 <td bgcolor="#FFFF00"><?php echo $r['rata_mastud'] ?></td>
								 	 <td bgcolor="#FFFF00"><?php echo $r['rata2'] ?></td>
								 	 <?php } ?>
								 </tr> -->
							</tbody>
	</table>
