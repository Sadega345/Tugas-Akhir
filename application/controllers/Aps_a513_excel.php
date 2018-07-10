<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a513_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('aps_a513_model');
 // }

public function index() {
$data=$this->Aps_a513_model->listing();
 $this->load->view('Users/Butir5/tampilan_borang5.1.3.php',array('data'=>$data));
 }

 public function ubah($kodemk){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a513_model->update("where kode_mk='$kodemk'");
	$data=array(
		"smt"=>$res[0]['smt'],
		"kode_mk"=>$res[0]['kode_mk'],
		"nama_mk"=>$res[0]['nama_mk'],
		"bobot_sks"=>$res[0]['bobot_sks'],
		"bobot_tgs"=>$res[0]['bobot_tgs'],
		"penyelenggara"=>$res[0]['penyelenggara'],
		
	);
 	$this->load->view('Users/Butir5/edit_borang5.1.3.php',$data);
 }

  public function do_edit(){
		$bobot_sks=$_POST['bobot_sks'];
		$kode_mk=$_POST['kode_mk'];
		$bobot_tgs=$_POST['bobot_tgs'];
		$penyelenggara=$_POST['penyelenggara'];
		
		$data_update=array(
			"bobot_sks"=>$bobot_sks,
			"bobot_tgs"=>$bobot_tgs,
			"penyelenggara"=>$penyelenggara,
			
		);
		$where=array('kode_mk'=>$kode_mk);
		$res=$this->Aps_a513_model->rubah('struktur_kurikulum',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a513_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){

 $data=$this->Aps_a513_model->listing();
 $this->load->view('Users/Butir5/tampilan_borang5.1.3_excel.php',array('data'=>$data));
 }

}