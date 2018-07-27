<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Butir 3.3 : EVALUASI LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>  TABEL DATA BUTIR 3.3 : EVALUASI LULUSAN</p>
	<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No.</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jenis Kemampuan</center></th>
									 <th colspan="4" bgcolor="#D3D3D3"><center>Tanggapan Pihak pengguna (%)</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Rencana Tindak Lanjut oleh Program Studi</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3">Sangat Baik</th>
								 	<th bgcolor="#D3D3D3">Baik</th>
								 	<th bgcolor="#D3D3D3">Cukup</th>
								 	<th bgcolor="#D3D3D3">Kurang</th>
								 </tr>
							</thead>
							<tbody>
								<?php 
									$no=1; 
									foreach ($data as $d ) { 
								?>
							<tr>
								
							 	<td bgcolor="#D3D3D3"><?php echo $no++; ?></td>
							 	<td bgcolor="#D3D3D3"><?php echo $d['jenis_kemampuan']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['sangat_baik']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['baik']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['cukup']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['kurang']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['rencana']; ?></td>
							 </tr>
							<?php } ?>
							 
							 <tr>
							 	<td colspan="2" bgcolor="#D3D3D3"><strong>Total</strong></td>
							 	<?php 
									foreach ($sangatbaik as $d ) { 
								?>
							 		<td bgcolor="#9ACD32"><?php echo $d['Sangat_baik']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($baik as $d ) { 
								?>
							 		<td bgcolor="#9ACD32"><?php echo $d['Baik']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($cukup as $d ) { 
								?>
							 		<td bgcolor="#9ACD32"><?php echo $d['Cukup']; ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($kurang as $d ) { 
								?>
							 		<td bgcolor="#9ACD32"><?php echo $d['Kurang']; ?></td>
							 	<?php } ?>
							 </tr>
							</tbody>
							</table>
								<p><strong>3.4.3 Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama</strong>
								<table border="1" width="50%">	
									<thead>
										<tr>
											<th>Rata-rata waktu</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										<?php foreach ($waktu as $w ) {
										 ?>
										<td bgcolor="#FFFF00"><?php echo $w['waktu'] ; ?></td>
									</tr>
									<?php } ?>
									</tbody>
								</table> 
							</p>

							<p><strong>3.4.4 Persentase lulusan yang bekerja pada bidang yang sesuai dengan keahliannya</strong>
								<table border="1" width="50%">	
									<thead>
										<tr>
											<th>Persentasi</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										<?php foreach ($persen as $p ) {
										 ?>
										<td bgcolor="#FFFF00"><?php echo $p['persen'] ; ?></td>
										
									</tr>
									<?php } ?>
									</tbody>
								</table>
							</p>
