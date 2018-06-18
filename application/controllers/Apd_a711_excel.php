<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a711_excel extends CI_Controller {

// Load database 

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 7.1.1 : PENELITIAN DOSEN TETAP',
 // 'a711' => $this->apd_a711_model->listing());
 $data=$this->Apd_a711_model->listing();
 $totTs2=$this->Apd_a711_model->totTs2();
 $totTs1=$this->Apd_a711_model->totTs1();
 $totTs=$this->Apd_a711_model->totTs();

 $peneliti=$this->Apd_a711_model->peneliti();
 $bersangkutan=$this->Apd_a711_model->bersangkutan();
 $kemristekdikti=$this->Apd_a711_model->kemristekdikti();
 $dalam=$this->Apd_a711_model->dalam();
 $luar=$this->Apd_a711_model->luar();
 $this->load->view('User/Butir7/tampilan_borang7.1.1.php',array('data'=>$data,
																'totTs2'=>$totTs2,
																'totTs1'=>$totTs1,
																'totTs'=>$totTs,
																'peneliti'=>$peneliti,
																'bersangkutan'=>$bersangkutan,
																'kemristekdikti'=>$kemristekdikti,
																'dalam'=>$dalam,
																'luar'=>$luar));
 }

public function ubah(){
 	$this->load->view('User/Butir7/tampilan_borang7.1.1.php');
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 7.1.1 : PENELITIAN DOSEN TETAP',
 'a711' => $this->apd_a711_model->listing());
 $this->load->view('User/Butir7/tampilan_borang7.1.1.php',$data);
 }

}