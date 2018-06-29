<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
	<p> TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN</p>

	<h3>Diisi oleh PS D3</h3>
	<table border="1" width="50%">
	<thead>
		<tr>
			 <th rowspan="2">Tahun Masuk</th>
			 <th colspan="5">Jumlah Mahasiswa Reguler per Angkatan pada Tahun<br>
			 (tidak memasukkan mahasiswa transfer)</th>
			 <th rowspan="2">Jumlah Lulusan<br>s.d. TS</th>
		 </tr>
		 <tr>
		 	<th>TS-4</th>
		 	<th>TS-3</th>
		 	<th>TS-2</th>
		 	<th>TS-1</th>
		 	<th>TS</th>
		 </tr>
	</thead>
	<tbody>
		<?php 
			$no=4; 
			foreach ($data3 as $d ) { 
		?>
		 	<tr>
		 	<td>TS- <?php echo $no--; ?></td>
		 	<td><?php echo$d['ts_4']; ?></td>
		 	<td><?php echo$d['ts_3']; ?></td>
		 	<td><?php echo$d['ts_2']; ?></td>
		 	<td><?php echo$d['ts_1']; ?></td>
		 	<td><?php echo$d['ts']; ?></td>
		 	<td><?php echo$d['jml_ts_llsan']; ?></td>
		 </tr>	
		 <?php } ?>
		 
	</tbody>
	</table>