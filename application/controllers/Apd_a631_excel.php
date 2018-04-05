<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a631_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a631_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP',
 'a631' => $this->apd_a631_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.3.1.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.3.1.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP',
 'a631' => $this->apd_a631_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.3.1_excel.php',$data);
 }

}