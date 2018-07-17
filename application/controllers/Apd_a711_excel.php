<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a711_excel extends CI_Controller {

// Load database 

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 7.1.1 : PENELITIAN DOSEN TETAP',
 // 'a711' => $this->apd_a711_model->listing());
 $data1=$this->Apd_a711_model->listing1();
 $data2=$this->Apd_a711_model->listing2();
 $data3=$this->Apd_a711_model->listing3();
 $data4=$this->Apd_a711_model->listing4();
 $data5=$this->Apd_a711_model->listing5();
 $totTs2=$this->Apd_a711_model->totTs2();
 $totTs1=$this->Apd_a711_model->totTs1();
 $totTs=$this->Apd_a711_model->totTs();
 $jml=$this->Apd_a711_model->jml();
 $this->load->view('User/Butir7/tampilan_borang7.1.1.php',array('data1'=>$data1,
 																'data2'=>$data2,
 																'data3'=>$data3,
 																'data4'=>$data4,
 																'data5'=>$data5,
																'totTs2'=>$totTs2,
																'totTs1'=>$totTs1,
																'totTs'=>$totTs,
																'jml'=>$jml));
 }

public function ubah(){
 	$this->load->view('User/Butir7/tampilan_borang7.1.1.php');
 }

public function export_excel(){
$data1=$this->Apd_a711_model->listing1();
 $data2=$this->Apd_a711_model->listing2();
 $data3=$this->Apd_a711_model->listing3();
 $data4=$this->Apd_a711_model->listing4();
 $data5=$this->Apd_a711_model->listing5();
 $totTs2=$this->Apd_a711_model->totTs2();
 $totTs1=$this->Apd_a711_model->totTs1();
 $totTs=$this->Apd_a711_model->totTs();
 $jml=$this->Apd_a711_model->jml();

 $this->load->view('User/Butir7/tampilan_borang7.1.1.php',array('data1'=>$data1,
 																'data2'=>$data2,
 																'data3'=>$data3,
 																'data4'=>$data4,
 																'data5'=>$data5,
																'totTs2'=>$totTs2,
																'totTs1'=>$totTs1,
																'totTs'=>$totTs,
																'jml'=>$jml));
 }

}