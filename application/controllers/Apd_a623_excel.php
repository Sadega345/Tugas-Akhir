<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a623_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a623_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 // 'a623' => $this->apd_a623_model->listing());
 $data=$this->Apd_a623_model->listing();
 $totaldana=$this->Apd_a623_model->totdana();
 $this->load->view('User/Butir6/tampilan_borang6.2.3.php',array('data'=>$data,
																'totdana'=>$totaldana));
 
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a623_model->update("where id='$id'");
	$data=array(
		"TAHUN"=>$res[0]['TAHUN'],
		"judul_kegiatan"=>$res[0]['judul_kegiatan'],
		"SUMBER_DANA"=>$res[0]['SUMBER_DANA'],
		"JUMLAH_DANA"=>$res[0]['JUMLAH_DANA'],
		"id"=>$res[0]['id'],
		
	);
 	$this->load->view('User/Butir6/edit_borang6.2.3.php',$data);
 }

 public function do_edit(){
		$TAHUN=$_POST['TAHUN'];
		$judul_kegiatan=$_POST['judul_kegiatan'];
		$SUMBER_DANA=$_POST['SUMBER_DANA'];
		$JUMLAH_DANA=$_POST['JUMLAH_DANA'];
		$id=$_POST['id'];
		
		$data_update=array(
			"SUMBER_DANA"=>$SUMBER_DANA,
			"JUMLAH_DANA"=>$JUMLAH_DANA,
			"id"=>$id,
		);
		$where=array('id'=>$id);
		$res=$this->Apd_a623_model->rubah('dana_pengmas',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a623_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 // 'a623' => $this->apd_a623_model->listing());
 $data=$this->Apd_a623_model->listing();
 $totaldana=$this->Apd_a623_model->totdana();
 $this->load->view('User/Butir6/tampilan_borang6.2.3_excel.php',array('data'=>$data,
																'totdana'=>$totaldana));
 
 }

}