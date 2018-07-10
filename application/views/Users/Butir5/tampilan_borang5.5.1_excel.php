<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Butir 5.5.1 : PEMBIMBINGAN TUGAS AKHIR ATAU SKRIPSI.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 5.5.1 : PEMBIMBINGAN TUGAS AKHIR ATAU SKRIPSI</p>
<table>
	<tr>
		<td colspan="4"><strong>5.5.1 Jelaskan pelaksanaan pembimbingan Tugas Akhir atau Skripsi yang diterapkan pada PS ini.</strong></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td> > Rata-rata banyaknya mahasiswa per dosen pembimbing tugas akhir (TA):</td>
		<?php foreach ($avg as $a) {
		 ?>
		<td><input type="text" name="avg" value="<?php echo $a['avg']; ?>" readonly></td>
		<?php } ?>
		<td> mahasiswa/dosen TA</td>
	</tr>
	<tr>
		<td></td>
		<td> > Rata-rata jumlah pertemuan dosen-mahasiswa untuk menyelesaikan tugas akhir </td>
		<td><input type="text" name="avg" value="" readonly></td>
		<td>kali dari mulai mengambil TA hingga selesai</td>
	</tr>
	<tr>
		<td></td>
		<td> > Ketersediaan panduan pembimbingan tugas akhir  </td>
		<td><input type="text" name="avg" value="" readonly></td>
		<td></td>
	</tr>
</table>
<br>
<p><strong>Daftar nama dosen pembimbing dan jumlah mahasiswa:</strong></p>
<table border="1" width="50%">
	<thead>
		<tr>
			 <th>No</th>
			 <th>Nama Dosen Pembimbing</th>
			 <th>Jumlah Mahasiswa</th>
			 
		 </tr>
		 <tr align="center">
		 	<td>(1)</td>
		 	<td>(2)</td>
		 	<td>(3)</td>
		 	
		 </tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($data as $d) {
		 ?>
		 <tr>
		 	<td><?php echo $no++; ?></td>
		 	<td><?php echo $d['nama_dosen']; ?></td>
		 	<td><?php echo $d['jml_mhs']; ?></td>
		 	
		 </tr>
		<?php } ?>
	</tbody>
</table>
