<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN</p>
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
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 </tr>	
								 <tr>
								 	<td>Rataan</td>
								 	<?php 
								 		foreach ($rata as $r) {
								 	 ?>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	<td><?php echo $r['rata']; ?></td>
								 	<td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 <?php } ?>
								 </tr>
		</tbody>
	</table>

