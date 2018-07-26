<?php
require_once 'PHPExcel-1.8/Classes/PHPExcel.php'; 
require_once 'PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';

// base_url('libraries/PHPExcel-1.8/Classes/PHPExcel.php');
// base_url('libraries/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');




// // Create new PHPExcel object
$objPHPExcel = new PHPExcel();
$objPHPExcel->setActiveSheetIndex(0);
// Buat print judul
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Jurusan');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Ts-2');  
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Ts-1');  
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Ts');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Dana Penelitian');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Dana 2015');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Dana 2016');

// Buat Bold
$objPHPExcel->getActiveSheet()->getStyle('A1', 'Jurusan')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B1', 'Ts-2')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('C1', 'Ts-1')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('D1', 'Ts')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E1', 'Dana Penelitian')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('F1', 'Dana 2015')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('G1', 'Dana 2016')->getFont()->setBold(true);

$idx = 2;
$data = $this->Aps_b711_model->listing();
$total = $this->Aps_b711_model->total();
foreach ($data as $d) {
 

// Create a first sheet, representing sales data
 

    $objPHPExcel->getActiveSheet()->setCellValue('A'.$idx, $d['jurusan']);  
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$idx, $d['Tot_Ts2']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$idx, $d['Tot_Ts1']); 
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$idx, $d['Tot_Ts']); 
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$idx, $d['Dana_penelitian']); 
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$idx, $d['Jum_Dana2015']); 
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$idx, $d['Jum_Dana2016']); 

    $idx++;
}

$objPHPExcel->getActiveSheet()->setCellValue('A3', 'Total');

// Buat Bold
$objPHPExcel->getActiveSheet()->getStyle('A3', 'Total')->getFont()->setBold(true);
$idxTot=3;
foreach ($total as $t) {
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$idxTot, $t['Tot_Ts2']);  
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$idxTot, $t['Tot_Ts1']); 
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$idxTot, $t['Tot_Ts']); 
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$idxTot, $t['Jum_dana2014']); 
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$idxTot, $t['Jum_dana2015']); 
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$idxTot, $t['Jum_dana2016']);
    $idxTot++;
}



// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Aps-B711');

// Create a new worksheet, after the default sheet
$objPHPExcel->createSheet();
// End of create excel Aps B711


// Add some data to the second sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(1);
// Buat print judul
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'No');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nama');  
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'NIDN');  
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Jabatan');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Tanggal Pengisian');

// Buat Bold
$objPHPExcel->getActiveSheet()->getStyle('A1', 'No')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B1', 'Nama')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('C1', 'NIDN')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('D1', 'Jabatan')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E1', 'Tanggal Pengisian')->getFont()->setBold(true);

$data = $this->Pengisis_model->listing();
$idx = 2;
$no=1;
foreach ($data as $d) {
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$idx, $no);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$idx, $d['nama']);  
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$idx, $d['nidn']); 
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$idx, $d['jabatan']); 
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$idx, $d['tgl_pengisian']); 

    $idx++;
    $no++;
}


// Rename 2nd sheet
$objPHPExcel->getActiveSheet()->setTitle('Pengisi Data Borang');
$objPHPExcel->createSheet();
// End of create excel Pengisi Data Borang

