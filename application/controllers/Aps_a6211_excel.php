<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6211_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a6211_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6211' => $this->aps_a6211_model->listing());
 $this->load->view('vw_aps_a6211',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6211' => $this->aps_a6211_model->listing());
 $this->load->view('vw_aps_a6211_excel',$data);
 }

}