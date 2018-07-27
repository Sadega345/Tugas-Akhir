<?php 

header("Content-type: application/octet-stream");


header("Content-Disposition: attachment; filename=PENGISI DATA BORANG : PENGISI DATA BORANG.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA Pengisi Borang</p>
<table border="1" width="50%">
		<thead>
				<tr>
				 <th bgcolor="#D3D3D3">No</th>
				 <th bgcolor="#D3D3D3">Nama</th>
				 <th bgcolor="#D3D3D3">NIDN</th>
				 <th bgcolor="#D3D3D3">Jabatan</th>
				 <th bgcolor="#D3D3D3">Tanggal Pengisian (dd/mm/yyyy)</th>
				</tr>
		</thead>
		<tbody>
		<?php 
			$no=1; 
			foreach ($data as $d ) { ?> 
			<tr>
			 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
			 	<td bgcolor="#FFFF00"><?php echo $d['nama']; ?></td>
			 	<td bgcolor="#FFFF00"><?php echo $d['nidn'] ?></td>
			 	<td bgcolor="#FFFF00"><?php echo $d['jabatan']; ?></td>
			 	<td bgcolor="#FFFF00"><?php echo $d['tgl_pengisian']; ?></td>
			 </tr>
			<?php } ?>
		</tbody>
	</table>