<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA Pengisi Prodi</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				<th></th>
				<th></th>
				<th></th>
				<th>Kode sesuai kode PPDT</th>
				<th>Keterangan</th>
			</tr>
			<tr>
				<th>1.</th>
				<th>Program Studi</th>
				<th><input type="text" name="programstudi"> <input type="" name=""></th>
				<!-- <th><input type="text" name="ppdt"></th> -->
			 </tr>
			 <tr>
			 	<th>2.</th>
				<th>Jurusan/Departemen</th>
				<th><input type="text" name="departemen"></th>
			 </tr>
			 <tr>
			 	<th>3.</th>
				<th>Fakultas</th>
				<th><input type="text" name="fakultas"></th>
			 </tr>
			 <tr>
			 	<th>4.</th>
				<th>Perguruan Tinggi</th>
				<th><input type="text" name="perguruan"></th>
				<th><input type="text" name=""></th>
			 </tr>
			  <tr>
			  	 <th>5.</th>
				 <th>SK Pendirian PS</th>
			 </tr>
			 <tr>
			 	<th></th>
				<th>Nomor SK</th>
				<th><input type="text" name="nosk"></th>
			 </tr>
			 <tr>
			 	<th></th>
				<th>Tanggal SK</th>
				<th><input type="text" name="tanggal"></th>
			 </tr>
			 <tr>
			 	<th></th>
				<th>Pejabat penandatangan</th>
				<th><input type="text" name="pejabat"></th>
			 </tr>
			 <tr>
			 	<th>6.</th>
				<th>Bulan dan tahun dimulainya penyelenggaraan PS</th>
				<th>
					<select>
						<option>Januari</option>
						<option>Februari</option>
						<option>Maret</option>
						<option>April</option>
						<option>Mei</option>
						<option>Juni</option>
						<option>Juli</option>
						<option>Agustus</option>
					</select>
				</th>
			 </tr>
			 <tr>
			 	<th>7.</th>
				<th>SK Ijin operasional</th>
			 </tr>
			 <tr>
			 	<th></th>
				<th>Nomor SK</th>
				<th><input type="text" name="nosk"></th>
			 </tr>
			 <tr>
			 	<th></th>
				<th>Tanggal SK</th>
				<th><input type="text" name="tanggalsk"></th>
			 </tr>
			 <tr>
			 	<th>8.</th>
				<th>Akreditasi terakhir BAN-PT</th>
			 </tr>
			 <tr>
			 	<th></th>
				<th>Peringkat</th>
				<th><input type="text" name="peringkat"></th>
			 </tr>
			 <tr>
			 	<th></th>
				<th>Nilai</th>
				<th><input type="text" name="nilai"></th>
			 </tr>
			 <tr>
			 	<th></th>
				<th>Nomor SK BAN-PT</th>
				<th><input type="text" name="noskban"></th>
			 </tr>
			 <tr>
			 	<th>9.</th>
				<th>Alamat PS</th>
				<th><textarea rows="4" cols="50"></textarea></th>
			 </tr>
			 <tr>
			 	<th>10.</th>
				<th>No telepon PS</th>
				<th><input type="text" name="notelponps"></th>
			 </tr>
			 <tr>
			 	<th>11.</th>
				<th>Nomor Faksimili PS</th>
				<th><input type="text" name="nofaksimili"></th>
			 </tr>
		</thead>
		
	</table>