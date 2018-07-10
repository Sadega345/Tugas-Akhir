<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a314_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a314_model');
 }

public function index() {
 $data=$this->aps_a314_model->listing();
 $this->load->view('Users/Butir3/tampilan_borang3.1.4.php',array('data'=>$data));
 }

public function export_excel(){
 $data=$this->aps_a314_model->listing();
 $this->load->view('Users/Butir3/tampilan_borang3.1.4_excel.php',array('data'=>$data));
 }

// public function ubah($id){
//  	$this->model_squrity->getsqurity();
// 	$res=$this->aps_a312_model->update("id='$id'");
// 	$data=array(
	
// 	);
//  	$this->load->view('Users/Butir3/edit_borang3.1.2.php',$data);
//  }
// public function do_edit(){

// 		$where=array('id'=>$id);
// 		$res=$this->aps_a312_model->ubah('DATA_MHS',$data_update,$where);
// 		// print_r($data_update);die;
// 		if ($res>=1) {
// 			redirect('Aps_a312_excel');
// 		}
// 		// else {
// 		// 	alert("Gagal Update") ;
// 		// }
// 	}

}