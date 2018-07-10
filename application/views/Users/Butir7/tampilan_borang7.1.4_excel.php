<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 7.1.4 : HAK ATAS KEKAYAAN INTELEKTUAL.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 7.1.4 : HAK ATAS KEKAYAAN INTELEKTUAL</p>
<table border="1" width="50%">
		<thead>
			<tr>
				 <th><center>No</center></th>
				 <th><center>Karya *</center></th>
				 
			 </tr>
		</thead>
		<tbody>
			<?php 
				$no=1;
				foreach ($data as $d) {
			 ?>
			 <tr>
			 	<td><?php echo $no++; ?></td>
			 	<td><?php echo $d['karya']; ?></td>
			 </tr>
			<?php } ?>
		</tbody>
	</table>
