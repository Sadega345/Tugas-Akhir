<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.1.1.1 : PEMBIAYAAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 6.1.1.1 : PEMBIAYAAN</p>
<table border="1" width="50%">
		<thead>
			<tr>
				 <th rowspan="2">Sumber Dana</th>
				 <th rowspan="2">Jenis Dana</th>
				 <th colspan="3">Jumlah Dana (juta rupiah)</th>
				 <th rowspan="2">Total</th>
			 </tr>
			 <tr>
			 	<th>TS-2</th>
			 	<th>TS-1</th>
			 	<th>TS</th>
			 </tr>
		</thead>
		<tbody>

		<tr>
		 	<td rowspan="4">Usaha Sendiri</td>
		 	<td>Beasiswa Yayasan</td>
		 	<?php
				foreach ($dana1 as $a ) { 
			?>
			<td><?php echo $a['ts_2'] ?></td>
			<td><?php echo $a['ts_1'] ?></td>
			<td><?php echo $a['ts'] ?></td>
			<td><?php echo $a['total1'] ?></td>
			<?php } ?>	 
		 </tr>
		 <tr>
		 	<td>Hibah Yayasan</td>
		 	<?php
				foreach ($dana2 as $a ) { 
			?>
			<td><?php echo $a['ts_2'] ?></td>
			<td><?php echo $a['ts_1'] ?></td>
			<td><?php echo $a['ts'] ?></td>
			<td><?php echo $a['total2'] ?></td>
			<?php } ?>
		 </tr>
		 <tr>
		 	<td>Hibah Unit Usaha (PT Pasim Sentra Utama)</td>
		 	<?php
				foreach ($dana3 as $a ) { 
			?>
			<td><?php echo $a['ts_2'] ?></td>
			<td><?php echo $a['ts_1'] ?></td>
			<td><?php echo $a['ts'] ?></td>
			<td><?php echo $a['total3'] ?></td>
			<?php } ?>
		 </tr>
		 <tr>
		 	<td>Jumlah dana dari usaha sendiri</td>
		 	<?php
				foreach ($jml1 as $a ) { 
			?>
			<td><?php echo $a['jum2'] ?></td>
			<td><?php echo $a['jum1'] ?></td>
			<td><?php echo $a['jum'] ?></td>
			<td><?php echo $a['totals1'] ?></td>
			<?php } ?>
		 </tr>
		  <tr>
		 	<td rowspan="4">Mahasiswa</td>
		 	<td>Pendaftaran</td>
		 	<?php
				foreach ($dana4 as $a ) { 
			?>
			<td><?php echo $a['ts_2'] ?></td>
			<td><?php echo $a['ts_1'] ?></td>
			<td><?php echo $a['ts'] ?></td>
			<td><?php echo $a['total4'] ?></td>
			<?php } ?>
		 </tr>
		 <tr>
		 	<td>Biaya Registrasi</td>
		 	<?php
				foreach ($dana5 as $a ) { 
			?>
			<td><?php echo $a['ts_2'] ?></td>
			<td><?php echo $a['ts_1'] ?></td>
			<td><?php echo $a['ts'] ?></td>
			<td><?php echo $a['total5'] ?></td>
			<?php } ?>
		 </tr>
		 <tr>
		 	<td>Biaya Kuliah</td>
		 	<?php
				foreach ($dana6 as $a ) { 
			?>
			<td><?php echo $a['ts_2'] ?></td>
			<td><?php echo $a['ts_1'] ?></td>
			<td><?php echo $a['ts'] ?></td>
			<td><?php echo $a['total6'] ?></td>
			<?php } ?>
		 </tr>
		 <tr>
		 	<td>Jumlah dana dari Mahasiswa</td>
		 	<?php
				foreach ($jml2 as $a ) { 
			?>
			<td><?php echo $a['jml2'] ?></td>
			<td><?php echo $a['jml1'] ?></td>
			<td><?php echo $a['jml'] ?></td>
			<td><?php echo $a['totals2'] ?></td>
			<?php } ?>
		 </tr>
		  <tr>
		 	<td rowspan="2">Pemerintah</td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 </tr>
		<tr>
		 	<td><center><strong>Jumlah dana dari Pemerintah</strong></center></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 	<td></td>
		 </tr>
		 <tr>
		 	<td rowspan="4">Sumber Lain</td>
		 	<td>Alumni</td>
		 	<?php
				foreach ($dana7 as $a ) { 
			?>
			<td><?php echo $a['ts_2'] ?></td>
			<td><?php echo $a['ts_1'] ?></td>
			<td><?php echo $a['ts'] ?></td>
			<td><?php echo $a['total7'] ?></td>
			<?php } ?>
		 </tr>
		 <tr>
		 	<td>Hibah Penelitian</td>
		 	<?php
				foreach ($dana8 as $a ) { 
			?>
			<td><?php echo $a['ts_2'] ?></td>
			<td><?php echo $a['ts_1'] ?></td>
			<td><?php echo $a['ts'] ?></td>
			<td><?php echo $a['total8'] ?></td>
			<?php } ?>
		 </tr>
		 <tr>
		 	<td>Hibah Pengabdian</td>
		 	<?php
				foreach ($dana9 as $a ) { 
			?>
			<td><?php echo $a['ts_2'] ?></td>
			<td><?php echo $a['ts_1'] ?></td>
			<td><?php echo $a['ts'] ?></td>
			<td><?php echo $a['total9'] ?></td>
			<?php } ?>
		 </tr>
		 <tr>
		 	<td>Jumlah dana dari sumber lain</td>
		 	<?php
				foreach ($jml4 as $a ) { 
			?>
			<td><?php echo $a['jumlah2'] ?></td>
			<td><?php echo $a['jumlah1'] ?></td>
			<td><?php echo $a['jumlah'] ?></td>
			<td><?php echo $a['totals4'] ?></td>
			<?php } ?>
		 </tr>
		<tr>
		 	<td colspan="2"><center><strong>Total*</strong></center></td>
		 	 <?php
				foreach ($total as $a ) { 
			?>
			<td><?php echo $a['total1'] ?></td>
			<td><?php echo $a['total2'] ?></td>
			<td><?php echo $a['total3'] ?></td>
			<td><?php echo $a['totals'] ?></td>
			<?php } ?>
		 </tr>
		</tbody>
	</table>

