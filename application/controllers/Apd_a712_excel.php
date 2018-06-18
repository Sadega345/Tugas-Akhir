<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a712_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a712_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 7.1.2 : JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU',
 // 'a712' => $this->apd_a712_model->listing());
 $data=$this->Apd_a712_model->listing();
 $lokal=$this->Apd_a712_model->lokal();
 $nasional=$this->Apd_a712_model->nasional();
 $internasional=$this->Apd_a712_model->internasional();

 $this->load->view('User/Butir7/tampilan_borang7.1.2.php',array('data'=>$data,
																'lokal'=>$lokal,
																'nasional'=>$nasional,
																'internasional'=>$internasional));

 }

 public function ubah(){
 	$this->load->view('User/Butir7/tampilan_borang7.1.2.php');
 }

public function export_excel(){
 $data=$this->Apd_a712_model->listing();
 $lokal=$this->Apd_a712_model->lokal();
 $nasional=$this->Apd_a712_model->nasional();
 $internasional=$this->Apd_a712_model->internasional();

 $this->load->view('User/Butir7/tampilan_borang7.1.2_excel.php',array('data'=>$data,
																'lokal'=>$lokal,
																'nasional'=>$nasional,
																'internasional'=>$internasional));
 
 }

}