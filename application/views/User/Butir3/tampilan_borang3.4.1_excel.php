<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2" bgcolor="#D3D3D3">No.</th>
				 <th rowspan="2" bgcolor="#D3D3D3">Jenis Kemampuan</th>
				 <th colspan="4" bgcolor="#D3D3D3">Tanggapan Pihak pengguna (%)</th>
				 <th rowspan="2" bgcolor="#D3D3D3">Rencana Tindak Lanjut oleh Program Studi</th>
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
		 	<td bgcolor="#D3D3D3" align="top"><?php echo $d['jenis_kemampuan']; ?></td>
		 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['sangat_baik'],2,',',','); ?></td>
		 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['baik'],2,',',','); ?></td>
		 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['cukup'],2,',',','); ?></td>
		 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['kurang'],2,',',','); ?></td>
		 	<td bgcolor="#FFFF00"><?php echo $d['rencana']; ?></td>
		 </tr>
		<?php } ?>
		 
		 <tr>
		 	<td colspan="2" bgcolor="#D3D3D3">Total</td>
		 	<?php 
				foreach ($sangatbaik as $d ) { 
			?>
		 		<td bgcolor="#D3D3D3"><?php echo number_format((double)$d['Sangat_baik'],2,',',','); ?></td>
		 	<?php } ?>

		 	<?php 
				foreach ($baik as $d ) { 
			?>
		 		<td bgcolor="#D3D3D3"><?php echo number_format((double)$d['Baik'],2,',',','); ?></td>
		 	<?php } ?>

		 	<?php 
				foreach ($cukup as $d ) { 
			?>
		 		<td bgcolor="#D3D3D3"><?php echo number_format((double)$d['Cukup'],2,',',','); ?></td>
		 	<?php } ?>

		 	<?php 
				foreach ($kurang as $d ) { 
			?>
		 		<td bgcolor="#D3D3D3"><?php echo number_format((double)$d['Kurang'],2,',',','); ?></td>
		 	<?php } ?>
		 </tr>
		</tbody>
	</table>
	<p><strong>3.4.3 Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama</strong>
								<table border="1px">	
									<tr>
										<?php foreach ($waktu as $w ) {
										 ?>
										<td bgcolor="#FFFF00"><?php echo number_format((double)$w['waktu'],2,',',',') ; ?></td>
										<?php } ?>
									</tr>
								</table> bulan
							</p>
							<p><strong>3.4.4 Persentase lulusan yang bekerja pada bidang yang sesuai dengan keahliannya</strong>
								<table border="1px">	
									<tr>
										<?php foreach ($persen as $p ) {
										 ?>
										<td bgcolor="#FFFF00"><?php echo number_format((double)$p['persen'],2,',',',') ; ?></td>
										<?php } ?>
									</tr>
								</table>
							</p>