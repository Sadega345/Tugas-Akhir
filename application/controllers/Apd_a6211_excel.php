<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a6211_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a6211_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6211' => $this->apd_a6211_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.2.1.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6211' => $this->apd_a6211_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.2.1.1_excel.php',$data);
 }

}