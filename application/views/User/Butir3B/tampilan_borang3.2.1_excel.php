<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Butir 3.2.1 : MAHASISWA DAN LULUSAN.xls");

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
				 <th bgcolor="#D3D3D3">Keterangan</th>
			 </tr>
		</thead>
		<tbody>
								<tr>
								<?php 
									$no=1;
									foreach ($masastudi as $m) {
								 ?>
								 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $m['prodi'] ?></td>
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$m['rata_masa_std'],2,',',','); ?></td>
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$m['rata_ipk'],2,',',','); ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $m['keterangan'] ?></td>
								 </tr>
								 <?php } ?>
								 <tr>
								 	<td colspan="2">Rata-rata di Unit Pengelola**</td>
								 	<?php 
								 		foreach ($rata as $r) {
								 	 ?>
								 	 <td bgcolor="#9ACD32"><?php echo number_format((double)$r['rata_mastud'],2,',',','); ?></td>
								 	 <td bgcolor="#9ACD32"><?php echo number_format((double)$r['rata2'],2,',',','); ?></td>
								 	 <td></td>
								 	 <?php } ?>
								 </tr>
							</tbody>
	</table>
