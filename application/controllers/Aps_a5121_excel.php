<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a5121_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a5121_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 // 'a5121' => $this->Aps_a5121_model->listing());
 $data1=$this->Aps_a5121_model->listing1();
 $data2=$this->Aps_a5121_model->listing2();
 $total=$this->Aps_a5121_model->total();
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.1.php',array('data1'=>$data1,
																  'data2'=>$data2,
																  'total'=>$total));
 }

public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a5121_model->update("where id='$id'");
	$data=array(
		"sks"=>$res[0]['sks'],
		"keterangan"=>$res[0]['keterangan'],
		"id"=>$res[0]['id'],
		
	);
	if ($id == 1) {
		$this->load->view('Users/Butir5/edit_borang5.1.2.1.php',$data);
	}else if ($id == 2) {
		$this->load->view('Users/Butir5/edit_borang5.1.2.1(2).php',$data);
	}
 	
 }

 public function do_edit(){
		$sks=$_POST['sks'];
		$keterangan=$_POST['keterangan'];
		$id=$_POST['id'];
		
		$data_update=array(
			"keterangan"=>$keterangan,
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a5121_model->rubah('jumlah_sks_ps',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a5121_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 $data1=$this->Aps_a5121_model->listing1();
 $data2=$this->Aps_a5121_model->listing2();
 $total=$this->Aps_a5121_model->total();
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.1_excel.php',array('data1'=>$data1,
																  'data2'=>$data2,
																  'total'=>$total));
 }

}