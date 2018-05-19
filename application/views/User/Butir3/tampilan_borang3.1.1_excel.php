<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN</p>
<p>3.1.1 Tuliskan data seluruh mahasiswa reguler dan lulusannya dalam lima tahun terakhir pada tabel berikut:</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th rowspan="2">Tahun Akademik</th>
				 <th rowspan="2">Daya Tampung</th>
				 <th colspan="2">Jumlah Calon Mahasiswa</th>
				 <th colspan="2">Jumlah Mahasiswa Baru</th>
				 <th colspan="2">Jumlah Total Mahasiswa</th>
				 <th colspan="2">Jumlah Lulusan</th>
				 <th colspan="3">IPK Lulusan Reguler</th>
				 <th colspan="3">Persen Lulusan Reguler dengan IPK:</th>
			 </tr>
			 <tr>
			 	<th>Ikut Seleksi</th>
			 	<th>Lulus Seleksi</th>
			 	<th>Reguler Bukan Transfer</th>
			 	<th>Transfer</th>
			 	<th>Reguler Bukan Transfer</th>
			 	<th>Transfer</th>
			 	<th>Reguler Bukan Transfer</th>
			 	<th>Transfer</th>
			 	<th>Min</th>
			 	<th>Rat</th>
			 	<th>Mak</th>
			 	<th>>2.75</th>
			 	<th>2.75-3.50</th>
			 	<th>>3.50</th>
			 </tr>
		</thead>
		<tbody>
			 <tr align="center">
			 	<td>(1)</td>
			 	<td>(2)</td>
			 	<td>(3)</td>
			 	<td>(4)</td>
			 	<td>(5)</td>
			 	<td>(6)</td>
			 	<td>(7)</td>
			 	<td>(8)</td>
			 	<td>(9)</td>
			 	<td>(10)</td>
			 	<td>(11)</td>
			 	<td>(12)</td>
			 	<td>(13)</td>
			 	<td>(14)</td>
			 	<td>(15)</td>
			 	<td>(16)</td>
			 </tr>
			 <?php 
									$no=4; 
									foreach ($data as $d ) { 
								?>
								 <tr>
								 	<td>TS- <?php echo $no--; ?></td>
								 	<td><?php echo $d['dy_tampung']; ?></td>
								 	<td><?php echo $d['jc_mhs_ikt_seleksi']; ?></td>
								 	<td><?php echo $d['jc_mhs_lls_seleksi']; ?></td>
								 	<td><?php echo $d['j_maba_reg_bkn_trf']; ?></td>
								 	<td><?php echo $d['j_maba_trf']; ?></td>
								 	<td><?php echo $d['j_tot_reg_bkn_trf']; ?></td>
								 	<td><?php echo $d['j_tot_trf']; ?></td>
								 	<td><?php echo $d['j_llsn_reg_bkn_trf']; ?></td>
								 	<td><?php echo $d['j_llsn_trf']; ?></td>
								 	<td><?php echo $d['ipk_min']; ?></td>
								 	<td><?php echo $d['ipk_rat']; ?></td>
								 	<td><?php echo $d['ipk_mak']; ?></td>
								 	<td><?php echo $d['PRSN_IPK1']; ?></td>
								 	<td><?php echo $d['PRSN_IPK2']; ?></td>
								 	<td><?php echo $d['PRSN_IPK3']; ?></td>
								 </tr>
			
								<?php } ?>
								 <tr>
								 	<td>Jumlah</td>
								 	<?php 
							 			foreach ($jumdtampung as $jum) {
							 		?>
								 	<td><?php echo $jum['Daya_Tampung']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($iseleksi as $i) {
							 		?>
								 	<td><?php echo $i['Ikut_seleksi']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($barutransfer as $i) {
							 		?>
								 	<td><?php echo $i['Baru_transfer']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($totbukantransfer as $i) {
							 		?>
								 	<td><?php echo $i['Tot_BukanTransfer']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($tottransfer as $i) {
							 		?>
								 	<td><?php echo $i['Tot_transfer']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($lulusanregbukantransfer as $i) {
							 		?>
								 	<td><?php echo $i['Lulusan_RegBukanTransfer']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($jumlulusantransfer as $i) {
							 		?>
								 	<td><?php echo $i['Jumlah_LulusanTransfer']; ?></td>
								 	<?php } ?>

								 </tr>	
								 <tr>
								 	<td>Rataan</td>
								 	<td colspan="15">3.59</td>
								 </tr>
		</tbody>
	</table>
	<p>Catatan:
	<br>TS:Tahun akademik penuh terakhir saat pengisian borang
	<br>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum
	<br>Mahasiswa program reguler adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus)
	<br>Mahasiswa program non-reguler adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu
	<br>Mahasiswa transfer adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT 
	</p>
