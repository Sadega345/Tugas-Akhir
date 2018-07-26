<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS    </p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3">No</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Nama Dosen Tetap</th>
									 <th rowspan="2" bgcolor="#D3D3D3">NIDN (Nomor Induk Dosen Nasional)</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Tanggal Lahir<br> (dd/mm/yyyy)</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Jabatan Akademik</th>
									 <th rowspan="2" bgcolor="#D3D3D3">Sertifikasi**<br>(Ya/Tidak)</th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>S1</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>S2</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>S3</center></th>
									 <th colspan="3" bgcolor="#D3D3D3">Keahlian Praktis***</th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3">PT Asal</th>
								 	<th bgcolor="#D3D3D3">Bidang Keahlian</th>
								 	<th bgcolor="#D3D3D3">Gelar</th>
								 	<th bgcolor="#D3D3D3">PT Asal</th>
								 	<th bgcolor="#D3D3D3">Bidang Keahlian</th>
								 	<th bgcolor="#D3D3D3">Gelar</th>
								 	<th bgcolor="#D3D3D3">Gelar</th>
								 	<th bgcolor="#D3D3D3">PT Asal</th>
								 	<th bgcolor="#D3D3D3">Bidang Keahlian</th>
								 	<th bgcolor="#D3D3D3">Gelar</th>
								 	<th bgcolor="#D3D3D3">Pengakuan</th>
								 	<th bgcolor="#D3D3D3">Bidang Keahlian</th>
								 	
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
								 	<td bgcolor="#FFFF00"><?php echo $d['GELAR']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['PENGAKUAN']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['BID_KEAHLIAN']; ?></td>
								 </tr>
								 <?php } ?>
							</tbody>
	</table>