$objPHPExcel->setActiveSheetIndex(2);
// Buat print judul
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(45);

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'No');
$objPHPExcel->getActiveSheet()->setCellValue('D2', 'Kode sesuai kode PPDT');
$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Program Studi');  
$objPHPExcel->getActiveSheet()->setCellValue('B3', 'Jurusan/Departemen');  
$objPHPExcel->getActiveSheet()->setCellValue('B4', 'Fakultas');
$objPHPExcel->getActiveSheet()->setCellValue('B5', 'Perguruan Tinggi');
$objPHPExcel->getActiveSheet()->setCellValue('D5', 'Kode sesuai kode PPDT');
$objPHPExcel->getActiveSheet()->setCellValue('B6', 'SK Pendirian PS');  
$objPHPExcel->getActiveSheet()->setCellValue('B7', 'Nomor SK');  
$objPHPExcel->getActiveSheet()->setCellValue('B8', 'Tanggal SK');
$objPHPExcel->getActiveSheet()->setCellValue('B9', 'Pejabat Penandatangan');
// // $objPHPExcel->getActiveSheet()->getColumnDimension('B9:B10')->setWidth(15);
$objPHPExcel->getActiveSheet()->setCellValue('B10', 'Bulan dan tahun dimulainya penyelenggara PS');
$objPHPExcel->getActiveSheet()->setCellValue('B11', 'SK Ijin operasional');
$objPHPExcel->getActiveSheet()->setCellValue('B12', 'Nomor SK');
$objPHPExcel->getActiveSheet()->setCellValue('B13', 'Tanggal SK');
$objPHPExcel->getActiveSheet()->setCellValue('B14', 'Akreditasi terakhir BAN-PT');
$objPHPExcel->getActiveSheet()->setCellValue('B15', 'Peringkat');
$objPHPExcel->getActiveSheet()->setCellValue('B16', 'Nilai');
$objPHPExcel->getActiveSheet()->setCellValue('B17', 'Nomor SK BAN-PT');
// // $objPHPExcel->getActiveSheet()->getActiveSheet()->mergeCells('B17:B20');
$objPHPExcel->getActiveSheet()->setCellValue('B18', 'Alamat PS');
$objPHPExcel->getActiveSheet()->setCellValue('B21', 'No Telepon PS');
$objPHPExcel->getActiveSheet()->setCellValue('B22', 'Nomor Faksimili PS');
$objPHPExcel->getActiveSheet()->setCellValue('B23', 'Homepage PS');
$objPHPExcel->getActiveSheet()->setCellValue('B24', 'Email PS');
// Buat Bold

$objPHPExcel->getActiveSheet()->getStyle('A1', 'No')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D2', 'Kode sesuai kode PPDT')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B2', 'Program Studi')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('B3', 'Jurusan/Departemen')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('B4', 'Fakultas')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B5', 'Perguruan Tinggi')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D5', 'Kode sesuai kode PPDT')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B6', 'SK Pendirian PS')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('B7', 'Nomor SK')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('B8', 'Tanggal SK')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B9', 'Pejabat Penandatangan')->getFont()->setBold(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('B9:B10')->setWidth(15);
$objPHPExcel->getActiveSheet()->getStyle('B10', 'Bulan dan tahun dimulainya penyelenggara PS')->getFont()->setBold(true);
// $objPHPExcel->getActiveSheet()->getStyle('B10', 'Bulan dan tahun dimulainya penyelenggara PS')->getFont()->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('B11', 'SK Ijin operasional')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B12', 'Nomor SK')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B13', 'Tanggal SK')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B14', 'Akreditasi terakhir BAN-PT')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B15', 'Peringkat')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B16', 'Nilai')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B17', 'Nomor SK BAN-PT')->getFont()->setBold(true);
// $objPHPExcel->getActiveSheet()->getActiveSheet()->mergeCells('B17:B20');
$objPHPExcel->getActiveSheet()->getStyle('B18', 'Alamat PS')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B21', 'No Telepon PS')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B22', 'Nomor Faksimili PS')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B23', 'Homepage PS')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B24', 'Email PS')->getFont()->setBold(true);

$data = $this->Prodis_model->listing();

