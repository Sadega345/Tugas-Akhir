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
									 <th bgcolor="#D3D3D3"><center>No</center></th>
									 <th bgcolor="#D3D3D3"><center>Nama Tenaga Ahli/Pakar</center></th>
									 <th bgcolor="#D3D3D3"><center>Instansi/Jabatan</center></th>
									 <th bgcolor="#D3D3D3"><center>Nama dan Judul Kegiatan</center></th>
									 <th bgcolor="#D3D3D3"><center>Tahun Pelaksanaan</center></th>
								 </tr>
							</thead>
							<tbody>
							<tr>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['nama_pakar']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['instansi']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['judul_keg']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['pelaksanaan']; ?></td>
							 </tr>
							 <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							 <?php } ?>
							</tbody>
	</table>

