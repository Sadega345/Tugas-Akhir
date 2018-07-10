<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=TABEL DATA BUTIR 3.2.1 : MAHASISWA DAN LULUSAN.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p>TABEL DATA BUTIR 3.2.1 : MAHASISWA DAN LULUSAN</p>
<table border="1" width="50%">
		<thead>
								<tr>
									 <th>No.</th>
									 <th>Program Studi</th>
									 <th>Rata-rata Masa Studi (tahun)*</th>
									 <th>Rata-rata IPK Lulusan*</th>
									 <!-- <th rowspan="2">Aksi</th> -->
								 </tr>
							</thead>
							<tbody>
								<?php 
									$no=1;
									foreach ($masastudi as $m) {
								 ?>
								<tr>
								 	<td><?php echo $no++; ?></td>
								 	<td><?php echo $m['prodi'] ?></td>
								 	<td><?php echo $m['rata_masa_std'] ?></td>
								 	<td><?php echo $m['rata_ipk'] ?></td>
								 	<!-- <td class="center">
										<a href="<?php echo base_url()."index.php/Aps_b321_excel/ubah/".$m['id'];?>" >Edit</a>
									</td> -->
								 </tr>
								 <?php } ?>
								 <tr>
								 	<td colspan="2">Rata-rata di Unit Pengelola**</td>
								 	<?php 
								 		foreach ($rata as $r) {
								 	 ?>
								 	 <td><?php echo $r['rata_mastud'] ?></td>
								 	 <td><?php echo $r['rata2'] ?></td>
								 	 <?php } ?>
								 </tr>
							</tbody>
	</table>
