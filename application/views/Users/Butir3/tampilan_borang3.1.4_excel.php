<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>  TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">Tahun Masuk</th>
				 <th colspan="7">Jumlah Mahasiswa Reguler per Angkatan pada Tahun<br>
				 (tidak memasukkan mahasiswa transfer)</th>
				 <th rowspan="2">Jumlah Lulusan<br>s.d. TS</th>
			 </tr>
			 <tr>
			 	<th>TS-6</th>
			 	<th>TS-5</th>
			 	<th>TS-4</th>
			 	<th>TS-3</th>
			 	<th>TS-2</th>
			 	<th>TS-1</th>
			 	<th>TS</th>
			 </tr>
		</thead>
		<tbody>
			 <tr>
			 	<td>TS-6</td>
			 </tr>	
			 <tr>
			 	<td>TS-5</td>
			 </tr>
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
		</tbody>
	</table>