<?php 

header("Content-type: application/octet-stream");



header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA Pengisi Borang</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th>No</th>
				 <th>Nama</th>
				 <th>NIDN</th>
				 <th>Jabatan</th>
				 <th>Tanggal Pengisian (dd/mm/yyyy)</th>
			 </tr>
		</thead>
		<tbody>
		<?php 
			$no=1; 
			foreach ($data as $d ) { ?> 
		<tr align="center">
		 	 <tr>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['nama']; ?></td>
			 	<td><?php echo $d['nidn'] ?></td>
			 	<td><?php echo $d['jabatan']; ?></td>
			 	<td><?php echo $d['tgl_pengisian']; ?></td>
			 </tr>
			<?php } ?>
		</tbody>
	</table>