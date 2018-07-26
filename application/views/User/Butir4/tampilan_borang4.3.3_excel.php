<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>No</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Nama Dosen Tetap</center></th>
									 <th colspan="3" bgcolor="#D3D3D3"><center>SKS Pengajaran pada</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>SKS Penelitian</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>SKS Pengabdian Masyarakat</center></th>
									 <th colspan="2" bgcolor="#D3D3D3"><center>SKS Manajemen</center></th>
									 <th rowspan="2" bgcolor="#D3D3D3"><center>Jumlah SKS</center></th>
								 </tr>
								 <tr>
								 	<th bgcolor="#D3D3D3"><center>PS Sendiri</center></th>
								 	<th bgcolor="#D3D3D3"><center>PS Lain, PT Sendiri</center></th>
								 	<th bgcolor="#D3D3D3"><center>PT Lain</center></th>
								 	<th bgcolor="#D3D3D3"><center>PS Sendiri</center></th>
								 	<th bgcolor="#D3D3D3"><center>PT Lain</center></th>
								 </tr>
							</thead>
							<tbody>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							<tr>
							 	<td bgcolor="#FFFF00"><?php echo $no++; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['NAMA_DOSEN']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['SKS_PSS']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['SKS_PSL_PTS']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['SKS_PTL']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['SKS_PENELITIAN']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['SKS_PP_MAS']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['SKS_MAN_PTS']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['SKS_MAN_PTL']; ?></td>
							 	<td bgcolor="#FFFF00"><?php echo $d['total']; ?></td>
							 </tr>
							 <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							 <?php } ?>

							 
							 <tr>
							 	<td colspan="2" bgcolor="#D3D3D3" >Jumlah</td>
							 	<?php 
									foreach ($hitung as $h ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo $h['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($pt as $p ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo $p['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($lain as $l ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo $l['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($penelitian as $p ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo $p['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($pengabdian as $p ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo $p['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($jumsks as $j ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo $j['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($manptlain as $man ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo $man['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($totsks as $tot ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo $tot['jml']; ?></td>
							 	<?php } ?>
							 </tr>
							 
							  <tr>
							 	<td colspan="2" bgcolor="#D3D3D3">Rata-rata</td>
							 	<?php 
									foreach ($rata as $r ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo number_format($r['rata'],2,",","."); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($prlain as $pr ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo number_format($pr['rata'],2,",","."); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($ptlain as $pt ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo number_format($pt['rata'],2,",","."); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($ratapenelitian as $rp ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo number_format($rp['rata'],2,",","."); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($pengmas as $peng ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo number_format($peng['rata'],2,",","."); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($rataman as $m ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo number_format($m['rata'],2,",","."); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($manlain as $ml ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo number_format($ml['rata'],2,",","."); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($ratajumsks as $ratasks ) { 
							  	?>
							 	<td bgcolor="#98FB98"><?php echo number_format($ratasks['rata'],2,",","."); ?></td>
							 	<?php } ?>
							 	
			 				</tr>
							</tbody>

		</table>
