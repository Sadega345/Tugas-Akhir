<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a313_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a313_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 // 'a313' => $this->apd_a313_model->listing());
	$data=$this->Apd_a313_model->D4();
	$data3=$this->Apd_a313_model->D3();
	$data2=$this->Apd_a313_model->D2();
	$data1=$this->Apd_a313_model->D1();

 $this->load->view('User/BUtir3/tampilan_borang3.1.3.php',array('data'=>$data,
																'data3'=>$data3,
																'data2'=>$data2,
																'data1'=>$data1));
 }

public function ubah(){
 	$this->load->view('User/Butir3/edit_borang3.1.3.php');
 }

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 // 'a313' => $this->apd_a313_model->listing());
 	$data=$this->Apd_a313_model->D4();
	$data3=$this->Apd_a313_model->D3();
	$data2=$this->Apd_a313_model->D2();
	$data1=$this->Apd_a313_model->D1();
 $this->load->view('User/BUtir3/tampilan_borang3.1.3_excel.php',array('data'=>$data,
																	'data3'=>$data3,
																	'data2'=>$data2,
																	'data1'=>$data1));
 }

}