foreach ($data as $d) {
    // $objPHPExcel->getActiveSheet()->setCellValue('A'.$idx, $no);
    $objPHPExcel->getActiveSheet()->setCellValue('C2', $d['PRODI']);  
    $objPHPExcel->getActiveSheet()->setCellValue('E2', $d['KODE_PRODI']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C3', $d['jurusan']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C4', $d['NAMA_FAKULTAS']);
    $objPHPExcel->getActiveSheet()->setCellValue('C5', $d['NAMA_PT']);  
    $objPHPExcel->getActiveSheet()->setCellValue('E5', $d['kode_pt']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C7', $d['NO_SK_PS']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C8', $d['TGL_SK_PS']);
    $objPHPExcel->getActiveSheet()->setCellValue('C9', $d['PJBT_TTD']);  
    $objPHPExcel->getActiveSheet()->setCellValue('C10', $d['BLN_MULAI_PS']); 
    $objPHPExcel->getActiveSheet()->setCellValue('D10', $d['THN_MULAI_PS']);

    $objPHPExcel->getActiveSheet()->setCellValue('C12', $d['NO_SK_OPR']);  
    $objPHPExcel->getActiveSheet()->setCellValue('C13', $d['TGL_SK_OPR']); 

    $objPHPExcel->getActiveSheet()->setCellValue('C15', $d['PERINGKAT']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C16', $d['NILAI']);

    $objPHPExcel->getActiveSheet()->setCellValue('C17', $d['NO_SK_BAN_PT']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C18', $d['ALAMAT_PS']);
    $objPHPExcel->getActiveSheet()->setCellValue('C21', $d['NO_TELP_PS']);  
    $objPHPExcel->getActiveSheet()->setCellValue('C22', $d['NO_FAX_PS']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C23', $d['HOMEPAGE_PS']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C24', $d['EMAIL_PS']);

}


// Rename 2nd sheet
$objPHPExcel->getActiveSheet()->setTitle('IDENTITAS PROGRAM STUDI');
$objPHPExcel->createSheet();
// End of create excel Pengisi Data Borang

$objPHPExcel->setActiveSheetIndex(3);
// Buat print judul
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(30);


$objPHPExcel->getActiveSheet()->mergeCells('A1:A2');
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Nama Dosen Tetap');
$objPHPExcel->getActiveSheet()->mergeCells('B1:B2');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NIDN'); 
$objPHPExcel->getActiveSheet()->mergeCells('C1:C2'); 
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Tanggal lahir (dd/mm/yyyy)');
$objPHPExcel->getActiveSheet()->mergeCells('D1:D2'); 
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Jabatan Akademik');
// S1
$objPHPExcel->getActiveSheet()->mergeCells('E1:G1');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'S1');
$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Gelar Akademik');
$objPHPExcel->getActiveSheet()->setCellValue('F2', 'Asal PT');
$objPHPExcel->getActiveSheet()->setCellValue('G2', 'Bidang Keahlian');
// S2
$objPHPExcel->getActiveSheet()->mergeCells('H1:J1');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'S2');
$objPHPExcel->getActiveSheet()->setCellValue('H2', 'Gelar Akademik');
$objPHPExcel->getActiveSheet()->setCellValue('I2', 'Asal PT');
$objPHPExcel->getActiveSheet()->setCellValue('J2', 'Bidang Keahlian');
// S3
$objPHPExcel->getActiveSheet()->mergeCells('K1:M1');
$objPHPExcel->getActiveSheet()->setCellValue('K1', 'S3');
$objPHPExcel->getActiveSheet()->setCellValue('K2', 'Gelar Akademik');
$objPHPExcel->getActiveSheet()->setCellValue('L2', 'Asal PT');
$objPHPExcel->getActiveSheet()->setCellValue('M2', 'Bidang Keahlian');

// Buat Bold
$objPHPExcel->getActiveSheet()->getStyle('A1', 'No')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B1', 'Nama')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('C1', 'NIDN')->getFont()->setBold(true);  
$objPHPExcel->getActiveSheet()->getStyle('D1', 'Jabatan')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E1', 'Tanggal Pengisian')->getFont()->setBold(true);

$data = $this->Data_dosens_model->listing();
$idx = 3;
$no=1;
foreach ($data as $d) {
    
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$idx, $d['NAMA_DOSEN']);  
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$idx, $d['NIDN']); 
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$idx, $d['TGL_LHR']); 
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$idx, $d['NM_JAB_AKD']); 

    $objPHPExcel->getActiveSheet()->setCellValue('E'.$idx, $d['GELAR_S1']);  
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$idx, $d['ASAL_PT_S1']); 
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$idx, $d['BID_KEAHLIAN_S1']); 
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$idx, $d['GELAR_S2']); 

    $objPHPExcel->getActiveSheet()->setCellValue('I'.$idx, $d['ASAL_PT_S2']);  
    $objPHPExcel->getActiveSheet()->setCellValue('J'.$idx, $d['BID_KEAHLIAN_S2']); 
    $objPHPExcel->getActiveSheet()->setCellValue('K'.$idx, $d['GELAR_S3']); 
    $objPHPExcel->getActiveSheet()->setCellValue('L'.$idx, $d['ASAL_PT_S3']); 
    $objPHPExcel->getActiveSheet()->setCellValue('M'.$idx, $d['BID_KEAHLIAN_S3']); 

    $idx++;
    
}


// Rename 2nd sheet
$objPHPExcel->getActiveSheet()->setTitle('Data Dosen');
$objPHPExcel->createSheet();

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="ExportAll.xls"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

  // Update the multiple sheets in PHP excel
 

?>