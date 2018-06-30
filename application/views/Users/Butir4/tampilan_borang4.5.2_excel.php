<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th>No</th>
				 <th>Nama Dosen Tetap</th>
				 <th>Jenjang Pendidikan</th>
				 <th>Bidang Studi</th>
				 <th>Perguruan Tinggi</th>
				 <th>Negara</th>
				 <th>Tahun Mulai Studi</th>
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
				 	<td><?php echo $d['jenjang_pend']; ?></td>
				 	<td><?php echo $d['bid_studi']; ?></td>
				 	<td><?php echo $d['perguruan_tinggi']; ?></td>
				 	<td><?php echo $d['negara']; ?></td>
				 	<td><?php echo $d['thn_mulai_std']; ?></td>
				 </tr>
			</tbody>
		<?php } ?>
	</table>
