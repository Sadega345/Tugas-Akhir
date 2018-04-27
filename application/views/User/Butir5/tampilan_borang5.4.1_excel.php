<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th>No</th>
				 <th>Nama Dosen Pembimbing Akademik</th>
				 <th>Jumlah Mahasiswa Bimbingan</th>
				 <th>Rata-rata banyaknya Pertemuan/mhs/semester</th>
			 </tr>
			 <tr align="center">
			 	<td>(1)</td>
			 	<td>(2)</td>
			 	<td>(3)</td>
			 	<td>(4)</td>
			 </tr>
		</thead>
		<tbody>
			 <?php 
				$no=1; 
				foreach ($data as $d ) { 
			?>
			<tr>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['nama_dosen'] ?></td>
			 	<td><?php echo $d['j_mhs_bimbingan'] ?></td>
			 	<td><?php echo $d['rata2_pertemuan'] ?></td>
			 </tr>
			 <?php } ?>	

			 
			 <tr>
			 	<td colspan="2"><center>Jumlah*</center></td>
			 	<?php 
			 		foreach ($totpertemuan as $jum) {
			 	?>
			 		<td><?php echo $jum['jum_bimbingan']; ?></td>
			 	<?php } ?>

			 <?php 
			 	foreach ($bertemu as $temu) {
			 ?>
			 	
			 	<td><?php echo $temu['rata_pertemuan']; ?></td>
			 <?php } ?>
		</tbody>
</table>
