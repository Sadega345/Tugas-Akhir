<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir</p>
							<table>
								<tr>
									<td>5.5.2.2</td>
									<td>Rata-rata banyaknya mahasiswa per dosen pembimbing tugas akhir (TA):</td>
									<?php foreach ($rata as $r) {
									?>
									<td bgcolor="#7FFF00"><input type="text" name="rata" value="<?php echo $r['rata']  ?>" readonly></td>
									<?php } ?>
									<td>mahasiswa/dosen TA</td>
								</tr>
								<tr>
									<td>5.5.2.3</td>
									<td>Rata-rata jumlah pertemuan dosen-mahasiswa untuk menyelesaikan tugas akhir </td>
									<td bgcolor="#7FFF00"><input type="text" name="r_jml_pertemuan" value="<?php $r_jml_pertemuan ?>"></td>
									<td>kali dari mulai mengambil TA hingga selesai</td>
									<td class="center"><a href="<?php echo base_url()."index.php/Apd_a552_excel/ubahdata/1";?>" >Edit</a></td>
								</tr>
								<tr>
									<td>></td>
									<td bgcolor="#FFFF00">Ketersediaan panduan pembimbingan tugas akhir </td>
									<td><input type="text" name="ketersediaan" value="<?php $ketersediaan ?>"></td>
									<td></td>
									<td class="center"><a href="<?php echo base_url()."index.php/Apd_a552_excel/ubahdata/1";?>" >Edit</a></td>
								</tr>
							</table>

							<p>5.5.2.4 Daftar nama dosen pembimbing dan jumlah mahasiswa:</p>
							<table border="1" width="50%">
							<thead>
								 <tr>
									 <th>No</th>
									 <th>Nama Dosen Pembimbing</th>
									 <th>Jumlah Mahasiswa</th>
								 </tr>
							</thead>
							<tbody>
							<tr>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							 	<td bgcolor="#D3D3D3"><?php echo $no++; ?></td>
							 	<td bgcolor="#D3D3D3"><?php echo $d['nama_dosen']; ?></td>
							 	<td bgcolor="#D3D3D3"><?php echo $d['jml_mhs']; ?></td>
							 </tr>	
							 <?php } ?>
							 <tr>
							 	<td bgcolor="#7FFF00"></td>
							 	<td bgcolor="#7FFF00"></td>
							 	<?php foreach ($totmahasiswa as $t) {
								 ?>
								 <th bgcolor="#7FFF00"><?php echo $t['jum_mhs']; ?></th>
								<?php } ?>
							 </tr>
							</tbody>
							</table>