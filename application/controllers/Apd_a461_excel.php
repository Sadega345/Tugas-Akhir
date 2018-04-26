<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a461_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a461_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN',
 // 'a461' => $this->apd_a461_model->listing());
 $data=$this->Apd_a461_model->listing();
 $totals3=$this->Apd_a461_model->tots3();
 $totals2=$this->Apd_a461_model->tots2();
 $totals1=$this->Apd_a461_model->tots1();
 $totald4=$this->Apd_a461_model->totd4();
 $totald3=$this->Apd_a461_model->totd3();
 $totald2=$this->Apd_a461_model->totd2();
 $totald1=$this->Apd_a461_model->totd1();
 $totalsma=$this->Apd_a461_model->totsma();
 $this->load->view('User/Butir4/tampilan_borang4.6.1.php',array('data'=>$data,
																'tots3'=>$totals3,
																'tots2'=>$totals2,
																'tots1'=>$totals1,
																'totd4'=>$totald4,
																'totd3'=>$totald3,
																'totd2'=>$totald2,
																'totd1'=>$totald1,
																'totsma'=>$totalsma));
 }

 public function ubah(){
 	$this->load->view('User/Butir4/edit_borang4.6.1.php');	
 }

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN',
 // 'a461' => $this->apd_a461_model->listing());
 $data=$this->Apd_a461_model->listing();
 $totals3=$this->Apd_a461_model->tots3();
 $totals2=$this->Apd_a461_model->tots2();
 $totals1=$this->Apd_a461_model->tots1();
 $totald4=$this->Apd_a461_model->totd4();
 $totald3=$this->Apd_a461_model->totd3();
 $totald2=$this->Apd_a461_model->totd2();
 $totald1=$this->Apd_a461_model->totd1();
 $totalsma=$this->Apd_a461_model->totsma();
 $this->load->view('User/Butir4/tampilan_borang4.6.1_excel.php',array('data'=>$data,
																'tots3'=>$totals3,
																'tots2'=>$totals2,
																'tots1'=>$totals1,
																'totd4'=>$totald4,
																'totd3'=>$totald3,
																'totd2'=>$totald2,
																'totd1'=>$totald1,
																'totsma'=>$totalsma));
 }

}