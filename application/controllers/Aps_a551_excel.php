<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a551_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('aps_a551_model');
 // }

public function index() {
$data=$this->Aps_a551_model->listing();
$avg=$this->Aps_a551_model->avg();
 $this->load->view('Users/Butir5/tampilan_borang5.5.1.php',array('data'=>$data,
																 'avg'=>$avg));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a551_model->update("where id='$id'");
	$data=array(
		"nama_dosen"=>$res[0]['nama_dosen'],
		"id"=>$res[0]['id'],
		"jml_mhs"=>$res[0]['jml_mhs'],
		
	);
 	$this->load->view('Users/Butir5/edit_borang5.5.1.php',$data);
 }

 public function do_edit(){
		$jml_mhs=$_POST['jml_mhs'];
		$id=$_POST['id'];
		
		$data_update=array(
			"jml_mhs"=>$jml_mhs,
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a551_model->rubah('pembimbing_skripsi',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a551_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 $data=$this->Aps_a551_model->listing();
$avg=$this->Aps_a551_model->avg();
 $this->load->view('Users/Butir5/tampilan_borang5.5.1_excel.php',array('data'=>$data,
																 'avg'=>$avg));
 }

}