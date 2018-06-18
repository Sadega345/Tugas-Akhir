<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 7.1.2 : JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 7.1.2 : JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">No</th>
				 <th rowspan="2">Judul</th>
				 <th rowspan="2">Nama-nama Dosen</th>
				 <th rowspan="2">Dihasilkan/dipublikasikan pada</th>
				 <th rowspan="2">Tahun penyajian/publikasi</th>
				 <th colspan="3">Banyaknya dosen</th>
			 </tr>
			 <tr>
			 	<th>Lokal</th>
			 	<th>Nasional</th>
			 	<th>Internasional</th>
			 </tr>
			 <tr align="center">
			 	<td>(1)</td>
			 	<td>(2)</td>
			 	<td>(3)</td>
			 	<td>(4)</td>
			 	<td>(5)</td>
			 	<td>(6)</td>
			 	<td>(7)</td>
			 	<td>(8)</td>
			 </tr>
		</thead>
		<tbody>
			<?php 
				$no=1; 
				foreach ($data as $d ) { 
			?>
			<tr>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['JUDUL']; ?></td>
			 	<td><?php echo $d['nama_dosen']; ?></td>
			 	<td><?php echo $d['publikasi']; ?></td>
			 	<td><?php echo $d['thn_publikasi']; ?></td>
			 	<td><?php echo $d['lokal']; ?></td>
			 	<td><?php echo $d['nasional']; ?></td>
			 	<td><?php echo $d['internasional']; ?></td>
			 	
			 </tr>
			 
			<?php } ?>
			 <tr>
			 	<td colspan="5" readonly=""></td>
			 	<?php 
					
					foreach ($lokal as $l ) { 
				?>
			 	<td><?php echo $l['JML']; ?></td>
			 	<?php } ?>

			 	<?php 
					
					foreach ($nasional as $n ) { 
				?>
			 	<td><?php echo $n['JML']; ?></td>
			 	<?php } ?>

			 	<?php 
					
					foreach ($internasional as $in ) { 
				?>
			 	<td><?php echo $in['JML']; ?></td>
			 	<?php } ?>
			 </tr>
		</tbody>
	</table>
