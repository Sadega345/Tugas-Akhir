<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosens_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('data_dosens_model');
 // }

public function index() { 
	// $data = array( 'title' => ' TABEL DATA DOSEN',
 // 'dosen_tbl' => $this->Data_dosens_model->listing());
 // $this->load->view('Users/DataDosen/tampilan_dosen.php',array('data'=>$data));
 $data = $this->Data_dosens_model->listing();
 $this->load->view('Users/DataDosen/tampilan_dosen.php',array('data'=>$data));
}

public function ubah($NIDN){
 	$this->model_squrity->getsqurity();
		$res=$this->Data_dosens_model->update("where NIDN='$NIDN'");
		$data=array(
			"NAMA_DOSEN"=>$res[0]['NAMA_DOSEN'],
			"NIDN"=>$res[0]['NIDN'],
			"TGL_LHR"=>$res[0]['TGL_LHR'],
			"NM_JAB_AKD"=>$res[0]['NM_JAB_AKD'],

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
 	$this->load->view('Users/DataDosen/edit_dosen.php',$data);
 }

 public function do_edit(){
		$NAMA_DOSEN=$_POST['NAMA_DOSEN'];
		$NIDN=$_POST['NIDN'];
		$TGL_LHR=$_POST['TGL_LHR'];
		// $NM_JAB_AKD=$_POST['NM_JAB_AKD'];

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
			"NAMA_DOSEN"=>$NAMA_DOSEN,
			"NIDN"=>$NIDN,
			"TGL_LHR"=>$TGL_LHR,
			// "NM_JAB_AKD"=>$NM_JAB_AKD,

			"GELAR_S1"=>$GELAR_S1,
			"ASAL_PT_S1"=>$ASAL_PT_S1,
			"BID_KEAHLIAN_S1"=>$BID_KEAHLIAN_S1,

			"GELAR_S2"=>$GELAR_S2,
			"ASAL_PT_S2"=>$ASAL_PT_S2,
			"BID_KEAHLIAN_S2"=>$BID_KEAHLIAN_S2,

			"GELAR_S3"=>$GELAR_S3,
			"ASAL_PT_S3"=>$ASAL_PT_S3,
			"BID_KEAHLIAN_S3"=>$BID_KEAHLIAN_S3,
			
		);
		$where=array('NIDN'=>$NIDN);
		$res=$this->Data_dosens_model->rubah('dosen_tbl',$data_update,$where);
		if ($res>=1) {
			redirect('Data_dosens_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 $data = $this->Data_dosens_model->listing();
 $this->load->view('Users/DataDosen/tampilan_dosen_excel.php',array('data'=>$data));
 }

}