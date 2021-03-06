<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a441_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a441_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.4.1 : DATA DOSEN TIDAK TETAP',
 // 'a441' => $this->Aps_a441_model->listing());
 $data=$this->Aps_a441_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.4.1.php',array('data'=>$data));
 }

 public function ubah($nidn){
 	$this->model_squrity->getsqurity();
		$res=$this->Aps_a441_model->update("where nidn='$nidn'");
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
			
		);
 	$this->load->view('Users/Butir4/edit_borang4.4.1.php',$data);
 }

 public function do_edit(){
		// $nama_dosen=$_POST['nama_dosen'];
		$nidn=$_POST['nidn'];
		$tgl_lhr=$_POST['tgl_lhr'];
		$kd_jab=$_POST['kd_jab'];
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
		
		$data_update=array(
			"nidn"=>$nidn,
			"tgl_lhr"=>$tgl_lhr,
			"kd_jab"=>$kd_jab,
			"sertifikasi"=>$sertifikasi,
			"GELAR_S1"=>$GELAR_S1,

			"ASAL_PT_S1"=>$ASAL_PT_S1,
			"BID_KEAHLIAN_S1"=>$BID_KEAHLIAN_S1,
			"GELAR_S2"=>$GELAR_S2,
			"ASAL_PT_S2"=>$ASAL_PT_S2,
			"BID_KEAHLIAN_S2"=>$BID_KEAHLIAN_S2,

			"GELAR_S3"=>$GELAR_S3,
			"ASAL_PT_S3"=>$ASAL_PT_S3,
			"BID_KEAHLIAN_S3"=>$BID_KEAHLIAN_S3
			
		);
		$where=array('nidn'=>$nidn);
		$res=$this->Aps_a441_model->rubah('dosen_tbl',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a441_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.4.1 : DATA DOSEN TIDAK TETAP',
 // 'a441' => $this->Aps_a441_model->listing());
 $data=$this->Aps_a441_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.4.1_excel.php',array('data'=>$data));
 }

}