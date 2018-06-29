<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.5.1 : KEGIATAN TENAGA AHLI/PAKAR (TIDAK TERMASUK DOSEN TETAP).xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.5.1 : KEGIATAN TENAGA AHLI/PAKAR (TIDAK TERMASUK DOSEN TETAP)</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th>No</th>
				 <th>Nama Tenaga Ahli/Pakar</th>
				 <th>Instansi/Jabatan</th>
				 <th>Nama dan Judul Kegiatan</th>
				 <th>Tahun Pelaksanaan</th>
			 </tr>
		</thead>
		<tbody>
			<tr>
			<?php 
				$no=1; 
				foreach ($data as $d ) { 
			?>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['nama_pakar']; ?></td>
			 	<td><?php echo $d['instansi']; ?></td>
			 	<td><?php echo $d['judul_keg']; ?></td>
			 	<td><?php echo $d['pelaksanaan']; ?></td>
			 </tr>
			 <?php } ?>
		</tbody>
	</table>

