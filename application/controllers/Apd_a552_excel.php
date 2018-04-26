<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a552_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a552_model');
 }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir',
 // 'a552' => $this->apd_a552_model->listing());
 $data=$this->Apd_a552_model->listing();
 $totalmahasiswa=$this->Apd_a552_model->totmahasiswa();
 $this->load->view('User/Butir5/tampilan_borang5.5.2.php',array('data'=>$data,
																'totmahasiswa'=>$totalmahasiswa));
 }

  public function ubah(){
 	$this->load->view('User/Butir5/tampilan_borang5.5.2.php');	
 }

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir',
 // 'a552' => $this->apd_a552_model->listing());
 $data=$this->Apd_a552_model->listing();
 $totalmahasiswa=$this->Apd_a552_model->totmahasiswa();
 $this->load->view('User/Butir5/tampilan_borang5.5.2_excel.php',array('data'=>$data,
																'totmahasiswa'=>$totalmahasiswa));
 
 }

}