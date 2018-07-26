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
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Judul</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama-nama Dosen</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Dihasilkan/dipublikasikan pada</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Tahun penyajian/publikasi</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>Banyaknya dosen</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>Lokal</center></th>
								 	<th bgcolor="#D3D3D3"><center>Nasional</center></th>
								 	<th bgcolor="#D3D3D3"><center>Internasional</center></th>
								 </tr>
							</thead>
							<tbody>
								<?php 
									$no=1; 
									foreach ($data as $d ) { 
								?>
								<tr>
								 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['JUDUL']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['nama_dosen']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['publikasi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['thn_publikasi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['lokal']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['nasional']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['internasional']; ?></td>
								 </tr>
								 <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
								<?php } ?>
								 <tr>
								 	<td colspan="5" readonly=""></td>
								 	<?php 
										
										foreach ($lokal as $l ) { 
									?>
								 	<td bgcolor="#7FFF00"><?php echo $l['JML']; ?></td>
								 	<?php } ?>

								 	<?php 
										
										foreach ($nasional as $n ) { 
									?>
								 	<td bgcolor="#7FFF00"><?php echo $n['JML']; ?></td>
								 	<?php } ?>

								 	<?php 
										
										foreach ($internasional as $in ) { 
									?>
								 	<td bgcolor="#7FFF00"><?php echo $in['JML']; ?></td>
								 	<?php } ?>
								 </tr>
							</tbody>
	</table>
