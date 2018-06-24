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

public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.2.1.2.php');
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