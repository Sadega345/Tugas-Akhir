<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a641_excel extends CI_Controller {


public function index() {
 $pustaka1=$this->Apd_a641_model->listing1();
 $pustaka2=$this->Apd_a641_model->listing2();
 $pustaka3=$this->Apd_a641_model->listing3();
 $pustaka4=$this->Apd_a641_model->listing4();
 $pustaka5=$this->Apd_a641_model->listing5();
 $pustaka6=$this->Apd_a641_model->listing6();
 $totaljudul=$this->Apd_a641_model->totjudul();
 $totalkopi=$this->Apd_a641_model->totkopi();
 $this->load->view('User/Butir6/tampilan_borang6.4.1.php',array('pustaka1'=>$pustaka1,
 																'pustaka2'=>$pustaka2,
 																'pustaka3'=>$pustaka3,
 																'pustaka4'=>$pustaka4,
 																'pustaka5'=>$pustaka5,
 																'pustaka6'=>$pustaka6,
 																'totjudul'=>$totaljudul,
																'totkopi'=>$totalkopi));
 }

 public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.4.1.php');
 }

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.4.1 : Pustaka ',
 // 'a641' => $this->apd_a641_model->listing());
 $totaljudul=$this->Apd_a641_model->totjudul();
 $totalkopi=$this->Apd_a641_model->totkopi();
 $this->load->view('User/Butir6/tampilan_borang6.4.1_excel.php',array('totjudul'=>$totaljudul,
																'totkopi'=>$totalkopi));
 
 }

}