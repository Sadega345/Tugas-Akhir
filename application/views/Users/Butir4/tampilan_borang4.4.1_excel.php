<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.4.1 : DATA DOSEN TIDAK TETAP.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.4.1 : DATA DOSEN TIDAK TETAP</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Dosen Tidak Tetap</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>NIDN (Nomor Induk Dosen Nasional)</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Tanggal Lahir</center><br> <center>(dd/mm/yyyy)</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jabatan Akademik</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Sertifikasi**</center><br><center>(Ya/Tidak)</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>S1*</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>S2*</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>S3*</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>PT Asal</center></th>
								 	<th bgcolor="#D3D3D3"><center>Bidang Keahlian</center></th>
								 	<th bgcolor="#D3D3D3"><center>Gelar</center></th>
								 	<th bgcolor="#D3D3D3"><center>PT Asal</center></th>
								 	<th bgcolor="#D3D3D3"><center>Bidang Keahlian</center></th>
								 	<th bgcolor="#D3D3D3"><center>Gelar</center></th>
								 	<th bgcolor="#D3D3D3"><center>PT Asal</center></th>
								 	<th bgcolor="#D3D3D3"><center>Bidang Keahlian</center></th>
								 	<th bgcolor="#D3D3D3"><center>Gelar</center></th>
								 </tr>
							</thead>
							<tbody>
							
							<tr>
								<?php 
									$no=1; 
									foreach ($data as $d ) { 
								?>
								 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['nama_dosen']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['nidn']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['tgl_lhr']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['NM_JAB_AKD']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['sertifikasi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['GELAR_S1']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['ASAL_PT_S1']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['BID_KEAHLIAN_S1']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['GELAR_S2']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['ASAL_PT_S2']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['BID_KEAHLIAN_S2']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['GELAR_S3']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['ASAL_PT_S3']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['BID_KEAHLIAN_S3']; ?></td>
								 </tr>
								 <?php } ?>
							</tbody>
	</table>