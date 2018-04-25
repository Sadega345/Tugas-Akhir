<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a641_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a641_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.4.1 : Pustaka ',
 // 'a641' => $this->apd_a641_model->listing());
 $totaljudul=$this->Apd_a641_model->totjudul();
 $totalkopi=$this->Apd_a641_model->totkopi();
 $this->load->view('User/Butir6/tampilan_borang6.4.1.php',array('totjudul'=>$totaljudul,
																'totkopi'=>$totalkopi));
 }

 public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.4.1.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.4.1 : Pustaka ',
 'a641' => $this->apd_a641_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.4.1_excel.php',$data);
 }

}