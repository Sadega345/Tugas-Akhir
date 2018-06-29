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
				 <th rowspan="2">No.</th>
				 <th rowspan="2">Jenis Kemampuan</th>
				 <th colspan="4">Tanggapan Pihak pengguna (%)</th>
				 <th rowspan="2">Rencana Tindak Lanjut oleh Program Studi</th>
			 </tr>
			 <tr>
			 	<th>Sangat Baik</th>
			 	<th>Baik</th>
			 	<th>Cukup</th>
			 	<th>Kurang</th>
			 </tr>
		</thead>
		<tbody>
			<?php 
				$no=1; 
				foreach ($data as $d ) { 
			?>
		<tr>
			
		 	<td><?php echo $no++; ?></td>
		 	<td><?php echo $d['jenis_kemampuan']; ?></td>
		 	<td><?php echo $d['sangat_baik']; ?></td>
		 	<td><?php echo $d['baik']; ?></td>
		 	<td><?php echo $d['cukup']; ?></td>
		 	<td><?php echo $d['kurang']; ?></td>
		 	<td><?php echo $d['rencana']; ?></td>
		 </tr>
		<?php } ?>
		 
		 <tr>
		 	<td colspan="2">Total</td>
		 	<?php 
				foreach ($sangatbaik as $d ) { 
			?>
		 		<td><?php echo $d['Sangat_baik']; ?></td>
		 	<?php } ?>

		 	<?php 
				foreach ($baik as $d ) { 
			?>
		 		<td><?php echo $d['Baik']; ?></td>
		 	<?php } ?>

		 	<?php 
				foreach ($cukup as $d ) { 
			?>
		 		<td><?php echo $d['Cukup']; ?></td>
		 	<?php } ?>

		 	<?php 
				foreach ($kurang as $d ) { 
			?>
		 		<td><?php echo $d['Kurang']; ?></td>
		 	<?php } ?>
		 </tr>
		</tbody>
	</table>
	<p><strong>3.4.3 Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama</strong>
								<table border="1px">	
									<tr>
										<?php foreach ($waktu as $w ) {
										 ?>
										<td><?php echo $w['waktu'] ; ?></td>
										<?php } ?>
									</tr>
								</table> bulan
							</p>
							<p><strong>3.4.4 Persentase lulusan yang bekerja pada bidang yang sesuai dengan keahliannya</strong>
								<table border="1px">	
									<tr>
										<?php foreach ($persen as $p ) {
										 ?>
										<td><?php echo $p['persen'] ; ?></td>
										<?php } ?>
									</tr>
								</table>
							</p>