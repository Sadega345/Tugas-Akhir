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
 $data=$this->Apd_a6212_model->listing();
 $totalps2=$this->Apd_a6212_model->tots2();
 $totalps1=$this->Apd_a6212_model->totps1();
 $totalps=$this->Apd_a6212_model->totps();
 $totalinves2=$this->Apd_a6212_model->totinves2();
 $totalinves1=$this->Apd_a6212_model->totinves1();
 $totalinvests=$this->Apd_a6212_model->totinvests();
 $totaldana2=$this->Apd_a6212_model->totdana2();
 $totaldana1=$this->Apd_a6212_model->totdana1();
 $totaldanats=$this->Apd_a6212_model->totdanats();
 $this->load->view('User/Butir6/tampilan_borang6.2.1.2.php',array('data'=>$data,
																  'totsp2'=>$totalps2,
																  'totps1'=>$totalps1,
																  'totps'=>$totalps,
																  'totinves2'=>$totalinves2,
																  'totinves1'=>$totalinves1,
																  'totinvests'=>$totalinvests,
																  'totdana2'=>$totaldana2,
																  'totdana1'=>$totaldana1,
																  'totdanats'=>$totaldanats));
 }

public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.2.1.2.php');
 }

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 // 'a6212' => $this->apd_a6212_model->listing());
 $data=$this->Apd_a6212_model->listing();
 $totalps2=$this->Apd_a6212_model->tots2();
 $totalps1=$this->Apd_a6212_model->totps1();
 $totalps=$this->Apd_a6212_model->totps();
 $totalinves2=$this->Apd_a6212_model->totinves2();
 $totalinves1=$this->Apd_a6212_model->totinves1();
 $totalinvests=$this->Apd_a6212_model->totinvests();
 $totaldana2=$this->Apd_a6212_model->totdana2();
 $totaldana1=$this->Apd_a6212_model->totdana1();
 $totaldanats=$this->Apd_a6212_model->totdanats();
 $this->load->view('User/Butir6/tampilan_borang6.2.1.2_excel.php',array('data'=>$data,
																  'totsp2'=>$totalps2,
																  'totps1'=>$totalps1,
																  'totps'=>$totalps,
																  'totinves2'=>$totalinves2,
																  'totinves1'=>$totalinves1,
																  'totinvests'=>$totalinvests,
																  'totdana2'=>$totaldana2,
																  'totdana1'=>$totaldana1,
																  'totdanats'=>$totaldanats));
 
 }

}