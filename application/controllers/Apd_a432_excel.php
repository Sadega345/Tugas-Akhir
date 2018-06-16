<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a432_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a432_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS     ',
 // 'a432' => $this->apd_a432_model->listing());
 $data=$this->Apd_a432_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.3.2.php',array('data'=>$data));
 }

 public function ubah($nidn){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a432_model->update("where nidn='$nidn'");
	$data=array(
		"nama_dosen"=>$res[0]['nama_dosen'],
		"nidn"=>$res[0]['nidn'],
		"tgl_lhr"=>$res[0]['tgl_lhr'],
		"NM_JAB_AKD"=>$res[0]['NM_JAB_AKD'],
		"sertifikasi"=>$res[0]['sertifikasi'],
		"GELAR_S1"=>$res[0]['GELAR_S1'],
		"ASAL_PT_S1"=>$res[0]['ASAL_PT_S1'],
		"BID_KEAHLIAN_S1"=>$res[0]['BID_KEAHLIAN_S1'],
		"GELAR_S2"=>$res[0]['GELAR_S2'],
		"ASAL_PT_S2"=>$res[0]['ASAL_PT_S2'],
		"BID_KEAHLIAN_S2"=>$res[0]['BID_KEAHLIAN_S2'],
		"GELAR_S3"=>$res[0]['GELAR_S3'],
		"ASAL_PT_S3"=>$res[0]['ASAL_PT_S3'],
		"BID_KEAHLIAN_S3"=>$res[0]['BID_KEAHLIAN_S3'],
		"GELAR"=>$res[0]['GELAR'],
		"PENGAKUAN"=>$res[0]['PENGAKUAN'],
		"BID_KEAHLIAN"=>$res[0]['BID_KEAHLIAN'],
	);
 	$this->load->view('User/Butir4/edit_borang4.3.2.php',$data);
 }

 public function do_edit(){
		$nama_dosen=$_POST['nama_dosen'];
		$nidn=$_POST['nidn'];
		$tgl_lhr=$_POST['tgl_lhr'];
		// $NM_JAB_AKD=$_POST['NM_JAB_AKD'];
		$sertifikasi=$_POST['sertifikasi'];
		$GELAR_S1=$_POST['GELAR_S1'];
		$ASAL_PT_S1=$_POST['ASAL_PT_S1'];
		$BID_KEAHLIAN_S1=$_POST['BID_KEAHLIAN_S1'];
		$GELAR_S2=$_POST['GELAR_S2'];
		$ASAL_PT_S2=$_POST['ASAL_PT_S2'];
		$BID_KEAHLIAN_S2=$_POST['BID_KEAHLIAN_S2'];
		$GELAR_S3=$_POST['GELAR_S3'];
		$ASAL_PT_S3=$_POST['ASAL_PT_S3'];
		$BID_KEAHLIAN_S3=$_POST['BID_KEAHLIAN_S3'];
		$GELAR=$_POST['GELAR'];
		$PENGAKUAN=$_POST['PENGAKUAN'];
		$BID_KEAHLIAN=$_POST['BID_KEAHLIAN'];
		$data_update=array(
			"nama_dosen"=>$nama_dosen,
			// "nidn"=>$nidn,
			"tgl_lhr"=>$tgl_lhr,
			// "NM_JAB_AKD"=>$NM_JAB_AKD,
			"sertifikasi"=>$sertifikasi,
			"GELAR_S1"=>$GELAR_S1,
			"ASAL_PT_S1"=>$ASAL_PT_S1,
			"BID_KEAHLIAN_S1"=>$BID_KEAHLIAN_S1,
			"GELAR_S2"=>$GELAR_S2,
			"ASAL_PT_S2"=>$ASAL_PT_S2,
			"BID_KEAHLIAN_S2"=>$BID_KEAHLIAN_S2,
			"GELAR_S3"=>$GELAR_S3,
			"ASAL_PT_S3"=>$ASAL_PT_S3,
			"BID_KEAHLIAN_S3"=>$BID_KEAHLIAN_S3,
			"GELAR"=>$GELAR,
			"PENGAKUAN"=>$PENGAKUAN,
			"BID_KEAHLIAN"=>$BID_KEAHLIAN
		);
		$where=array('nidn'=>$nidn);
		$res=$this->Apd_a432_model->rubah('dosen_tbl',$data_update,$where);
		if ($res>=1) {
			redirect('Apd_a432_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS     ',
 // 'a432' => $this->apd_a432_model->listing());
 $data=$this->Apd_a432_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.3.2_excel.php',array('data'=>$data));
 }

}