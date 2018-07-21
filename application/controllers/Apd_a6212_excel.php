<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a6212_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a6212_model');
 }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 // 'a6212' => $this->apd_a6212_model->listing());
 $data1=$this->Apd_a6212_model->listing1();
 $data2=$this->Apd_a6212_model->listing2();
 $data3=$this->Apd_a6212_model->listing3();
 $data4=$this->Apd_a6212_model->listing4();
 $data5=$this->Apd_a6212_model->listing5();
 $data6=$this->Apd_a6212_model->listing6();
 $data7=$this->Apd_a6212_model->listing7();
 $jmlopr2=$this->Apd_a6212_model->jmlopr2();
 $jmlopr1=$this->Apd_a6212_model->jmlopr1();
 $jmlopr=$this->Apd_a6212_model->jmlopr();
 $jmlinv2=$this->Apd_a6212_model->jmlinv2();
 $jmlinv1=$this->Apd_a6212_model->jmlinv1();
 $jmlinv=$this->Apd_a6212_model->jmlinv();
 $jmloprinv2=$this->Apd_a6212_model->jmloprinv2();
 $jmloprinv1=$this->Apd_a6212_model->jmloprinv1();
 $jmloprinv=$this->Apd_a6212_model->jmloprinv();
 $jmlmhs2=$this->Apd_a6212_model->jmlmhs2();
 $jmlmhs1=$this->Apd_a6212_model->jmlmhs1();
 $jmlmhs=$this->Apd_a6212_model->jmlmhs();
 $this->load->view('User/Butir6/tampilan_borang6.2.1.2.php',array('data1'=>$data1,
 																  'data2'=>$data2,
 																  'data3'=>$data3,
 																  'data4'=>$data4,
 																  'data5'=>$data5,
 																  'data6'=>$data6,
 																  'data7'=>$data7,
 																  'jmlopr2'=>$jmlopr2,
 																  'jmlopr1'=>$jmlopr1,
 																  'jmlopr'=>$jmlopr,
 																  'jmlinv2'=>$jmlinv2,
 																  'jmlinv1'=>$jmlinv1,
 																  'jmlinv'=>$jmlinv,
 																  'jmloprinv2'=>$jmloprinv2,
 																  'jmloprinv1'=>$jmloprinv1,
 																  'jmloprinv'=>$jmloprinv,
 																  'jmlmhs2'=>$jmlmhs2,
 																  'jmlmhs1'=>$jmlmhs1,
 																  'jmlmhs'=>$jmlmhs
																  ));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a6212_model->update("where id='$id'");
	$data=array(
		"ts_2"=>$res[0]['ts_2'],
		"id"=>$res[0]['id'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
	);


	if ($id==1) {
		$this->load->view('User/Butir6/edit_borang6.2.1.2.php',$data);
	}else if ($id==2) {
		$this->load->view('User/Butir6/edit_borang6.2.1.2(2).php',$data);
	}else if ($id==3) {
		$this->load->view('User/Butir6/edit_borang6.2.1.2(3).php',$data);
	}else if ($id==4) {
		$this->load->view('User/Butir6/edit_borang6.2.1.2(4).php',$data);
	}else if ($id==5) {
		$this->load->view('User/Butir6/edit_borang6.2.1.2(5).php',$data);
	}else if ($id==6) {
		$this->load->view('User/Butir6/edit_borang6.2.1.2(6).php',$data);
	}else if ($id==7) {
		$this->load->view('User/Butir6/edit_borang6.2.1.2(7).php',$data);
	}
 }

 public function do_edit(){
		$ts_2=$_POST['ts_2'];
		$ts_1=$_POST['ts_1'];
		$ts=$_POST['ts'];
		$id=$_POST['id'];
		
		$data_update=array(
			"ts_2"=>$ts_2,
			"ts_1"=>$ts_1,
			"ts"=>$ts,
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die;
		$res=$this->Apd_a6212_model->rubah('penggunaan_dana',$data_update,$where);
		
		if ($res>=1) {
			redirect('Apd_a6212_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 // 'a6212' => $this->apd_a6212_model->listing());

 $data1=$this->Apd_a6212_model->listing1();
 $data2=$this->Apd_a6212_model->listing2();
 $data3=$this->Apd_a6212_model->listing3();
 $data4=$this->Apd_a6212_model->listing4();
 $data5=$this->Apd_a6212_model->listing5();
 $data6=$this->Apd_a6212_model->listing6();
 $data7=$this->Apd_a6212_model->listing7();
 $jmlopr2=$this->Apd_a6212_model->jmlopr2();
 $jmlopr1=$this->Apd_a6212_model->jmlopr1();
 $jmlopr=$this->Apd_a6212_model->jmlopr();
 $jmlinv2=$this->Apd_a6212_model->jmlinv2();
 $jmlinv1=$this->Apd_a6212_model->jmlinv1();
 $jmlinv=$this->Apd_a6212_model->jmlinv();
 $jmloprinv2=$this->Apd_a6212_model->jmloprinv2();
 $jmloprinv1=$this->Apd_a6212_model->jmloprinv1();
 $jmloprinv=$this->Apd_a6212_model->jmloprinv();
 $jmlmhs2=$this->Apd_a6212_model->jmlmhs2();
 $jmlmhs1=$this->Apd_a6212_model->jmlmhs1();
 $jmlmhs=$this->Apd_a6212_model->jmlmhs();
 $this->load->view('User/Butir6/tampilan_borang6.2.1.2_excel.php',array('data1'=>$data1,
 																  'data2'=>$data2,
 																  'data3'=>$data3,
 																  'data4'=>$data4,
 																  'data5'=>$data5,
 																  'data6'=>$data6,
 																  'data7'=>$data7,
 																  'jmlopr2'=>$jmlopr2,
 																  'jmlopr1'=>$jmlopr1,
 																  'jmlopr'=>$jmlopr,
 																  'jmlinv2'=>$jmlinv2,
 																  'jmlinv1'=>$jmlinv1,
 																  'jmlinv'=>$jmlinv,
 																  'jmloprinv2'=>$jmloprinv2,
 																  'jmloprinv1'=>$jmloprinv1,
 																  'jmloprinv'=>$jmloprinv,
 																  'jmlmhs2'=>$jmlmhs2,
 																  'jmlmhs1'=>$jmlmhs1,
 																  'jmlmhs'=>$jmlmhs
																  ));
 
 }

}