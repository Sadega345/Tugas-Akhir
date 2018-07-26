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
									 <th bgcolor="#D3D3D3">Tahun</th>
									 <th bgcolor="#D3D3D3">Jumlah Lulusan yang Diwisuda pada</th>
									 <th bgcolor="#D3D3D3">Nama Lembaga (Instansi/Industri)</th>
									 <th bgcolor="#D3D3D3">Jumlah Lulusan yang dipesan</th>
									 <th bgcolor="#D3D3D3">Jumlah Lulusan yang diterima</th>

								 </tr>
							</thead>
							<tbody>
								<?php 
								foreach ($jml_wsd4 as $j) {
									foreach ($row1 as $r) {
								?>
								<tr>
								 	<td rowspan="<?php echo $r['row']; ?>">TS-4</td>
								 	<td rowspan="<?php echo $r['row']; ?>" bgcolor="#FFFF00"><?php echo $j['jml_wsd4'] ?></td>
								 	<?php }} ?>
								 	<?php 
										foreach ($data4 as $d ) { 
									?>
								 	<td bgcolor="#FFFF00"><?php echo $d['instansi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_terima']; ?></td>
								 </tr>
								 <?php } ?>
								 <tr>
								 	<?php foreach ($jml_wsd3 as $j) {
								 			foreach ($row2 as $r) {
								 	?>
								 	<td rowspan="<?php echo $r['row']; ?>">TS-3</td>
								 	<td rowspan="<?php echo $r['row']; ?>" bgcolor="#FFFF00"><?php echo $j['jml_wsd3'] ?></td>
								 	<?php } }?>
								 	 <?php 
										foreach ($data3 as $d ) { 
									?>
								 	<td bgcolor="#FFFF00"><?php echo $d['instansi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_terima']; ?></td>
								 </tr>
								 <?php } ?>
								  <tr>
									<?php foreach ($jml_wsd2 as $j) {
										foreach ($row3 as $r) {
									?>
								 	<td rowspan="<?php echo $r['row']; ?>">TS-2</td>
								 	<td rowspan="<?php echo $r['row']; ?>" bgcolor="#FFFF00"><?php echo $j['jml_wsd2'] ?></td>
								 	<?php }} ?>
								 	 <?php 
										foreach ($data2 as $d ) { 
									?>
								 	<td bgcolor="#FFFF00"><?php echo $d['instansi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_terima']; ?></td>
								 </tr>
								 <?php } ?>
								<tr>
									<?php foreach ($jml_wsd1 as $j) {
										foreach ($row4 as $r) {
									?>
								 	<td rowspan="<?php echo $r['row']; ?>">TS-1</td>
								 	<td rowspan="<?php echo $r['row']; ?>" bgcolor="#FFFF00"><?php echo $j['jml_wsd1'] ?></td>
								 	<?php }} ?>
								 	 <?php 
										foreach ($data1 as $d ) { 
									?>
								 	<td bgcolor="#FFFF00"><?php echo $d['instansi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_terima']; ?></td>
								 </tr>
								 <?php } ?>
								 <tr>
									<?php foreach ($jml_wsd as $j) {
										foreach ($row5 as $r) {
									?>
								 	<td rowspan="<?php echo $r['row']; ?>">TS</td>
								 	<td rowspan="<?php echo $r['row']; ?>" bgcolor="#FFFF00"><?php echo $j['jml_wsd'] ?></td>
								 	<?php } }?>
								 	 <?php 
										foreach ($data as $d ) { 
									?>
								 	<td bgcolor="#FFFF00"><?php echo $d['instansi']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_psn']; ?></td>
								 	<td bgcolor="#FFFF00"><?php echo $d['j_lulusan_terima']; ?></td>
								 </tr>
								 <?php } ?>
								<tr>
									<th>Total</th>
									<?php 
							 			foreach ($jmllulusan_wsd as $jum) {
							 		?>
								 	<th bgcolor="#9ACD32"><?php echo $jum['jmllulusan_wsd']; ?></th>
								 	<?php } ?>
								 	<th bgcolor="#9ACD32"></th>
								 	<?php foreach ($jml as $j) {?>
								 	<th bgcolor="#9ACD32"><?php echo $j['jmllulusan_psn'] ?></th>
								 	<th bgcolor="#9ACD32"><?php echo $j['jmllulusan_trm'] ?></th>
								 	<?php } ?>
								</tr>
							</tbody> 
						</table>