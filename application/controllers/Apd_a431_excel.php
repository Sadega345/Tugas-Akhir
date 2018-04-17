<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a431_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a431_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.1 : DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI BIDANG PS',
 // 'a431' => $this->apd_a431_model->listing());
 $data=$this->Apd_a431_model->listing();		
 $this->load->view('User/Butir4/tampilan_borang4.3.1.php',array('data'=>$data));
 }

 public function ubah(){
 	// $this->model_squrity->getsqurity();
		// $res=$this->Apd_a431_model->listing()("where nidn='$kode'");
		// $data=array(
		// 	"nama_dosen"=>$res[0]['nama_dosen'],
		// 	"nidn"=>$res[0]['nidn'],
		// 	"tgl_lhr"=>$res[0]['nama_dosen'],
		// 	"NM_JAB_AKD"=>$res[0]['nidn'],
		// 	"seritifikasi"=>$res[0]['seritifikasi'],
		// 	"GELAR_S1"=>$res[0]['GELAR_S1'],
		// 	"ASAL_PT_S1"=>$res[0]['ASAL_PT_S1'],
		// 	"BID_KEAHLIAN_S1"=>$res[0]['BID_KEAHLIAN_S1'],
		// 	"GELAR_S2"=>$res[0]['GELAR_S2'],
		// 	"ASAL_PT_S2"=>$res[0]['ASAL_PT_S2'],
		// 	"BID_KEAHLIAN_S2"=>$res[0]['BID_KEAHLIAN_S2'],
		// 	"GELAR_S3"=>$res[0]['GELAR_S3'],
		// 	"ASAL_PT_S3"=>$res[0]['ASAL_PT_S3'],
		// 	"BID_KEAHLIAN_S3"=>$res[0]['BID_KEAHLIAN_S3'],
		// 	"AGELAR"=>$res[0]['GELAR'],
		// 	"PENGAKUAN"=>$res[0]['PENGAKUAN'],
		// 	"BID_KEAHLIAN"=>$res[0]['BID_KEAHLIAN'],
		// );
 	$this->load->view('User/Butir4/edit_borang4.3.1.php');
 }

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.1 : DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI BIDANG PS',
 // 'a431' => $this->apd_a431_model->listing());
 $data=$this->Apd_a431_model->listing();		
 $this->load->view('User/Butir4/tampilan_borang4.3.1.php',array('data'=>$data));
 }

}