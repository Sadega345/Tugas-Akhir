<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Identitas Program Studi.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<p align="center" style="color: red"><strong>IDENTITAS PROGRAM STUDI</strong></p>
 <table widtd="50%">
 <tdead>
 								
		<?php 
			
			foreach ($data as $d ) { 
		?>
		<tr>
			<td><strong>Program Studi</strong></td>
			<td style="background-color: yellow; border: 1px solid black;" ><?php echo $d['PRODI']; ?></td> 
			<td><strong>Kode sesuai kode PPDT</strong></td>
			<td style="background-color: #F0FFF0; border: 1px solid black;"><?php echo $d['KODE_PRODI']; ?></td>
		 </tr>
		 <tr>
			<td><strong>Jurusan/Departemen</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['jurusan']; ?></td>
		 </tr>
		 <tr>
			<td><strong>Fakultas</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['NAMA_FAKULTAS']; ?></td>
		 </tr>
		 <tr>
			<td><strong>Perguruan Tinggi</strong></td>
			<td style="background-color: yellow; border: 1px solid black;"><?php echo $d['NAMA_PT']; ?></td>
			<td><strong>Kode sesuai kode PPDT</strong></td>
			<td style="background-color: #F0FFF0; border: 1px solid black; "><?php echo $d['kode_pt'] ?></td>
		 </tr>
		  <tr>
			 <td><strong>SK Pendirian PS</strong></td>
		 </tr>
		 <tr>
			<td><strong>&emsp;Nomor SK</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['NO_SK_PS']; ?></td>
		 </tr>
		 <tr>
			<td><strong>&emsp;Tanggal SK</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['TGL_SK_PS']; ?></td>
		 </tr>
		 <tr>
			<td><strong>&emsp;Pejabat penandatangan</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['PJBT_TTD']; ?></td>
		 </tr>
		 <tr>
		 	<!-- <td style="vertical-align:top">6.</td> -->
			<td><strong>Bulan dan tahun dimulainya <br>penyelenggaraan PS</strong></td>
			<td style="vertical-align:top" style="background-color: yellow; border: 1px solid black; "><?php echo $d['BLN_MULAI_PS']; ?> &nbsp;&nbsp; <?php echo $d['THN_MULAI_PS']; ?></td>
		 </tr>
		 <tr>
			<td><strong>SK Ijin operasional</strong></td>
		 </tr>
		 <tr>
			<td><strong>&emsp;Nomor SK</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['NO_SK_OPR']; ?></td>
		 </tr>
		 <tr>
			<td><strong>&emsp;Tanggal SK</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['TGL_SK_OPR']; ?></td>
		 </tr>
		 <tr>
			<td><strong>Akreditasi terakhir BAN-PT</strong></td>
		 </tr>
		 <tr>
			<td><strong>&emsp;Peringkat</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['PERINGKAT']; ?></td>
		 </tr>
		 <tr>
			<td><strong>&emsp;Nilai</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['NILAI']; ?></td>
		 </tr>
		 <tr>
			<td><strong>&emsp;Nomor SK BAN-PT</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['NO_SK_BAN_PT']; ?></td>
		 </tr>
		 <tr>
			<td><strong>Alamat PS</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['ALAMAT_PS']; ?></td>
		 </tr>
		 <tr>
			<td><strong>No telepon PS</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['NO_TELP_PS']; ?></td>
		 </tr>
		 <tr>
			<td><strong>Nomor Faksimili PS</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['NO_FAX_PS']; ?></td>
		 </tr>
		 <tr>
			<td><strong>Homepage PS</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['HOMEPAGE_PS']; ?></td>
		 </tr>
		 <tr>
			<td><strong>Email PS</strong></td>
			<td style="background-color: yellow; border: 1px solid black; "><?php echo $d['EMAIL_PS']; ?></td>
		 </tr>
		 <?php } ?>
	</tdead>