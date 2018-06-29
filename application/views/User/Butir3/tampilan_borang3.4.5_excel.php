<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>  TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN</p>
	<table border="1" width="50%">
									<thead>
								 <tr>
									 <th>Tahun</th>
									 <th>Jumlah Lulusan yang Diwisuda pada</th>
									 <th>Nama Lembaga (Instansi/Industri)</th>
									 <th>Jumlah Lulusan yang dipesan</th>
									 <th>Jumlah Lulusan yang diterima</th>

								 </tr>
							</thead>
							<tbody>
								<?php 
								foreach ($jml_wsd4 as $j) {?>
								<tr>
								 	<td rowspan="2">TS-4</td>
								 	<td rowspan="2"><?php echo $j['jml_wsd4'] ?></td>
								 	<?php } ?>
								 	<?php 
										foreach ($data4 as $d ) { 
									?>
								 	<td><?php echo $d['instansi']; ?></td>
								 	<td><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td><?php echo $d['j_lulusan_terima']; ?></td>
								 	
								 </tr>
								 <?php } ?>
								 <tr>
								 	<?php foreach ($jml_wsd3 as $j) {?>
								 	<td rowspan="3">TS-3</td>
								 	<td rowspan="3"><?php echo $j['jml_wsd3'] ?></td>
								 	<?php } ?>
								 	 <?php 
										foreach ($data3 as $d ) { 
									?>
								 	<td><?php echo $d['instansi']; ?></td>
								 	<td><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td><?php echo $d['j_lulusan_terima']; ?></td>
								 	
								 </tr>
								 <?php } ?>
								  <tr>
									<?php foreach ($jml_wsd2 as $j) {?>
								 	<td rowspan="4">TS-2</td>
								 	<td rowspan="4"><?php echo $j['jml_wsd2'] ?></td>
								 	<?php } ?>
								 	 <?php 
										foreach ($data2 as $d ) { 
									?>
								 	<td><?php echo $d['instansi']; ?></td>
								 	<td><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td><?php echo $d['j_lulusan_terima']; ?></td>
								 
								 </tr>
								 <?php } ?>
								<tr>
									<?php foreach ($jml_wsd1 as $j) {?>
								 	<td rowspan="5">TS-1</td>
								 	<td rowspan="5"><?php echo $j['jml_wsd1'] ?></td>
								 	<?php } ?>
								 	 <?php 
										foreach ($data1 as $d ) { 
									?>
								 	<td><?php echo $d['instansi']; ?></td>
								 	<td><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td><?php echo $d['j_lulusan_terima']; ?></td>
								 </tr>
								 <?php } ?>
								 <tr>
									<?php foreach ($jml_wsd as $j) {?>
								 	<td rowspan="6">TS</td>
								 	<td rowspan="6"><?php echo $j['jml_wsd'] ?></td>
								 	<?php } ?>
								 	 <?php 
										foreach ($data as $d ) { 
									?>
								 	<td><?php echo $d['instansi']; ?></td>
								 	<td><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td><?php echo $d['j_lulusan_terima']; ?></td>
								 </tr>
								 <?php } ?>
								<tr>
									<th>Total</th>
									<?php 
							 			foreach ($jmllulusan_wsd as $jum) {
							 		?>
								 	<th><?php echo $jum['jmllulusan_wsd']; ?></th>
								 	<?php } ?>
								 	<th></th>
								 	<?php foreach ($jml as $j) {?>
								 	<th><?php echo $j['jmllulusan_psn'] ?></th>
								 	<th><?php echo $j['jmllulusan_trm'] ?></th>
								 	<?php } ?>
								</tr>
							</tbody> 