<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 7.2.1 : KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT (PKM).xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 7.2.1 : KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT (PKM)</p>
<table border="1" width="50%">
		<thead>
			 <tr>
				 <th>Sumber Dana Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
				 <th>TS-2</th>
				 <th>TS-1</th>
				 <th>TS</th>
				 <th>Jumlah</th>
			 </tr>
		</thead>
		<tbody>
			<tr>
			 	<td>Pembiayaan sendiri oleh dosen</td>
			 	<?php 
					$no=1; 
					foreach ($data as $d ) { 
				?>
				<td><?php echo $d['JML']; ?></td>
				<td><?php echo $d['JML']; ?></td>
				<td><?php echo $d['JML']; ?></td>
			 	<td><?php echo $d['JML']; ?></td>
			 	<?php } ?>
			 </tr>
			 <tr>
			 	<td>PT yang bersangkutan</td>
			 	<?php 
					$no=1; 
					foreach ($bersangkutan as $b ) { 
				?>
				<td><?php echo $b['JML']; ?></td>
				<td><?php echo $b['JML']; ?></td>
				<td><?php echo $b['JML']; ?></td>
			 	<td><?php echo $b['JML']; ?></td>
			 	<?php } ?>
			 </tr>
			 <tr>
			 	<td>Kemristekdikti</td>
			 	<?php 
					$no=1; 
					foreach ($kemristekdikti as $k ) { 
				?>
				<td><?php echo $k['JML']; ?></td>
				<td><?php echo $k['JML']; ?></td>
				<td><?php echo $k['JML']; ?></td>
			 	<td><?php echo $k['JML']; ?></td>
			 	<?php } ?>
			 </tr>
			  <tr>
			 	<td>Institusi dalam negeri di luar Kemristekdikti</td>
			 	<?php 
					$no=1; 
					foreach ($luarkemristekdikti as $lk ) { 
				?>
				<td><?php echo $lk['JML']; ?></td>
				<td><?php echo $lk['JML']; ?></td>
				<td><?php echo $lk['JML']; ?></td>
			 	<td><?php echo $lk['JML']; ?></td>
			 	<?php } ?>
			 </tr>
			 <tr>
			 	<td>Institusi luar negeri</td>
			 	<?php 
					$no=1; 
					foreach ($luarnegeri as $l ) { 
				?>
				<td><?php echo $l['JML']; ?></td>
				<td><?php echo $l['JML']; ?></td>
				<td><?php echo $l['JML']; ?></td>
			 	<td><?php echo $l['JML']; ?></td>
			 	<?php } ?>
			 </tr>
			 <tr>
			 	<td>Jumlah</td>
			 	<td>6</td>
			 	<td>6</td>
			 	<td>6</td>
			 	<td>18</td>
			 </tr>
			</tbody>
	</table>
