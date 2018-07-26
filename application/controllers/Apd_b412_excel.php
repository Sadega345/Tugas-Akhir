<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b412_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b412_model');
 }

public function index() {
$total1=$this->Apd_b412_model->total1();
$total2=$this->Apd_b412_model->total2();
$banyak1=$this->Apd_b412_model->banyak1();
$banyak2=$this->Apd_b412_model->banyak2();
$prodi=$this->Apd_b412_model->getprodi();
$this->load->view('User/Butir4B/tampilan_borang4.1.2.php',array('total1'=>$total1,
																'total2'=>$total2,
																'banyak1'=>$banyak1,
																'banyak2'=>$banyak2,
																'prodi'=>$prodi));
 }

 public function ubah1($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_b412_model->update1(" p.id='$id'");
	$data=array(
		"total1"=>$res[0]['total1'],
		"banyak1"=>$res[0]['banyak1'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('User/Butir4B/edit_borang4.1.2.php',$data);
 }

  public function ubah2($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_b412_model->update2(" p.id='$id'");
	$data=array(
		"total2"=>$res[0]['tota2'],
		"banyak2"=>$res[0]['banyak2'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('User/Butir4B/edit_borang4.1.2.php',$data);
 }

public function do_edit(){
		$banyak1=$_POST['banyak1'];
		$banyak2=$_POST['banyak2'];
		$id=$_POST['id'];
		
		$data_update=array(
			"banyak2"=>$banyak1,
			"banyak1"=>$banyak1,
			
		);
		$where=array('id'=>$id);
		$res=$this->Apd_b412_model->rubah('pkdt_tgs_belajar',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_b412_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
$total1=$this->Apd_b412_model->total1();
$total2=$this->Apd_b412_model->total2();
$banyak1=$this->Apd_b412_model->banyak1();
$banyak2=$this->Apd_b412_model->banyak2();
$prodi=$this->Apd_b412_model->getprodi();
$this->load->view('User/Butir4B/tampilan_borang4.1.2_excel.php',array('total1'=>$total1,
																'total2'=>$total2,
																'banyak1'=>$banyak1,
																'banyak2'=>$banyak2,
																'prodi'=>$prodi));
 }

}