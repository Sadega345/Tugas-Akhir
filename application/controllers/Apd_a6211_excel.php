<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a6211_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a6211_model');
 // }

public function index() {
 $dana1=$this->Apd_a6211_model->listing1();
 $dana2=$this->Apd_a6211_model->listing2();
 $dana3=$this->Apd_a6211_model->listing3();
 $jml1=$this->Apd_a6211_model->jml1();
 $dana4=$this->Apd_a6211_model->listing4();
 $dana5=$this->Apd_a6211_model->listing5();
 $dana6=$this->Apd_a6211_model->listing6();
 $jml2=$this->Apd_a6211_model->jml2();
 $dana7=$this->Apd_a6211_model->listing7();
 $dana8=$this->Apd_a6211_model->listing8();
 $dana9=$this->Apd_a6211_model->listing9();
 $jml4=$this->Apd_a6211_model->jml4();
 $total=$this->Apd_a6211_model->total();
 $this->load->view('User/Butir6/tampilan_borang6.2.1.1.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'jml1'=>$jml1,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jml2'=>$jml2,
 																  'dana7'=>$dana7,
 																  'dana8'=>$dana8,
 																  'dana9'=>$dana9,
 																  'jml4'=>$jml4,
 																  'total'=>$total,
																  ));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a6211_model->update("where id='$id'");
	$data=array(
		"jenis_dana"=>$res[0]['jenis_dana'],
		"id"=>$res[0]['id'],
		"ts_2"=>$res[0]['ts_2'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
		"total1"=>$res[0]['total1'],
	);

	// if ($id==1) {
		$this->load->view('User/Butir6/edit_borang6.2.1.1.php',$data.$id);
	// }else if ($id==2) {
	// 	$this->load->view('User/Butir6/edit_borang6.2.1.1(2).php',$data);
	// }else if ($id==3) {
	// 	$this->load->view('User/Butir6/edit_borang6.2.1.1(3).php',$data);
	// }else if ($id==4) {
	// 	$this->load->view('User/Butir6/edit_borang6.2.1.1(4).php',$data);
	// }else if ($id==5) {
	// 	$this->load->view('User/Butir6/edit_borang6.2.1.1(5).php',$data);
	// }else if ($id==6) {
	// 	$this->load->view('User/Butir6/edit_borang6.2.1.1(6).php',$data);
	// }else if ($id==7) {
	// 	$this->load->view('User/Butir6/edit_borang6.2.1.1(7).php',$data);
	// }else if ($id==8) {
	// 	$this->load->view('User/Butir6/edit_borang6.2.1.1(8).php',$data);
	// }else if ($id==9) {
	// 	$this->load->view('User/Butir6/edit_borang6.2.1.1(9).php',$data);
	// }
 	
 }

 public function do_edit(){
		$jenis_dana=$_POST['jenis_dana'];
		$ts_2=$_POST['ts_2'];
		$ts_1=$_POST['ts_1'];
		$ts=$_POST['ts'];
		$id=$_POST['id'];
		
		$data_update=array(
			"jenis_dana"=>$jenis_dana,
			"ts_2"=>$ts_2,
			"ts_1"=>$ts_1,
			"ts"=>$ts,
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die();
		$res=$this->Apd_a6211_model->rubah('perolehan_dana',$data_update,$where);
		
		if ($res>=1) {
			redirect('Apd_a6211_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 $dana1=$this->Apd_a6211_model->listing1();
 $dana2=$this->Apd_a6211_model->listing2();
 $dana3=$this->Apd_a6211_model->listing3();
 $jml1=$this->Apd_a6211_model->jml1();
 $dana4=$this->Apd_a6211_model->listing4();
 $dana5=$this->Apd_a6211_model->listing5();
 $dana6=$this->Apd_a6211_model->listing6();
 $jml2=$this->Apd_a6211_model->jml2();
 $dana7=$this->Apd_a6211_model->listing7();
 $dana8=$this->Apd_a6211_model->listing8();
 $dana9=$this->Apd_a6211_model->listing9();
 $jml4=$this->Apd_a6211_model->jml4();
 $total=$this->Apd_a6211_model->total();
 $this->load->view('User/Butir6/tampilan_borang6.2.1.1_excel.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'jml1'=>$jml1,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jml2'=>$jml2,
 																  'dana7'=>$dana7,
 																  'dana8'=>$dana8,
 																  'dana9'=>$dana9,
 																  'jml4'=>$jml4,
 																  'total'=>$total,
																  ));
 }

}