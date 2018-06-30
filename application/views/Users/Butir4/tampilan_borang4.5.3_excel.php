<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">No</th>
				 <th rowspan="2">Nama Dosen Tetap</th>
				 <th rowspan="2">Jenis Kegiatan*</th>
				 <th rowspan="2">Tempat</th>
				 <th rowspan="2">Tahun</th>
				 <th colspan="2">Sebagai**</th>
			 </tr>
			 <tr>
			 	<th>Peyaji</th>
			 	<th>Peserta</th>
			 </tr>
		</thead>
		<tbody>
			<tr>
			<?php 
				$no=1; 
				foreach ($data as $d ) { 
			?>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['nama_dosen']; ?></td>
			 	<td><?php echo $d['jenis_kegiatan']; ?></td>
			 	<td><?php echo $d['tempat']; ?></td>
			 	<td><?php echo $d['tahun']; ?></td>
			 	<td><?php echo $d['sbg_penyaji']; ?></td>
			 	<td><?php echo $d['sbg_peserta']; ?></td>
			 </tr>
			 <?php } ?>
		</tbody>
	</table>
