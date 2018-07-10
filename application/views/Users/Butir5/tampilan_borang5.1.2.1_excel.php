<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK</p>
<table border="1" width="50%">
	<thead>
		<tr>
			 <th>No</th>
			 <th>Jenis Mata Kuliah</th>
			 <th>SKS</th>
			 <th>Keterangan</th>
			 
		 </tr>
	</thead>
	<tbody>
	<tr>
		<td>1</td>
	 	<td>MATA KULIAH WAJIB</td>
	 	<?php 
		
		foreach ($data1 as $d ) { 
		?>
	 	<td><?php echo $d['sks']; ?></td>
	 	<td><?php echo $d['keterangan']; ?></td>
		 <?php } ?>
	 	
	 </tr>
	 <tr>
		<td>2</td>
	 	<td>MATA KULIAH PILIHAN</td>
	 	<?php 
		
		foreach ($data2 as $d ) { 
		?>
	 	<td><?php echo $d['sks']; ?></td>
	 	<td><?php echo $d['keterangan']; ?></td>
		 <?php } ?>
	 	
	 </tr>
	 <tr>
	 	<td colspan="2">TOTAL</td>
	 	<?php 
	 	foreach ($total as $t) {
		?>
	 	<td><?php echo $t['total']; ?></td>
	 	<?php } ?>
	 </tr>
	</tbody>
</table>
