<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b721_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_b721_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 7.2.1 : KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 // 'b721' => $this->Aps_b721_model->listing());
 $data=$this->Aps_b721_model->listing();
 $total=$this->Aps_b721_model->total();
 $this->load->view('Users/Butir7B/tampilan_borang7.2.1.php',array('data'=>$data,
																'total'=>$total));
 }

 public function ubah($KD_JNS){
 	$this->model_squrity->getsqurity();
 	$res=$this->Aps_b721_model->update("where KD_JNS='$KD_JNS'");
 	$data=array(
			"Tot_Ts2"=>$res[0]['Tot_Ts2'],
			"Tot_Ts1"=>$res[0]['Tot_Ts1'],
			"Tot_Ts"=>$res[0]['Tot_Ts'],
			"Jum_dana2014"=>$res[0]['Jum_dana2014'],
			"Jum_dana2015"=>$res[0]['Jum_dana2015'],
			"Jum_dana2016"=>$res[0]['Jum_dana2016'],
			"jurusan"=>$res[0]['jurusan'],
			"KD_JNS"=>$res[0]['KD_JNS'],
		);
 	$this->load->view('Users/Butir7B/edit_borang7.2.1.php',$data);
 }

 public function do_edit(){
		$Tot_Ts2=$_POST['Tot_Ts2'];
		$Tot_Ts1=$_POST['Tot_Ts1'];
		$Tot_Ts=$_POST['Tot_Ts'];
		$Jum_dana2014=$_POST['Jum_dana2014'];
		$Jum_dana2015=$_POST['Jum_dana2015'];
		$Jum_dana2016=$_POST['Jum_dana2016'];
		// $jurusan=$_POST['jurusan'];
		$KD_JNS=$_POST['KD_JNS'];
		
		$data_update=array(
			// "NAMA_DOSEN"=>$NAMA_DOSEN,
			"ts_2"=>$Tot_Ts2,
			"ts_1"=>$Tot_Ts1,
			"ts"=>$Tot_Ts,
			
			
			
		);
		$where=array('KD_JNS'=>$KD_JNS);
		// print_r($data_update);die();
		$res=$this->Aps_b721_model->rubah('kegiatan_pkm',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_b721_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 $data=$this->Aps_b721_model->listing();
 $total=$this->Aps_b721_model->total();
 $this->load->view('Users/Butir7B/tampilan_borang7.2.1_excel.php',array('data'=>$data,
																'total'=>$total));

 }

}