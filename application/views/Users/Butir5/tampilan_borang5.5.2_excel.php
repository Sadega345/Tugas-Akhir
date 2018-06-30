<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir</p>
<table border="1" width="50%">
		<thead>
								 <tr>
									 <th>No</th>
									 <th>Nama Dosen Pembimbing</th>
									 <th>Jumlah Mahasiswa</th>
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
							 	<td><?php echo $d['jml_mhs']; ?></td>
							 </tr>	
							 <?php } ?>
							</tbody>
</table>
