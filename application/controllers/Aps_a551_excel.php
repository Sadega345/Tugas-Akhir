<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a551_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a551_model');
 }

public function index() {
$data=$this->Aps_a551_model->listing();
$avg=$this->Aps_a551_model->avg();
 $this->load->view('Users/Butir5/tampilan_borang5.5.1.php',array('data'=>$data,
																 'avg'=>$avg));
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 5.5.1 : PEMBIMBINGAN TUGAS AKHIR ATAU SKRIPSI',
 'a551' => $this->aps_a551_model->listing());
 $this->load->view('Users/Butir5/tampilan_borang5.5.1_excel.php',$data);
 }

}