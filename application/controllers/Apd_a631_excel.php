<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a631_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a631_model');
 // }

public function index() {
 $ruang1=$this->Apd_a631_model->listing1();
 $ruang2=$this->Apd_a631_model->listing2();
 $ruang3=$this->Apd_a631_model->listing3();
 $ruang4=$this->Apd_a631_model->listing4();
 $totalluas=$this->Apd_a631_model->totluas();
 $this->load->view('User/Butir6/tampilan_borang6.3.1.php',array('ruang1'=>$ruang1,
 																'ruang2'=>$ruang2,
 																'ruang3'=>$ruang3,
 																'ruang4'=>$ruang4,
 																'totluas'=>$totalluas));
 }

 public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.3.1.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP',
 'a631' => $this->apd_a631_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.3.1_excel.php',$data);
 }

}