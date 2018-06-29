<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a522_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a522_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.2.2 : Waktu Pelaksanaan Real Proses Belajar Mengajar',
 // 'a522' => $this->apd_a522_model->listing());
 $data=$this->Apd_a522_model->listing();
 $this->load->view('User/Butir5/tampilan_borang5.2.2.php',array('data'=>$data));
 }

 public function ubah(){
 	$this->model_squrity->getsqurity();
 	$id=1;
	$res=$this->Apd_a522_model->update("where id='$id'");
	$data=array(
		"teori"=>$res[0]['teori'],
		"praktek"=>$res[0]['praktek'],
		"praktikum"=>$res[0]['praktikum'],
		"pkl"=>$res[0]['pkl'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('User/Butir5/edit_borang5.2.2.php',$data);
 }

 public function do_edit(){
		$teori=$_POST['teori'];
		$praktek=$_POST['praktek'];
		$praktikum=$_POST['praktikum'];
		$pkl=$_POST['pkl'];
		$id=$_POST['id'];
		
		$data_update=array(
			"teori"=>$teori,
			"praktek"=>$praktek,
			"praktikum"=>$praktikum,
			"pkl"=>$pkl,
		);

		$where=array('id'=>$id);
		$res=$this->Apd_a522_model->rubah('waktu_prpbm',$data_update,$where);
		// print_r($data_update);die;
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a522_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.2.2 : Waktu Pelaksanaan Real Proses Belajar Mengajar',
 // 'a522' => $this->apd_a522_model->listing());
 $data=$this->Apd_a522_model->listing();
 $this->load->view('User/Butir5/tampilan_borang5.2.2_excel.php',array('data'=>$data));
 }

}