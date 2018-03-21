<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">Tahun Akademik</th>
				 <th rowspan="2">Daya Tampung</th>
				 <th colspan="2">Jumlah calon mahasiswa</th>
				 <th colspan="2">Jumlah Mahasiswa baru</th>
				 <th colspan="2">Jumlah total mahasiswa</th>
			 </tr>
			 <tr>
			 	<th>Ikut seleksi</th>
			 	<th>Lulus Seleksi</th>
			 	<th>Non reguler</th>
			 	<th>Transfer</th>
			 	<th>Non reguler</th>
			 	<th>Transfer</th>
			 </tr>
		</thead>
		<tbody>
			 <tr>
			 	<td>TS-4</td>
			 </tr>
			 <tr>
			 	<td>TS-3</td>
			 </tr>
			 <tr>
			 	<td>TS-2</td>
			 </tr>
			 <tr>
			 	<td>TS-1</td>
			 </tr>	
			 <tr>
			 	<td>TS</td>
			 </tr>
			 <tr>
			 	<td>Jumlah</td>
			 </tr>	
		</tbody>
	</table>