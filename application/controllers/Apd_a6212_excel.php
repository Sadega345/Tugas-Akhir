<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a6212_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a6212_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6212' => $this->apd_a6212_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.2.1.2.php',$data);
 }

public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.2.1.2.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6212' => $this->apd_a6212_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.2.1.2_excel.php',$data);
 }

}