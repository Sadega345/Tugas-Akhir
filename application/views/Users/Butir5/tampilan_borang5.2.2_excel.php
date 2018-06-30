<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA Butir 5.2.2 : WAKTU PELAKSANAAN REAL PROSES BELAJAR MENGAJAR.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p> TABEL DATA Butir 5.2.2 : WAKTU PELAKSANAAN REAL PROSES BELAJAR MENGAJAR</p>
<table border="1" width="50%">
		<table >
								<tr>
									<th></th>
									<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th></th>
									<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th></th>
								</tr>
							
							<thead>
								<tr>
									<td>Teori</td>
									<td></td>									 
									<?php 
										foreach ($data as $d ) { 
									?>
									 <td bgcolor="yellow"><?php echo $d['teori']; ?></td>
									 <?php } ?>
									 <td></td>
									 <td>Jam per paket program</td>
								 </tr>
								 <tr>
									 <td>Praktek</td>
									 <td></td>
									 <?php 
										foreach ($data as $d ) { 
									?>
									 <td bgcolor="yellow"><?php echo $d['praktek']; ?></td>
									 <?php } ?>
									 <td></td>
									 <td>Jam per paket program</td>
								 </tr>
								 <tr>
									 <td>Praktikum</td>
									 <td></td>
									 <?php 
										foreach ($data as $d ) { 
									?>
									 <td bgcolor="yellow"><?php echo $d['praktikum']; ?></td>
									 <?php } ?>
									 <td></td>
									 <td>Jam per paket program</td>
								 </tr>
								 <tr>
									 <td>Praktek Kerja lapangan</td>
									 <td></td>
									 <?php 
										foreach ($data as $d ) { 
									?>
									 <td bgcolor="yellow"><?php echo $d['pkl']; ?></td>
									 <?php } ?>
									 <td></td>
									 <td>Jam per paket program</td>
								 </tr>
							</thead>
</table>
