<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">Smt</th>
				 <th rowspan="2">Kode MK</th>
				 <th rowspan="2">Nama Mata Kuliah</th>
				 <th colspan="2">Bobot SKS untuk</th>
				 <th colspan="2">SKS MK dalam Kurikulum</th>
				 <th rowspan="2">Bobot Tugas***</th>
				 <th colspan="3">Kelengkapan***</th>
				 <th rowspan="2">Unit/Jur/Fak Penyelenggara</th>
			 </tr>
			 <tr>
			 	<th>Kuliah</th>
			 	<th>Praktikum/Praktek</th>
			 	<th>Inti**</th>
			 	<th>Institusional</th>
			 	<th>Deskripsi</th>
			 	<th>Silabus</th>
			 	<th>SAP</th>
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
			 	<td>(9)</td>
			 	<td>(10)</td>
			 	<td>(11)</td>
			 	<td>(12)</td>
			 </tr>
		</thead>
		<tbody>
			<tr>
			<?php 
				
				foreach ($data as $d ) { 
			?>
				<td><?php echo $d['smt']; ?></td>
			 	<td><?php echo $d['kode_mk']; ?></td>
			 	<td><?php echo $d['nama_mk']; ?></td>
			 	<td><?php echo $d['sks_kuliah']; ?></td>
			 	<td><?php echo $d['sks_praktek']; ?></td>
			 	<td><?php echo $d['sks_inti']; ?></td>
			 	<td><?php echo $d['sks_institusi']; ?></td>
			 	<td><?php echo $d['bobot_tgs']; ?></td>
			 	<td><?php echo $d['deskripsi']; ?></td>
			 	<td><?php echo $d['silabus']; ?></td>
			 	<td><?php echo $d['sap']; ?></td>
			 	<td><?php echo $d['penyelenggara']; ?></td>
			 </tr>
			 <?php } ?>
			</tbody>
		</table>
