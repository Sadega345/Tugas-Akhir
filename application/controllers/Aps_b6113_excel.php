<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6113_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_b6113_model');
 // }

public function index() {
  $data=$this->Aps_b6113_model->listing();
  $this->load->view('Users/Butir6B/tampilan_borang6.1.1.3.php',array('data'=>$data));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_b6113_model->update("where id='$id'");
	$data=array(
		"ts_2"=>$res[0]['ts_2'],
		"id"=>$res[0]['id'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
		"nm_program_std"=>$res[0]['nm_program_std'],
		
	);
 	$this->load->view('Users/Butir6B/edit_borang6.1.1.3.php',$data);
 }

 public function do_edit(){
		$ts_2=$_POST['ts_2'];
		$id=$_POST['id'];
		$ts_1=$_POST['ts_1'];
		$ts=$_POST['ts'];
		
		$data_update=array(
			"ts_2"=>$ts_2,
			
			"ts_1"=>$ts_1,
			"ts"=>$ts,
		);
		$where=array('id'=>$id);
		$res=$this->Aps_b6113_model->rubah('dana_tridarma',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_b6113_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 $data=$this->Aps_b6113_model->listing();
  $this->load->view('Users/Butir6B/tampilan_borang6.1.1.3_excel.php',array('data'=>$data));
 }

}