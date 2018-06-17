<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a345_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a345_model');
 }

public function index() {
 $data = array( 'title' => '  TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN',
 'a345' => $this->apd_a345_model->listing());
 $this->load->view('User/Butir3/tampilan_borang3.4.5.php',$data);
 $jmllulusan_wsd=$this->Apd_a345_model->jmllulusan_wsd();
 }

 public function ubah(){
 	$this->load->view('User/Butir3/edit_borang345.php');
 }

public function export_excel(){
 $data = array( 'title' => '  TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN',
 'a345' => $this->apd_a345_model->listing());
 $this->load->view('User/Butir3/tampilan_borang3.4.5_excel.php',$data);
 }

}