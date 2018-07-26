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
			 <th rowspan="2" bgcolor="#D3D3D3">Tahun Masuk</th>
			 <th colspan="5" bgcolor="#D3D3D3">Jumlah Mahasiswa Reguler per Angkatan pada Tahun<br>
			 (tidak memasukkan mahasiswa transfer)</th>
			 <th rowspan="2" bgcolor="#D3D3D3">Jumlah Lulusan<br>s.d. TS</th>
		 </tr>
		 <tr>
		 	<th bgcolor="#D3D3D3">TS-4</th>
		 	<th bgcolor="#D3D3D3">TS-3</th>
		 	<th bgcolor="#D3D3D3">TS-2</th>
		 	<th bgcolor="#D3D3D3">TS-1</th>
		 	<th bgcolor="#D3D3D3">TS</th>
		 </tr>
	</thead>
	<tbody>
		<?php 
			$no=4; 
			foreach ($data3 as $d ) { 
		?>
		 	<tr>
		 	<td bgcolor="#D3D3D3">TS- <?php echo $no--; ?></td>
		 	<td bgcolor="#FFFF00"><?php echo$d['ts_4']; ?></td>
		 	<td bgcolor="#FFFF00"><?php echo$d['ts_3']; ?></td>
		 	<td bgcolor="#FFFF00"><?php echo$d['ts_2']; ?></td>
		 	<td bgcolor="#FFFF00"><?php echo$d['ts_1']; ?></td>
		 	<td bgcolor="#FFFF00"><?php echo$d['ts']; ?></td>
		 	<td bgcolor="#FFFF00"><?php echo$d['jml_ts_llsan']; ?></td>
		 </tr>	
		 <?php } ?>
		 
	</tbody>
	</table>