<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6112_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('Aps_b6112_model');
 }

public function index() {
 $dana1=$this->Aps_b6112_model->listing1();
 $dana2=$this->Aps_b6112_model->listing2();
 $dana3=$this->Aps_b6112_model->listing3();
 $dana4=$this->Aps_b6112_model->listing4();
 $dana5=$this->Aps_b6112_model->listing5();
 $dana6=$this->Aps_b6112_model->listing6();
 $jmldanaopr=$this->Aps_b6112_model->jmldanaopr();
 $jmldanainv=$this->Aps_b6112_model->jmldanainv();
 $jmldanagab=$this->Aps_b6112_model->jmldanagab();
 $this->load->view('Users/Butir6B/tampilan_borang6.1.1.2.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jmldanaopr'=>$jmldanaopr,
 																  'jmldanainv'=>$jmldanainv,
 																  'jmldanagab'=>$jmldanagab
																  )); 

 }

 public function ubah($id,$kd_jns){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_b6112_model->update("where id='$id' and kd_jns='$kd_jns'");
	$data=array(
		"ts_2"=>$res[0]['ts_2'],
		"id"=>$res[0]['id'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
		"kd_jns"=>$res[0]['kd_jns'],
	);

		$this->load->view('Users/Butir6B/edit_borang6.1.1.2.php',$data);
 }

 public function do_edit(){
		$ts_2=$_POST['ts_2'];
		$ts_1=$_POST['ts_1'];
		$ts=$_POST['ts'];
		$id=$_POST['id'];
		$kd_jns=$_POST['kd_jns'];
		
		$data_update=array(
			"ts_2"=>$ts_2,
			"ts_1"=>$ts_1,
			"ts"=>$ts,
			
		);
		$where=array(
			'id'=>$id,
			'kd_jns'=>$kd_jns
		);
		// print_r($data_update);die;
		$res=$this->Aps_b6112_model->rubah('penggunaan_dana',$data_update,$where);
		
		if ($res>=1) {
			redirect('Aps_b6112_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 $dana1=$this->Aps_b6112_model->listing1();
 $dana2=$this->Aps_b6112_model->listing2();
 $dana3=$this->Aps_b6112_model->listing3();
 $dana4=$this->Aps_b6112_model->listing4();
 $dana5=$this->Aps_b6112_model->listing5();
 $dana6=$this->Aps_b6112_model->listing6();
 $jmldanaopr=$this->Aps_b6112_model->jmldanaopr();
 $jmldanainv=$this->Aps_b6112_model->jmldanainv();
 $jmldanagab=$this->Aps_b6112_model->jmldanagab();
 $this->load->view('Users/Butir6B/tampilan_borang6.1.1.2_excel.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jmldanaopr'=>$jmldanaopr,
 																  'jmldanainv'=>$jmldanainv,
 																  'jmldanagab'=>$jmldanagab
																  )); 
 }

}