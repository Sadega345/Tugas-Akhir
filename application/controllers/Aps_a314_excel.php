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

public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->aps_a314_model->update("where id='$id'");
	$data=array(
		"ts_6"=>$res[0]['ts_6'],
		"ts_5"=>$res[0]['ts_5'],
		"ts_4"=>$res[0]['ts_4'],
		"ts_3"=>$res[0]['ts_3'],
		"ts_2"=>$res[0]['ts_2'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
		"jml_ts_llsan"=>$res[0]['jml_ts_llsan'],
		"id"=>$res[0]['id'],
		"id_ts"=>$res[0]['id_ts'],
		
	);
	if ( $id == 6) {
		$this->load->view('Users/Butir3/edit_borang3.1.4(6).php',$data);
	} else if ($id == 7) {
		$this->load->view('Users/Butir3/edit_borang3.1.4(5).php',$data);
	} else if ($id == 8) {
		$this->load->view('Users/Butir3/edit_borang3.1.4(4).php',$data);
	} else if ($id == 9) {
		$this->load->view('Users/Butir3/edit_borang3.1.4(3).php',$data);
	} else if ($id == 10 ) {
		$this->load->view('Users/Butir3/edit_borang3.1.4(2).php',$data);
	} else if ($id == 11) {
		$this->load->view('Users/Butir3/edit_borang3.1.4.php',$data);
	} else if ($id == 12) {
		$this->load->view('Users/Butir3/edit_borang3.1.4_ts.php',$data);
	}

 }

 public function do_edit(){
 		$ts_6=$_POST['ts_6'];
 		$ts_5=$_POST['ts_5'];
		$ts_4=$_POST['ts_4'];
		$ts_3=$_POST['ts_3'];
		$ts_2=$_POST['ts_2'];
		$ts_1=$_POST['ts_1'];
		$ts=$_POST['ts'];
		$id=$_POST['id'];
		$id_ts=$_POST['id_ts'];
		
		$data_update=array(
			"ts_6"=>$ts_6,
			"ts_5"=>$ts_5,
			"ts_4"=>$ts_4,
			"ts_3"=>$ts_3,
			"ts_2"=>$ts_2,
			"ts_1"=>$ts_1,
			"ts"=>$ts,
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die;
		$res=$this->aps_a314_model->ubah('data_mhs_angkatan',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a314_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

}