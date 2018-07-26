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
				 <th rowspan="2" bgcolor="#D3D3D3">Tahun Akademik</th>
				 <th rowspan="2" bgcolor="#D3D3D3">Daya Tampung</th>
				 <th colspan="2" bgcolor="#D3D3D3">Jumlah Calon Mahasiswa</th>
				 <th colspan="2" bgcolor="#D3D3D3">Jumlah Mahasiswa Baru</th>
				 <th colspan="2" bgcolor="#D3D3D3">Jumlah Total Mahasiswa</th>
				 <th colspan="2" bgcolor="#D3D3D3">Jumlah Lulusan</th>
				 <th colspan="3" bgcolor="#D3D3D3">IPK Lulusan Reguler</th>
				 <th colspan="3" bgcolor="#D3D3D3">Persen Lulusan Reguler dengan IPK:</th>
			 </tr>
			 <tr>
			 	<th bgcolor="#D3D3D3">Ikut Seleksi</th>
			 	<th bgcolor="#D3D3D3">Lulus Seleksi</th>
			 	<th bgcolor="#D3D3D3">Reguler Bukan Transfer</th>
			 	<th bgcolor="#D3D3D3">Transfer</th>
			 	<th bgcolor="#D3D3D3">Reguler Bukan Transfer</th>
			 	<th bgcolor="#D3D3D3">Transfer</th>
			 	<th bgcolor="#D3D3D3">Reguler Bukan Transfer</th>
			 	<th bgcolor="#D3D3D3">Transfer</th>
			 	<th bgcolor="#D3D3D3">Min</th>
			 	<th bgcolor="#D3D3D3">Rat</th>
			 	<th bgcolor="#D3D3D3">Mak</th>
			 	<th bgcolor="#D3D3D3">>2.75</th>
			 	<th bgcolor="#D3D3D3">2.75-3.50</th>
			 	<th bgcolor="#D3D3D3">>3.50</th>
			 </tr>
		</thead>
<tbody>
								 <?php 
									$no=4; 
									foreach ($data as $d ) { 
								?>
								 <tr>
								 	<td bgcolor="#D3D3D3">TS- <?php echo $no--; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['dy_tampung']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['jc_mhs_ikt_seleksi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['jc_mhs_lls_seleksi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_maba_reg_bkn_trf']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_maba_trf']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_tot_reg_bkn_trf']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_tot_trf']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_llsn_reg_bkn_trf']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_llsn_trf']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['ipk_min'],2,',',','); ?></td> 
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['ipk_rat'],2,',',','); ?></td>
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['ipk_mak'],2,',',','); ?></td>
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['PRSN_IPK1'],2,',',','); ?></td>
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['PRSN_IPK2'],2,',',','); ?></td>
								 	<td bgcolor="#FFFF00"><?php echo number_format((double)$d['PRSN_IPK3'],2,',',','); ?></td>
								 </tr>
			
								<?php } ?>
								 <tr>
								 	<td bgcolor="#D3D3D3">Jumlah</td>
								 	<?php 
							 			foreach ($jumdtampung as $jum) {
							 		?>
								 	<td bgcolor="#9ACD32"><?php echo $jum['Daya_Tampung']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($iseleksi as $i) {
							 		?>
								 	<td bgcolor="#9ACD32"><?php echo $i['Ikut_seleksi']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($llsseleksi as $i) {
							 		?>
								 	<td bgcolor="#9ACD32"><?php echo $i['llsseleksi']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($barubkntransfer as $i) {
							 		?>
								 	<td bgcolor="#9ACD32"><?php echo $i['barubkntransfer']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($barutransfer as $i) {
							 		?>
								 	<td bgcolor="#9ACD32"><?php echo $i['Baru_transfer']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($totbukantransfer as $i) {
							 		?>
								 	<td bgcolor="#9ACD32"><?php echo $i['Tot_BukanTransfer']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($tottransfer as $i) {
							 		?>
								 	<td bgcolor="#9ACD32"><?php echo $i['Tot_transfer']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($lulusanregbukantransfer as $i) {
							 		?>
								 	<td bgcolor="#9ACD32"><?php echo $i['Lulusan_RegBukanTransfer']; ?></td>
								 	<?php } ?>

								 	<?php 
							 			foreach ($jumlulusantransfer as $i) {
							 		?>
								 	<td bgcolor="#9ACD32"><?php echo $i['Jumlah_LulusanTransfer']; ?></td>
								 	<?php } ?>
									 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	
								 	 
								 </tr>	
								 <tr>
								 	<td bgcolor="#D3D3D3">Rataan</td>
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
								 	<td bgcolor="#9ACD32"><?php echo number_format((double)$r['rata'],2,',',','); ?></td>
								 	<td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 	 <td style="background-color: #D3D3D3"></td>
								 
								 <?php } ?>
								 </tr>
							</tbody>
	</table>

