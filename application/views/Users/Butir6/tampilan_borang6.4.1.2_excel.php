<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 6.4.1 : Pustaka.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 6.4.1 : Pustaka </p>
<table border="1" width="50%">
	<thead>
		<tr>
			 <th>Jenis</th>
			 <th>No</th>
			 <th>Nama Jurnal</th>
			 <th>Rincian nomor dan tahun</th>
			 <th>Jumlah</th>
			 <th>Aksi</th>
		 </tr>
	</thead>
		<tbody>
			<?php foreach ($row1 as $r) {
			?>
			<tr>
			 	<td rowspan="<?php echo $r['row1'] ?>">Jurnal Terakreditasi DIKTI </td>
				 <?php } ?>
				 <?php 
				 	$no=1;
				 	foreach ($data1 as $d) {
				  ?>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['nm_jurnal']; ?></td>
			 	<td><?php echo $d['rincian']; ?></td>
			 	<td><?php echo $d['jml']; ?></td>
			 	
			 </tr>
			 <?php } ?>
			 	<?php foreach ($row2 as $r) {
			 ?>
			 <tr>
			 	<td rowspan="<?php echo $r['row2']; ?>">Jurnal Internasional</td>
				 <?php } ?>
				 <?php 
				 	$no=1;
				 	foreach ($data2 as $d) {
				  ?>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['nm_jurnal']; ?></td>
			 	<td><?php echo $d['rincian']; ?></td>
			 	<td><?php echo $d['jml']; ?></td>
			 	
			 </tr>
			 <?php } ?>
		</tbody>
	</table>
