<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6111_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('Aps_b6111_model');
 }

public function index() {
 $dana1=$this->Aps_b6111_model->listing1();
 $dana2=$this->Aps_b6111_model->listing2();
 $dana3=$this->Aps_b6111_model->listing3();
 $dana4=$this->Aps_b6111_model->listing4();
 $total=$this->Aps_b6111_model->total();
 $this->load->view('Users/Butir6B/tampilan_borang6.1.1.1.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'dana4'=>$dana4,
 																  'total'=>$total,
																  ));
 }


 public function ubah($id,$id_dana){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_b6111_model->update("where id='$id' and id_dana='$id_dana'");
	$data=array(
		"id_dana"=>$res[0]['id_dana'],
		"ts_2"=>$res[0]['ts_2'],
		"id"=>$res[0]['id'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
		"jenis_dana"=>$res[0]['jenis_dana'],
		// "total1"=>$res[0]['total1']
	);


	if ($id_dana==1) {
		$this->load->view('Users/Butir6B/edit_borang6.1.1.1.php',$data);
	}else if ($id_dana==5) {
		$this->load->view('Users/Butir6B/edit_borang6.1.1.1(2).php',$data);
	}else if ($id_dana==6) {
		$this->load->view('Users/Butir6B/edit_borang6.1.1.1(3).php',$data);
	}else if ($id_dana==4) {
		$this->load->view('Users/Butir6B/edit_borang6.1.1.1(4).php',$data);
	}
 }

 public function do_edit(){
		$ts_2=$_POST['ts_2'];
		$ts_1=$_POST['ts_1'];
		$ts=$_POST['ts'];
		$jenis_dana=$_POST['jenis_dana'];
		$id=$_POST['id'];
		$id_dana=$_POST['id_dana'];
		
		$data_update=array(
			"ts_2"=>$ts_2,
			"ts_1"=>$ts_1,
			"ts"=>$ts,
			"jenis_dana"=> $jenis_dana
			
		);
		$where=array('id'=>$id, 'id_dana'=>$id_dana);
		// print_r($data_update);die;
		$res=$this->Aps_b6111_model->rubah('perolehan_dana',$data_update,$where);
		
		if ($res>=1) {
			redirect('Aps_b6111_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 $dana1=$this->Aps_b6111_model->listing1();
 $dana2=$this->Aps_b6111_model->listing2();
 $dana3=$this->Aps_b6111_model->listing3();
 $dana4=$this->Aps_b6111_model->listing4();
 $total=$this->Aps_b6111_model->total();
 $this->load->view('Users/Butir6B/tampilan_borang6.1.1.1_excel.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'dana4'=>$dana4,
 																  'total'=>$total,
																  ));
 }

}