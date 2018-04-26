<?php 

header("Content-type: application/octet-stream");

// header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA Butir 5.2.2 : WAKTU PELAKSANAAN REAL PROSES BELAJAR MENGAJAR</p>
<table border="1" width="50%">
		<thead>
			<tr>
				 <td>Teori</td>
				<?php 
					foreach ($data as $d ) { 
				?>
				 <td><?php echo $d['teori']; ?></td>
				 <?php } ?>
				 
				 <td>Jam per paket program</td>
			 </tr>
			 <tr>
				 <td>Praktek</td>
				 <?php 
					foreach ($data as $d ) { 
				?>
				 <td><?php echo $d['praktek']; ?></td>
				 <?php } ?>
				 <td>Jam per paket program</td>
			 </tr>
			 <tr>
				 <td>Praktikum</td>
				 <?php 
					foreach ($data as $d ) { 
				?>
				 <td><?php echo $d['praktikum']; ?></td>
				 <?php } ?>
				 <td>Jam per paket program</td>
			 </tr>
			 <tr>
				 <td>Praktek Kerja lapangan</td>
				 <?php 
					foreach ($data as $d ) { 
				?>
				 <td><?php echo $d['pkl']; ?></td>
				 <?php } ?>
				 <td>Jam per paket program</td>
			 </tr>
		</thead>
</table>
