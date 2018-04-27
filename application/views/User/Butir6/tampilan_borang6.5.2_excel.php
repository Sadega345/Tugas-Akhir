<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.5.2 : AKSESIBILITAS TIAP JENIS DATA.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.5.2 : AKSESIBILITAS TIAP JENIS DATA</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">No</th>
				 <th rowspan="2">Jenis Data</th>
				 <th colspan="4">Sistem Pengolahan Data</th>
			 </tr>
			 <tr>
			 	<th>Secara Manual</th>
			 	<th>Dengan Komputer Tanpa Jaringan</th>
			 	<th>Dengan Komputer Jaringan Lokal (LAN)</th>
			 	<th>Dengan Komputer Jaringan Luas (WAN)</th>
			 </tr>
			 <tr align="center">
			 	<th>(1)</th>
			 	<th>(2)</th>
			 	<th>(3)</th>
			 	<th>(4)</th>
			 	<th>(5)</th>
			 	<th>(6)</th>
			 </tr>
		</thead>
		<tbody>
			 <tr>
			 	<td>1</td>
			 	<td>Mahasiswa</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>2</td>
			 	<td>Kartu Rencana Studi (KRS)</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			  <tr>
			 	<td>3</td>
			 	<td>Jadwal Mata Kuliah</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>4</td>
			 	<td>Nilai Mata Kuliah</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>5</td>
			 	<td>Transkrip Akademik</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>6</td>
			 	<td>Lulusan</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			  <tr>
			 	<td>7</td>
			 	<td>Dosen</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			  <tr>
			 	<td>8</td>
			 	<td>Pegawai</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			  <tr>
			 	<td>9</td>
			 	<td>Keuangan</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			  <tr>
			 	<td>10</td>
			 	<td>Inventaris</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td>11</td>
			 	<td>Perpustakaan</td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
			 <tr>
			 	<td colspan="2">Total</td>
			 <?php 
				foreach ($totmanual as $d ) { 
			 ?>
			 	<td><?php echo $d['Tot_Manual']; ?></td>
			 <?php } ?>
			 	<?php 
				foreach ($totkomp as $d ) { 
			 ?>
			 	<td><?php echo $d['Tot_Komp']; ?></td>
			 <?php } ?>
			 	<?php 
				foreach ($totlan as $d ) { 
			 ?>
			 	<td><?php echo $d['Tot_Lan']; ?></td>
			 <?php } ?>
			 	<?php 
				foreach ($totwan as $d ) { 
			 ?>
			 	<td><?php echo $d['Tot_Wan']; ?></td>
			 <?php } ?>
			 	
			 </tr>
		</tbody>
		</table>
