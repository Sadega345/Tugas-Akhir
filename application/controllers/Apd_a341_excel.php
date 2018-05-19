<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a341_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a341_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN',
 // 'a341' => $this->apd_a341_model->listing());
	$data=$this->Apd_a341_model->listing();
	$sangatbaik=$this->Apd_a341_model->sangatbaik();
	$baik=$this->Apd_a341_model->baik();
	$cukup=$this->Apd_a341_model->cukup();
	$kurang=$this->Apd_a341_model->kurang();

 $this->load->view('User/Butir3/tampilan_borang3.4.1.php',array('data'=>$data,
																'sangatbaik'=>$sangatbaik,
																'baik'=>$baik,
																'cukup'=>$cukup,
																'kurang'=>$kurang));
 }

 public function ubah(){
 	$this->load->view('User/Butir3/edit_borang341.php');
 }

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN',
 // 'a341' => $this->apd_a341_model->listing());
	$data=$this->Apd_a341_model->listing();
	$sangatbaik=$this->Apd_a341_model->sangatbaik();
	$baik=$this->Apd_a341_model->baik();
	$cukup=$this->Apd_a341_model->cukup();
	$kurang=$this->Apd_a341_model->kurang();

 $this->load->view('User/Butir3/tampilan_borang3.4.1_excel.php',array('data'=>$data,
																'sangatbaik'=>$sangatbaik,
																'baik'=>$baik,
																'cukup'=>$cukup,
																'kurang'=>$kurang));
 }

}